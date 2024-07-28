<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'merk' => 'required|min:3|unique:kendaraan,merk',
            'model' => 'required',
            'plat_nomor' => 'required',
            'harga_sewa' => 'required'
        ]);

        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'kendaraan created successfully.');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'merk' => 'required|min:3|unique:kendaraan,merk' . $kendaraan->id,
            'model' => 'required',
            'plat_nomor' => 'required',
            'harga_sewa' => 'required'
        ]);

        $kendaraan->update($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'kendaraan updated successfully.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with('success', 'kendaraan deleted successfully.');
    }
}

