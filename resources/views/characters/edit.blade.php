@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Character</h1>

        <form method="POST" action="{{ route('admin.characters.update', $character->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $character->name }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $character->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="attack">Attack:</label>
                <input type="number" name="attack" id="attack" class="form-control" value="{{ $character->attack }}">
            </div>

            <div class="form-group">
                <label for="defence">Defence:</label>
                <input type="number" name="defence" id="defence" class="form-control" value="{{ $character->defence }}">
            </div>

            <div class="form-group">
                <label for="speed">Speed:</label>
                <input type="number" name="speed" id="speed" class="form-control" value="{{ $character->speed }}">
            </div>

            <div class="form-group">
                <label for="life">Life:</label>
                <input type="number" name="life" id="life" class="form-control" value="{{ $character->life }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
