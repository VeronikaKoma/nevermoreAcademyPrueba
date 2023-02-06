@extends('layouts.app')

@section('content') 
    <div class="containerCreate">Macarrones
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="cardTitle">New Student</h2>
                        <form class="justify-content-center" action="{{ route('storeUser') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Outcast Name</span>
                                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Wednesday">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Surname</span>
                                <input type="text" name="surname" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default" placeholder="Addams">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                <input type="email" name="email" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="wednesdayaddams@nevermoreacademy.com">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                                <input type="password" name="password" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="123456789">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Current Term</span>
                                <input type="text" name="currentTerm" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="2022-2023">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Profile Picture</span>
                                <input type="img" name="img" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    placeholder="www.picture.com">
                            </div>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('home') }}">Volver</a>

                                <button type="submit" class="btn btn-outline-success" value="Create">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection














