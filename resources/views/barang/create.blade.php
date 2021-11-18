<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Barang</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('backend/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('backend/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('backend/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('backend/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('layouts.bagian.navbar')
            </nav>
            <!-- End Navigation -->

            {{-- Sidebar --}}
            @include('layouts.bagian.sidebar')
            {{-- End Sidebar --}}

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Data Baju</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

            {{-- Content --}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                               <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nama Baju</label>
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                         @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Suplier</label>
                                        <select name="id_suplier" class="form-control @error('id_suplier') is-invalid @enderror" >
                                            @foreach($Suplier as $data)
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
                                        <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror">
                                         @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Stok</label>
                                        <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
                                         @error('stok')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Baju</label>
                                        <input type="file" name="cover" class="@error('cover') is-invalid @enderror">
                                         @error('cover')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
            {{-- end Content --}}

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('backend/js/raphael.min.js') }}"></script>
        <script src="{{ asset('backend/js/morris.min.js') }}"></script>
        <script src="{{ asset('backend/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('backend/js/startmin.js') }}"></script>

    </body>
</html>
