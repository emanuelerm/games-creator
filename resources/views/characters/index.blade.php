@extends('layouts.app')

@section('content')

<main class="d-flex align-items-center">
    <div class="container scroll d-flex gap-5">
        @foreach ($characters as $character)
            <div class="card">
                <h3>{{ $character->name }}</h3>
            </div>
        @endforeach
    </div>
</main>

@endsection
