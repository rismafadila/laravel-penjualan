@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <style>
                        .about p{
                            word-spacing: 5px;
                            line-height: 25px;
                            margin-left: 10%;
                            margin-right: 40%;

                        }
                        /* footer {
                            border: 1px solid #0e0d0d;
                  background-color:#0e0d0d ;
                  padding-top: 10px;
                  padding-bottom: 10px;
                  margin-top: 25%;
                  width: 150%;

                        } */
                    </style>

                    <section class="about">
                        <div class="container">
                            <img src="{{ asset('assets/img/logo.jpg') }}" class="rounded" alt="" width="50%" height="100%" margin-right="100%">
                          </div>
                        <div class="container">
                            <i><p>
                                "Oclo meyakini bahwa setiap perempuan mampu menggerakan
                                berbagai perubahan salah satunya dengan berpenampilan yang baik"
                            </p>
                            </i>
                            <p>
                                Oclo adalah salah satu e-commmers model fashion di Indonesia yang menjual
                                berbagai macam koleksi baju wanita, blouse, celana panjang, celana baggy pants,
                                celana joger dan accesoris model terbaru lainya.
                            </p><br><br>
                        </div>
                    </section>
                    {{-- <footer>
                        <div class="container">
                            <strong><center>Copyright &copy; 2021
                                <a href="https://instagram.com/oclo.official">Oclo Official.</a>
                                All Right Reserved
                            </center></strong>
                        </div>
                    </footer> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
