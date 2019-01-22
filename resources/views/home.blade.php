{{-- Identificação dos autores:
 Valter Cardoso   - nº31062
 Gustavo Teixeira - nº21736 --}}

@extends('layouts.app')

@section('title', 'Home')

@section('left')

    @if ( auth()->user()->is_admin )
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="background-color: #F0F07A"><a href="/games/create">Create Games</a></li>
        <li class="list-group-item" style="background-color: #F0F07A"><a href="/consoles/create">Create Consoles</a></li>
        <li class="list-group-item" style="background-color: #F0F07A"><a href="#">All Rents</a></li>
        <li class="list-group-item" style="background-color: #F0F07A"><a href="#">Rents Incompleted</a></li>
        <li class="list-group-item" style="background-color: #F0F07A"><a href="#">Admin Info</a></li>
    </ul>
    @else
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="background-color: #F0F07A"><a href="#">Personal Info</a></li>
        <li class="list-group-item" style="background-color: #F0F07A"><a href="#">View Shopping Cart</a></li>
        <li class="list-group-item" style="background-color: #F0F07A"><a href="#">My Rents</a></li>
    </ul>
    @endif
    
@endsection

@section('center')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
