<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use App\Exports\ProductExcel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanPemesanan;
class PemesananControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('BackEnd.pemesanan.index', compact('pemesanan'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $pemesanan = Pemesanan::find($id);
        return view('BackEnd.pemesanan.show' , compact('pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $pemesanan = Pemesanan::find($id);
        $Pembayaran = Pembayaran::find($pemesanan->pembayaran->id);
        $Pembayaran->status_pembayaran == $request->status_pembarayan;
        $Pembayaran->save();
        return redirect()->route('pemesanan.index')->with('success', 'Data berhasil diupdate');
    }


    function laporan() {
        return Excel::download(new LaporanPemesanan, "laporanPemesanan".date("YmdHis").".xlsx");
    }
}
