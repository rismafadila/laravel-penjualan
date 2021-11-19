@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ABOUT US') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="about">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
