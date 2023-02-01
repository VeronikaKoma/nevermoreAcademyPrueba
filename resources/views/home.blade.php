@extends('layouts.app')

@section('content')

@foreach ($users as $user)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <!--La siguiente línea es del UPDATE, falta añadir la clase bootstrap-->
    <a class="update"
        href="{{ route('editUser', ['id' => $user->id]) }}">✏️</a>
        <!--Fin del UPDATE-->
    <!--La siguiente línea es del SHOW, falta añadir la clase bootstrap-->  
    <a class="show"
        href="{{ route('showUser', ['id' => $user->id]) }}">👁️</a> 
        <!--Fin del SHOW-->
    <img src="{{ $user->img }}" alt="{{ $user->name }} {{ $user->surname }} profile picture">
    <p>{{ $user->id }}. {{ $user->name }} {{ $user->surname }}</p>
    <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="deleteButton" onclick="return confirm ('Are you sure you would like to delete this student? {{$user->name}} - ID{{$user->id}}')">🗑</button>
    </form>
</div>
    @endforeach
@endsection