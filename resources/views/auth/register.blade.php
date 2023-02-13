@extends('layouts.app')

@section('content')
<div class="container containerLoginBox">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card loginBox">
                <div class="card-header loginBoxHeader">
                    <h1>Create student</h1>
                    <img class="loginBoxLogo" src="../img/loginFronted/logo_nevermore_academy.png" alt="Nevermore Academy Logo">
                </div>

                <div class="card-body loginBoxBody">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- <div class="loginBox">
    <div class="img" "> 
        <img src="/img/loginFronted/logo_nevermore_academy.png" width="150" height="150"></img> 
    </div>
        <div class="email">
            <label for="email"><p><b style="color: #EAA41C">Outcast Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
        </div>
    
        <div class="password">
            <label for="psw"><b style="color:#EAA41C">Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
        </div>

    <div class="btn-continue">
            <button class="continue" type="submit" value="CONTINUE">CONTINUE</button>
        </div>
</div> -->
