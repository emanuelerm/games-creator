@extends('layouts.app')

@section('content')
@vite('resources/scss/animation/carousel.scss')
<main class="d-flex align-items-center my-3">
    <div class="container scroll d-flex gap-5">
        @foreach ($characters as $character)
            <div class="card text-white d-flex flex-column align-items-center justify-content-between p-2 text-center">
                <div class="card-title">
                    <h5 class="m-0 truncate">{{ $character->name }}</h5>
                </div>
                <div>
                    <img src="/image/chri.jpg" alt="{{$character->name }}">
                </div>
            </div>

        @endforeach
    </div>
</main>

@endsection
