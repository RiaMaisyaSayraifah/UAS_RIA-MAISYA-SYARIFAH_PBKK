@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Kendaraan</h1>
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
                <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Model</th>
                            <th scope="col">Plat Nomor</th>
                            <th scope="col">Harga Sewa</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($kendaraan as $index => $kendaraan)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $kendaraan->merk }}</td>
                            <td>{{ $kendaraan->model }}</td>
                            <td>{{ $kendaraan->plat_nomor }}</td>
                            <td>{{ $kendaraan->harga_sewa }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST">
                                    <a href="{{ route('kendaraan.show', $kendaraan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kendaraan Belum Ada.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
