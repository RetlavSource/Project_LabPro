@extends('layouts.app')

@section('title', 'Create Game')


{{-- CREATE --}}
{{-- GAMES  --}}
@section('center')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Create a Game') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="/games" enctype="multipart/form-data">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name of the Game') }}</label>
    
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>
                                
                                <div class="col-md-8">
                                    <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="6" required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="value_day" class="col-md-3 col-form-label text-md-right">{{ __('Value per Day') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="value_day" type="number" class="form-control{{ $errors->has('value_day') ? ' is-invalid' : '' }}" name="value_day" value="{{ old('value_day') }}">
                            
                                    @if ($errors->has('value_day'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('value_day') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantity" class="col-md-3 col-form-label text-md-right">{{ __('Number of Games') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="quantity" type="number" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}">
                            
                                    @if ($errors->has('quantity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="youtube_link" class="col-md-3 col-form-label text-md-right">{{ __('YouTube Link') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="youtube_link" type="text" class="form-control{{ $errors->has('youtube_link') ? ' is-invalid' : '' }}" name="youtube_link" value="{{ old('youtube_link') }}">
                            
                                    @if ($errors->has('youtube_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('youtube_link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="store_link" class="col-md-3 col-form-label text-md-right">{{ __('Store Link') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="store_link" type="text" class="form-control{{ $errors->has('store_link') ? ' is-invalid' : '' }}" name="store_link" value="{{ old('store_link') }}">
                            
                                    @if ($errors->has('store_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('store_link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="game_link" class="col-md-3 col-form-label text-md-right">{{ __('Game Link') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="game_link" type="text" class="form-control{{ $errors->has('game_link') ? ' is-invalid' : '' }}" name="game_link" value="{{ old('game_link') }}">
                            
                                    @if ($errors->has('game_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('game_link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="icon_path" class="col-md-3 col-form-label text-md-right">{{ __('Game Icon Image') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="icon_path" type="file" class="form-control-file{{ $errors->has('icon_path') ? ' is-invalid' : '' }}" name="icon_path" value="{{ old('icon_path') }}">
                            
                                    @if ($errors->has('icon_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('icon_path') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image_path" class="col-md-3 col-form-label text-md-right">{{ __('Image (1600x500)') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="image_path" type="file" class="form-control-file{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path" value="{{ old('image_path') }}">
                            
                                    @if ($errors->has('image_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image_path') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="multi_image" class="col-md-3 col-form-label text-md-right">{{ __('Game Images') }}</label>
                            
                                <div class="col-md-8">
                                    <input id="multi_image" type="file" class="form-control-file{{ $errors->has('multi_image') ? ' is-invalid' : '' }}" name="multi_image[]" multiple value="{{ old('multi_image') }}">
                            
                                    @if ($errors->has('multi_image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('multi_image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                 
                            @php
                                $consoles = \App\Console::all();
                                // foreach ($users as $user) {
                                //     echo $user->name;
                                // }
                            @endphp

                            <div class="form-group row">
                                <label for="console_id" class="col-md-3 col-form-label text-md-right">{{ __('Console') }}</label>

                                <div class="col-md-8">
                                    <select id="console_id" class="form-control{{ $errors->has('console_id') ? ' is-invalid' : '' }}" name="console_id" required>
                                        
                                        @foreach ($consoles as $console)
                                            <option value="{{ $console->id }}">{{ $console->name }}</option>
                                        @endforeach
                                      
                                    </select>
                                
                                    @if ($errors->has('console_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('console_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-outline-success btn-block">
                                        {{ __('Criar') }}
                                    </button>
    
                                </div>
                            </div>
                        </form>
    
                        {{-- Retrieving tho OK status of the operation --}}
                        @if (session('status'))
                            <p class="offset-md-2 text-center font-weight-bold text-success">{{ session('status') }}</p>
                        @endif
    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection