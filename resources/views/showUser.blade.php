@extends('layout.app')

@section('content')

    <div class= "text-center">
        <img class= "" src="{{ $user->img}}">
        
        <div>
            <h1 class="boldy">{{ $user->name}}</h1>
            <h1 class="boldy">{{ $user->surname}}</h1>
            <h2>{{ $user->email}}</h2>
            <h2>{{ $user->currentTerm}}</h2>
        </div>
    </div>

    <div>
        <a class="" href="{{ route('home') }}">↩️</a>
    </div>

@endsection
