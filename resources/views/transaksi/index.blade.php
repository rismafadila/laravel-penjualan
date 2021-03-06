@extends('layouts.admin')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">

        <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-primary float-right">Tambah Data Transaksi</a>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive table-bordered">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($transaksi as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->kode }}</td>
                        <td>{{ $data->barang->nama }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->qty }}</td>
                        <td>{{ $data->tanggal }}</td>

                        <td>
                            <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                            <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-warning">Show</a>
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
