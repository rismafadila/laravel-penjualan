@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="nama" value="{{$barang->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama Supplier</label>
                        <input type="text" name="nama" value="{{ $barang->suplier->nama }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Harga</label>
                        <input type="text" name="harga" value="{{$barang->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Stok</label>
                        <input type="text" name="stok" value="{{$barang->stok}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <br>
                        <img src="{{ $barang->image() }}" height="75" style="padding:10px;" />
                        <input type="file" name="cover" class="form-control">
                    </div>
                    <div class="form-group">
                        <a href="{{route('barang.index')}}" class="btn btn-block btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
