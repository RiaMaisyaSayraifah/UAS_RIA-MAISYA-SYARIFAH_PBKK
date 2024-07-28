@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Merk</th>
                        <td>{{ $kendaraan->merk }}</td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td>{{ $kendaraan->model }}</td>
                    </tr>
                    <tr>
                        <th>Plat Nomor</th>
                        <td>{{ $kendaraan->plat_nomor }}</td>
                    </tr>
                    <tr>
                        <th>Harga Sewa</th>
                        <td>{{ $kendaraan->harga_sewa }}</td>
                    </tr>
                </table>
                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
@endsection
