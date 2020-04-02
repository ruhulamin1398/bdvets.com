<div class="card mb-4 shadow">


    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar navbar-dark ">
            <a class="navbar-brand"> Add Doctor</a>

        </nav>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('doctors.store') }}">
            @csrf
            <div class="form-group">
                <div class="col-auto">
                    <label for="user_id"> User id</label>
                    <select class="form-control mb-2" name="user_id" id="AddOfficeDoctorUserId" required>
                        <option value="1" selected="selected"> Select id</option>
                        @foreach ($users as $user)
                        <option value="{{$user->id}}"> {{$user->id}} | {{$user->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-auto">
                    <label for="office_id"> Office</label>
                    <select class="form-control mb-2" name="office_id" id="AddOfficeDoctorOfficeId" required>
                        <option value="1" selected="selected"> Select Office</option>
                        @foreach ($offices as $office)
                        <option value="{{$office->id}}"> {{$office->name}}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="col-auto">

                <span class="text-dark pl-2">Designation</span>
                <input type="text" name="designation" size="55" class="form-control mb-2" required>
            </div>


            <div class="col-auto">

                <span class="text-dark pl-2">Designation(Bangla)</span>
                <input type="text" name="bn_designation" size="55" class="form-control mb-2" required>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>



        </form>
    </div>
</div>