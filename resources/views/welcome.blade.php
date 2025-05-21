@extends('layouts.welcome_body')

@section('content')
    <div class="rope">
        <img src="https://notbigmuzzy.github.io/codepen/example1/rope.png" class="rope-left">
        <img src="https://notbigmuzzy.github.io/codepen/example1/rope.png" class="rope-right">
    </div>

    <div class="page1 page">
        <img src="https://notbigmuzzy.github.io/codepen/example1/plate1.png" class="plate1">
        <div class="body-wrap">
            <h1 class="page1-title">M'Orders</h1> 
            @if (Route::has('login'))
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                </div>
            @endif
        </div>
    </div>
@endsection
