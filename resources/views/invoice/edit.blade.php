@extends('template.app')

@section('content')
<div class="section-header">
    <h1>Edit Invoice</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('invoice.update', $invoice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nomor">Nomor Invoice</label>
                        <input type="text" name="nomor" id="nomor" class="form-control" value="{{ old('nomor', $invoice->nomor) }}" required>
                    </div>
                
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $invoice->tanggal) }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah', $invoice->jumlah) }}" required>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

