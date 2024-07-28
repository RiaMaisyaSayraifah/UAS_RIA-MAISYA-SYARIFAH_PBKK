@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('invoice.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nomor Invoice</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Actions</th>
                        </tr>
                        @forelse ($invoice as $index => $invoice)
                        <tr>
                            <td>{{ $invoice->id }}</td>
                            <td>{{ $invoice->nomor }}</td>
                            <td>{{ $invoice->tanggal }}</td>
                            <td>{{ $invoice->jumlah }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('invoice.destroy', $invoice->id) }}" method="POST">
                                    <a href="{{ route('invoice.show', $invoice->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('invoice.edit', $invoice->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Invoice Belum Ada.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
