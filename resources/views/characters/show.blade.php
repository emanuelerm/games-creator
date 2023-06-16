@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Dettagli del personaggio</h1></div>

                    <div class="panel-body">
                        <h2>{{ $character->name }}</h2>
                        <p>Descrizione: {{ $character->description }}</p>
                        <p>Attacco: {{ $character->attack }}</p>
                        <p>Difesa: {{ $character->defense }}</p>
                        <p>Velocità: {{ $character->speed }}</p>
                        <p>Vita: {{ $character->life }}</p>
                        <h3>Item associati:</h3>
                        <ul>
                            @foreach ($character->item as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection