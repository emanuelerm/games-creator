@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Dettagli del personaggio</h1></div>

                    <div class="panel-body text-white">
                        <h2>{{ $character->name }}</h2>
                        <p>Descrizione: {{ $character->description }}</p>
                        <p>Attacco: {{ $character->attack }}</p>
                        <p>Difesa: {{ $character->defence }}</p>
                        <p>Velocità: {{ $character->speed }}</p>
                        <p>Vita: {{ $character->life }}</p>
                        <h3>Item associati:</h3>
                        @if ($character->items && count($character->items) > 0)
                            <ul>
                                @foreach ($character->items as $item)
                                    <li>{{ $item->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
