@extends('layouts.app')

@section('content')
<div class="miRead">
<p>macarrones con queso</p>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->password }}</p>
        <p>{{ $user->surname }}</p>
        <p>{{ $user->currentTerm }}</p>
        <p>macarrones</p>
    @endforeach
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
    <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit"
            class="deleteButton"
            onclick="return confirm ('Are you sure you would like to delete this student? {{$user->name}} - ID{{$user->id}}')">
            🗑
        </button>
    </form>
</div>
@endsection
