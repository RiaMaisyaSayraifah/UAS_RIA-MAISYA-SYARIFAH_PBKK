<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewa = Penyewa::all();
        return view('penyewa.index', compact('penyewa'));
    }

    public function create()
    {
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|unique:penyewa,nama',
            'alamat' => 'required',
            'telepon' => 'required'
        ]);

        Penyewa::create($request->all());
        return redirect()->route('penyewa.index')->with('success', 'Penyewa created successfully.');
    }

    public function show(Penyewa $penyewa)
    {
        return view('penyewa.show', compact('penyewa'));
    }

    public function edit(Penyewa $penyewa)
    {
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, Penyewa $penyewa)
    {
        $request->validate([
            'nama' => 'required|min:3|unique:penyewa,nama,' . $penyewa->id,
            'alamat' => 'required',
            'telepon' => 'required'
        ]);

        $penyewa->update($request->all());
        return redirect()->route('penyewa.index')->with('success', 'Penyewa updated successfully.');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with('success', 'Penyewa deleted successfully.');
    }
}

