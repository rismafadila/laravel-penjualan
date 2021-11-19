@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">

            <a href="{{route('suplier.create')}}" class="btn btn-sm btn-primary float-right">Tambah Data Suplier</a>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive table-bordered">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Suplier</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($suplier as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>
                                <form action="{{route('suplier.destroy',$data->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <a href="{{route('suplier.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('suplier.show',$data->id)}}" class="btn btn-warning">Show</a>
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
