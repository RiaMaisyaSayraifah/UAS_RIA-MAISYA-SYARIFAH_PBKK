@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Kwiitansi</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kwitansi.update', $kendaraan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nomor_kwitansi">Nomor Kwitansi</label>
                        <input type="text" name="nomor_kwitansi" class="form-control" value="{{ $kwitansi->nomor_kwitansi }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kwitansi">Tanggal</label>
                        <input type="date" name="tanggal_kwitansi" class="form-control" value="{{ $kwitansi->tanggal }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="{{ $kwitansi->jumlah }}">
                    </div>
                    <div class="form-group">
                        <label for="sewa_id">Sewa ID</label>
                        <select name="sewa_id" class="form-control">
                            @foreach($sewa as $sewa)
                            <option value="{{ $sewa->id }}" {{ $sewa->id == $sewa->kwitansi_id ? 'selected' : '' }}>
                                {{ $sewa->id }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
