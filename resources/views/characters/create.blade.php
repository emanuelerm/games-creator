@extends('layouts.app')

@section('content')

<form action="{{ route('admin.characters.store') }}" method="POST">
    @csrf
    <div class="row justify-content-center mb-3 mt-5 mx-5 text-white">
        <div class="col-8">
            <div class="col-auto mb-5">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="col-auto mb-5">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="col d-flex justify-content-between">
                <div class="col-auto">
                    <label for="attack">Attacco</label>
                    <input type="number" name="attack" id="attack" class="form-control">
                </div>
                <div class="col-auto">
                    <label for="defence">Difesa</label>
                    <input type="number" name="defence" id="defence" class="form-control">
                </div>
                <div class="col-auto">
                    <label for="speed">Velocità</label>
                    <input type="number" name="speed" id="speed" class="form-control">
                </div>
                <div class="col-auto">
                    <label for="life">Vita</label>
                    <input type="number" name="life" id="life" class="form-control">
                </div>
            </div>
            <div class="d-flex justify-content-center mb-3 gap-3 mt-5">
                <button type="submit" class="btn btn-primary">Add character</button>
                <button type="reset" class="btn btn-secondary px-4">Reset form</button>
            </div>
        </div>
    </div>
</form>

@endsection
