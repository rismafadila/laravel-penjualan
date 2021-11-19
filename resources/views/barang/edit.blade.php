@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('barang.update',$barang->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" name="nama" value="{{$barang->nama}}" class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Suplier</label>
                                <select name="id_suplier" class="form-control @error('id_suplier') is-invalid @enderror" >
                                    @foreach($suplier as $data)
                                        <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                                @error('id_suplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" value="{{$barang->harga}}" class="form-control @error('harga') is-invalid @enderror">
                                    @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="text" name="stok" value="{{$barang->stok}}" class="form-control @error('stok') is-invalid @enderror">
                                    @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Foto Baju</label> <br>
                                <img src="{{ $barang->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="cover">
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
