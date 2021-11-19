@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="nama" value="{{ $transaksi->barang->nama }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jumlah</label>
                        <input type="text" name="jumlah" value="{{$transaksi->jumlah}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Bayar</label>
                        <input type="text" name="bayar" value="{{$transaksi->bayar}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <a href="{{route('transaksi.index')}}" class="btn btn-block btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
