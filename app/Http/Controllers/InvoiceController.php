<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoice = Invoice::all();
        return view('invoice.index', compact('invoice'));
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoice.index')->with('success', 'invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {
        return view('invoice.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoice.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);

        $invoice->update($request->all());
        return redirect()->route('invoice.index')->with('success', 'invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoice.index')->with('success', 'invoice deleted successfully.');
    }
}


