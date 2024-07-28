@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Kwitansi</h1>
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
                <a href="{{ route('kwitansi.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nomor Kwitansi</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Sewa ID</th>
                            <th>Actions</th>
                        </tr>
                        @forelse ($kwitansi as $index => $kwitansi)
                        <tr>
                            <td>{{ $kwitansi->id }}</td>
                            <td>{{ $kwitansi->nomor_kwitansi }}</td>
                            <td>{{ $kwitansi->tanggal }}</td>
                            <td>{{ $kwitansi->jumlah }}</td>
                            <td>{{ $kwitansi->sewa_id }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kwitansi.destroy', $kwitansi->id) }}" method="POST">
                                    <a href="{{ route('kwitansi.show', $kwitansi->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('kwitansi.edit', $kwitansi->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kwitansi Belum Ada.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
