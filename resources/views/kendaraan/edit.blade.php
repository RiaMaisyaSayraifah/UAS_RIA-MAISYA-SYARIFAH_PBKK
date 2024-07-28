@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Edit Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control" value="{{ old('merk', $kendaraan->merk) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $kendaraan->model) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="plat_nomor">Plat Nomor</label>
                        <input type="text" name="plat_nomor" id="plat_nomor" class="form-control" value="{{ old('plat_nomor', $kendaraan->plat_nomor) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="number" name="harga_sewa" id="harga_sewa" class="form-control" value="{{ old('harga_sewa', $kendaraan->harga_sewa) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
