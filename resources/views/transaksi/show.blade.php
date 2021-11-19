@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Kode</label>
                        <input type="text" name="kode" value="{{$transaksi->kode}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="nama" value="{{ $transaksi->barang->nama }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Harga</label>
                        <input type="number" name="harga" value="{{$transaksi->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Qty</label>
                        <input type="text" name="qty" value="{{$transaksi->qty}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Tanggal</label>
                        <input type="text" name="tanggal" value="{{$transaksi->tanggal}}" class="form-control" readonly>
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
