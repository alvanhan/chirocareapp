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

class ContentControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FrontEnd.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function layanan()
    {
        $layanan = Layanan::all();
        return view('FrontEnd.layanan', compact('layanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function riwayatLayanan()
    {

        if(Auth::check()){
            $pemesanan = Pemesanan::where('id_user', Auth::user()->id)->get();
            return view('FrontEnd.riwayat', compact('pemesanan'));
        }
        return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
    }

    /**
     * Display the specified resource.
     */
    public function kontak()
    {
        return view('FrontEnd.kontak');
    }
}
