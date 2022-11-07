@extends('layout.template')

@section('title', 'Kampoeng Legenda')

@section('content')
    @include('layout.navbar')
    <div class="d-flex justify-content-around">
    @for($i = 0; $i < count($stand); $i++)
        <div class="card" style="width: 18rem;">
        <img src={{ $image[$i] }} class="card-img-top mx-auto d-block" style="width: 100px; height: 100px; margin: 20px;" alt="...">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $stand[$i] }}</h5>
            <p class="card-text">{{ $menu[$i] }}</p>
            <a href="#" class="btn btn-primary" style="margin: 10px;">Check</a>
            @if($status[$i] == "Closed")
            <div class="alert alert-danger d-inline-bock" style="text-align:center">
                Closed
            </div>
            @else
            <div class="alert alert-success d-inline-bock" style="text-align:center">
                Open
            </div>
            @endif
        </div>
        </div>
        @endfor
    </div>
@endsection