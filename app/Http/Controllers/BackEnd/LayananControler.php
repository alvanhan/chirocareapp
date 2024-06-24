<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\JenisLayanan;
class LayananControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('BackEnd.layanan.index', compact('layanan'));
    }


    function create()  {
        $jenisLayanans = JenisLayanan::all();
        return view('BackEnd.layanan.create', compact('jenisLayanans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $layanan = Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_layanan' => $request->deskripsi_layanan,
            'harga_layanan' => $request->harga_layanan,
            'status_layanan' => $request->status_layanan,
            'jenis_layanan' => $request->jenis_layanan,
        ]);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Layanan::findOrFail($id);
        $jenisLayanans = JenisLayanan::all();
        return view('BackEnd.layanan.edit', compact('service', 'jenisLayanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_layanan' => $request->deskripsi_layanan,
            'harga_layanan' => $request->harga_layanan,
            'status_layanan' => $request->status_layanan,
            'jenis_layanan' => $request->jenis_layanan,
        ];

        $service = Layanan::findOrFail($id);
        $service->update($data);

        return redirect()->route('layanan.index')->with('success', 'Layanan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Layanan::findOrFail($id);
        $service->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan deleted successfully.');
    }
}
