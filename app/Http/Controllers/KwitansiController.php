<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use App\Models\Sewa;
use Illuminate\Http\Request;

class KwitansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kwitansi = Kwitansi::all();
        return view('kwitansi.index', compact('kwitansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sewa = Sewa::all();
        return view('kwitansi.create', compact('sewa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_kwitansi' => 'required',
            'tanggal_kwitansi' => 'required|date',
            'jumlah' => 'required|numeric',
            'sewa_id' => 'required',
        ]);

        Kwitansi::create($request->all());
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kwitansi  $kwitansi
     * @return \Illuminate\Http\Response
     */
    public function show(Kwitansi $kwitansi)
    {
        return view('kwitansi.show', compact('kwitansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kwitansi  $kwitansi
     * @return \Illuminate\Http\Response
     */
    public function edit(Kwitansi $kwitansi)
    {
        $sewa = Sewa::all();
        return view('kwitansi.edit', compact('kwitansi', 'sewa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kwitansi  $kwitansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kwitansi $kwitansi)
    {
        $request->validate([
            'nomor_kwitansi' => 'required',
            'tanggal_kwitansi' => 'required|date',
            'jumlah' => 'required|numeric',
            'kwitansi_id' => 'required',
        ]);

        $kwitansi->update($request->all());
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kwitansi  $kwitansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kwitansi $kwitansi)
    {
        $kwitansi->delete();
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi deleted successfully.');
    }
}

