<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Layanan;
use App\Models\JenisLayanan;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Str;
use Xendit\Xendit;
use Log;
class ProsesControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, string $id)
    {

        if(Auth::check()){
            $layanan = Layanan::find($id);
            $user = User::find(Auth::user()->id);
            return view('FrontEnd.pemesanan', compact('layanan', 'user'));
        }
        return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
    }

    function nontunaipesan(Request $request) {
        $pembayaran = Pembayaran::find($request->pembayaran);
        return view('FrontEnd.manual', compact('pembayaran'));
    }


    public function sendpemabayaran(Request $request)
    {

        $layanan = Layanan::find($request->id_layanan);
        $pemesanan = new Pemesanan();
        $pemesanan->id_user = Auth::user()->id;
        $pemesanan->id_layanan = $request->id_layanan;
        $pemesanan->keluhan = $request->keluhan;
        $pemesanan->kode_pemesanan = (time().Str::random(5));
        $pemesanan->metode_pembayaran = $request->metode_pembayaran;
        $pemesanan->total_harga = $layanan->harga_layanan;
        $pemesanan->save();
        if ($request->metode_pembayaran == 'nontunai') {
            Xendit::setApiKey(env("XENDIT_SECRET_KEY"));
            $params = [
                'for-user-id' => env("XENDIT_USER_ID"),
                'external_id' =>  $pemesanan->kode_pemesanan,
                'description' => 'Pembayaran Layanan untuk '.$layanan->nama_layanan,
                'amount' =>  $layanan->harga_layanan,
                'payment_methods' => ['BCA', 'BNI', 'BRI', 'MANDIRI', 'PERMATA'],
                'success_redirect_url' => route('content.riwayat'),
                'failure_redirect_url' => route('content.riwayat'),
            ];
            $createInvoice = \Xendit\Invoice::create($params);
            $pembayaran = new Pembayaran();
            $pembayaran->id_pemesanan = $pemesanan->id;
            $pembayaran->status_pembayaran = strtolower($createInvoice['status']);
            $pembayaran->tanggal_pembayaran = null;
            $pembayaran->pembayaran_diterima = 0;
            $pembayaran->url_pembayaran = $createInvoice['invoice_url'];
            $pembayaran->log_xendit = json_encode($createInvoice, true);
            $pembayaran->save();
            return redirect($createInvoice['invoice_url']);
        }else{
            $pembayaran = new Pembayaran();
            $pembayaran->id_pemesanan = $pemesanan->id;
            $pembayaran->status_pembayaran = 'belum dibayar';
            $pembayaran->tanggal_pembayaran = null;
            $pembayaran->pembayaran_diterima = 0;
            $pembayaran->url_pembayaran = null;
            $pembayaran->log_xendit = null;
            $pembayaran->save();
            return redirect()->route('nontunaipesan.index', compact('pembayaran'))->with('success', 'Pemesanan berhasil, silahkan lakukan pembayaran melalui resepsionis kami.');
        }
    }
}
