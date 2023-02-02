@extends('layouts.app')

@section('content')
    <div class="createFormContainer">
        <div class="containerCreate">
            <div class="titleCreateForm">
                <h2>New Student</h2>
            </div>
            <div class="createFormBox">
                <form class="justify-content-center" action="{{ route('storeUser') }}" method="post">
                    @csrf 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                            <input type="text" name="name" class="form-control" aria-label="Sizing example input" 
                            aria-describedby="inputGroup-sizing-default" placeholder="Student Name">
                        </div>

                        <div class="surnameAndEmail">
                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Surname</label>
                                <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Surname">
                            </div>
                                        
                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Email</label>
                                <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email">
                            </div>
                        </div>

                        <div class="passwordAndCurrentTerm">
                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Password</label>
                                <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Password">
                            </div>

                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Current Term</label>
                                <input type="text" name="currentTerm" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Current Term">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label id="inputGroup-sizing-default">Is Teacher</label>
                            <input type="text" name="isTeacher" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Is Teacher">
                        </div>

                        <div class="mb-3">
                            <label id="inputGroup-sizing-default">Image</label>
                            <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insert image url">
                        </div>

                        <div class="buttonsCreateForm" style="text-decoration:none">    
                            <div class="buttonCreateBox">
                                <button type="submit" class="buttonCreateForm" style="text-decoration:none" value="Create">Create</button>
                            </div>

                            <div class="buttonCancelBox">
                                <a style="text-decoration:none" href="{{ user('home') }}">Cancel</a>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection