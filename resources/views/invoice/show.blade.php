@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Data Invoice</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor Invoice</th>
                        <td>{{ $invoice->nomor }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $invoice->tanggal }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td>{{ $invoice->jumlah }}</td>
                    </tr>
                    
                </table>
                <a href="{{ route('invoice.index') }}" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
@endsection
