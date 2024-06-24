<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisLayanan;
class JenisLayananControler extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisLayanans = JenisLayanan::all();
        return view('BackEnd.jenis_layanan.index', compact('jenisLayanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BackEnd.jenis_layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JenisLayanan::create($request->all());
        return redirect()->route('jenis_layanan.index')->with('success', 'Jenis Layanan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenisLayanan = JenisLayanan::findOrFail($id);
        return view('BackEnd.jenis_layanan.show', compact('jenisLayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenisLayanan = JenisLayanan::findOrFail($id);
        return view('BackEnd.jenis_layanan.edit', compact('jenisLayanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jenisLayanan = JenisLayanan::findOrFail($id);
        $jenisLayanan->update($request->all());
        return redirect()->route('jenis_layanan.index')->with('success', 'Jenis Layanan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jenisLayanan = JenisLayanan::findOrFail($id);
        $jenisLayanan->delete();
        return redirect()->route('jenis_layanan.index')->with('success', 'Jenis Layanan deleted successfully.');
    }
}
