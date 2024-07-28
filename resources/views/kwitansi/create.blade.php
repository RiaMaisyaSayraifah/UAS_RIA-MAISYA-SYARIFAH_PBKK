@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Tambah Kwitansi</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kwitansi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nomor_kwitansi">Nomor Kwitansi</label>
                        <input type="text" name="nomor_kwitansi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kwitansi">Tanggal</label>
                        <input type="date" name="tanggal_kwitansi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="jumlah" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sewa_id">Sewa ID</label>
                        <select name="sewa_id" class="form-control">
                            @foreach($sewa as $sewa)
                            <option value="{{ $sewa->id }}">{{ $sewa->id }}</option>
                            @endforeach
                        </select>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
