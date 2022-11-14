@extends('layout.template')

@section('title', 'Kampoeng Legenda')

@section('content')
    @include('layout.navbar')
    <div class="bg-image" style="background-image: url(https://live.staticflickr.com/767/22549962700_749462163a_b.jpg); background-size: cover; height: 100vh">
        <div class="d-flex justify-content-around" style="padding: 20px;">
        @for($i = 0; $i < count($stand); $i++)
            <div class="card" style="width: 18rem; box-shadow: 0 10px 20px black;">
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
    </div>
@endsection