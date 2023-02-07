@extends('layouts.app')

@section('content')
    <div>
        <button class="btn btn-primary">
            <a href="{{ route('createUser') }}">
                <div class="text-warning">➕</div>
            </a>
        </button>
    </div>
    @foreach ($users as $user)
    <div class="container">
        
        <a class="update"
            href="{{ route('editUser', ['id' => $user->id]) }}">✏️</a>
        
        <a class="show"
            href="{{ route('showUser', $user->id) }}">👁️</a> 
            
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