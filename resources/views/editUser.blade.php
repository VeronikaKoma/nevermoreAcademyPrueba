<!--Todo esto corresponde al código UPDATE-->

<h2 class="card-title">Edit Outcast</h2>

    <form class="justify-content-center" action="{{ route('updateUser', $user->id) }}" method="POST">
                        @method('PATCH')
                        @csrf 
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="border: solid 3px purple" id="inputGroup-sizing-default"></span>
                            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->name }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="border: solid 3px purple" id="inputGroup-sizing-default"></span>
                            <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->surname }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                            <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->email }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                            <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user ->img}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Academic Year</span>
                            <input type="text" name="CurrentTerm" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->year }}">
                        </div>
                    
                        <div class="btnContainer">
                        <div class="btnBack" >
                            <button class="cancelBtn"><a href="{{ route('home') }}">CANCEL</a></button>
                        </div>
                        <div class="btnCreate">
                            <button type="submit" class="editBtn" value="Create">EDIT</button>
                        </div>
                    </div>

<!--Aquí termina lo del código UPDATE-->