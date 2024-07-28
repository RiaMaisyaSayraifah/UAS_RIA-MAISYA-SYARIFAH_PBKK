<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Penyewa;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = Sewa::with('penyewa', 'kendaraan')->get();
        return view('sewa.index', compact('sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();
        return view('sewa.create', compact('penyewa', 'kendaraan'));
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
            'penyewa_id' => 'required',
            'kendaraan_id' => 'required',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        Sewa::create($request->all());
        return redirect()->route('sewa.index')->with('success', 'Sewa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa)
    {
        return view('sewa.show', compact('sewa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa)
    {
        $penyewas = Penyewa::all();
        $kendaraans = Kendaraan::all();
        return view('sewa.edit', compact('sewa', 'penyewa', 'kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewa $sewa)
    {
        $request->validate([
            'penyewa_id' => 'required',
            'kendaraan_id' => 'required',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        $sewa->update($request->all());
        return redirect()->route('sewa.index')->with('success', 'Sewa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa)
    {
        $sewa->delete();
        return redirect()->route('sewa.index')->with('success', 'Sewa deleted successfully.');
    }
}
