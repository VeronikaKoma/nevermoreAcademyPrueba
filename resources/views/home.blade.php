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
</div>
@endsection
