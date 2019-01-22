@extends('layouts.app')

@section('title', 'Games')

@section('left')
    @include('left')
@endsection

{{-- CREATE --}}
{{-- GAMES  --}}
@section('center')

    @foreach ($games as $game)
        
        <div class="card mb-2">
                <div class="row">
                    <div class="col-sm-4 align-self-center">
                        <a href="/games/{{ $game->id }}"><img src="{{ $game->icon_path }}" alt="Responsive image"></a>
                    </div>
                    <div class="col-sm-8">
                            <div class="card-body">
                                <img src="{{ $game->console->icon_path }}" alt="Responsive image" width="@if ($game->console->tag == 'PC') {{'25'}} @else {{'80'}} @endif">
                                <h4 class="font-weight-bold" style="padding-top:20px">{{ $game->name }}</h4>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><spam class="font-weight-bold">Rent:</spam> only €{{ $game->value_day }}/Day &emsp;&emsp;&emsp;<spam class="font-weight-bold">Games Available:</spam> {{ $game->quantity }}</small>
                            </div>
                    </div>
                </div>
        </div>

    @endforeach

@endsection