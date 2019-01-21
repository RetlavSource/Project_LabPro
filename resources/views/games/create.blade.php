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
                                <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>
                                
                                <div class="col-md-8">
                                    <textarea id="88888888888888888" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" rows="6" required>{{ old('88888888888888888') }}</textarea>

                                    @if ($errors->has('88888888888888888'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('88888888888888888') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="tag" class="col-md-3 col-form-label text-md-right">{{ __('Short Tag Name') }}</label>
    
                                <div class="col-md-8">
                                    <input id="tag" type="text" class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" name="tag" value="{{ old('tag') }}" required>
    
                                    @if ($errors->has('tag'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tag') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="icon" class="col-md-3 col-form-label text-md-right">{{ __('Choose Image Tag') }}</label>
    
                                <div class="col-md-8">
                                    <input id="icon" type="file" class="form-control-file{{ $errors->has('icon') ? ' is-invalid' : '' }}" name="icon" value="{{ old('icon') }}" required>
    
                                    @if ($errors->has('icon'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('icon') }}</strong>
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