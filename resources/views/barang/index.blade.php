@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">

            <a href="{{route('barang.create')}}" class="btn btn-sm btn-primary float-right">Tambah Data Baju</a>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive table-bordered">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama Supplier</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Foto Baju</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($barang as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->suplier->nama }}</td>
                            <td>{{ $data->harga }}</td>
                            <td>{{ $data->stok }}</td>
                            <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Cover"></td>
                            <td>
                                <form action="{{route('barang.destroy',$data->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <a href="{{route('barang.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('barang.show',$data->id)}}" class="btn btn-warning">Show</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                        </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
@endsection
