@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Tambah Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kendaraan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <textarea name="model" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Plat Nomor</label>
                        <textarea name="plat_nomor" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga Sewa</label>
                        <textarea name="harga_sewa" class="form-control" required></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
