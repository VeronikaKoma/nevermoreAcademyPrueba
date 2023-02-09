@extends('layout.app')

@section('content')

    <div class= "text-center">
        <img class= "" src="{{$user->img}}">
        
        <div>
            <h1 class="boldy">{{ $user->name}}</h1>
            <h1 class="boldy">{{ $user->surname}}</h1>
            <h2>{{ $user->email}}</h2>
            <h2>{{ $user->currentTerm}}</h2>
        </div>
    </div>

<!--     He metido aquí la pag 27 del create porque crei que es mas apropiado no sé -->

    <div>
        <button class="btn btn-primary">
            <a href="{{ route('createUser') }}">
                <div class="text-warning">➕</div>
            </a>
        </button>
    </div>

    <div>
        <a class="" href="{{ route('home') }}">↩️</a>
    </div>

@endsection