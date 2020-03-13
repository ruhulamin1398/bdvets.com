@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">

            <div class="card mb-4 shadow " id="officeStore">


                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand">Edit Office</a>

                    </nav>
                </div>


                <div class="card-body">





                    <form action="{{route('offices.update',['office'=>$office->id])}}" method="post">
                        @csrf
                        @method("put");


                        <input type="text" class="form-control form-control" value="{{$office->division_id}}"
                            name="division_id" id="setDivision" hidden required>
                        <input type="text" class="form-control form-control" value="{{$office->district_id}}"
                            name="district_id" id="setDistrict" hidden required>
                        <input type="text" class="form-control form-control" value="{{$office->upazilla_id}}"
                            name="upazilla_id" id="setUpazilla" hidden required>




                        <div class="form-row align-items-center">

                            <div class="form-group col-12 ">
                                <label for="name" class="text-dark pl-2">Name</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$office->name}}"
                                    name="name" required>
                            </div>

                            <div class="form-group col-12 ">
                                <label for="bn_name" class="text-dark pl-2">Name(Bangla)</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$office->bn_name}}"
                                    name="bn_name" required>
                            </div>


                            <div class="form-group  col-12 ">
                                <label for="phone" class="text-dark pl-2">Phone</label>
                                <input type="phone" class="form-control form-control    mb-2  "
                                    value="{{$office->phone}}" name="phone">
                            </div>

                            <div class="form-group  col-12 ">
                                <label for="email" class="text-dark pl-2">Email</label>
                                <input type="email" class="form-control form-control    mb-2  "
                                    value="{{$office->email}}" name="email">
                            </div>


                            <div class="form-group col-12">
                                <label for="address" class="text-dark pl-2">Address</label>
                                <input type="text" class="form-control form-control    mb-2  "
                                    value="{{$office->address}}" name="address">
                            </div>


                            

                            <div class="form-group col-12">
                                <label for="bn_address" class="text-dark pl-2">Address(Bangla)</label>
                                <input type="text" class="form-control form-control    mb-2  "
                                    value="{{$office->bn_address}}" name="bn_address">
                            </div>


                            <div class=" form-group col-12">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>


                        </div>


                    </form>


                </div>
            </div>








        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            <div class="card mb-4 shadow p-3">



                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand"> Location</a>
                        <button class="btn btn-success" data-toggle="collapse" href=".location-card-body"> Change
                            Location</button>

                    </nav>
                </div>




                <div class="location-card-body  collapse ">





                    <div class="form-group">
                        <lab el for="division_id">Division</lab>
                        <select class="form-control form-control" name="division_id" id="division_id" required>

                            @foreach ($divisions as $division)
                            @if($division->id == $office->division_id)
                            <option value="{{$division->id}}" selected> {{$division->bn_name}}</option>
                            @else
                            <option value="{{$division->id}}"> {{$division->bn_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="district_id">district</label>
                        <select class="form-control form-control" name="district_id" id="district_id" required>
                            @foreach ($districts as $district)
                            @if($district->id == $office->district_id)
                            <option value="{{$district->id}}" selected> {{$district->bn_name}}</option>
                            @else
                            <option value="{{$district->id}}"> {{$district->bn_name}}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="upazilla_id">Upazilla</label>
                        <select class="form-control form-control" name="upazilla_id" id="upazilla_id" required>
                            @foreach ($upazillas as $upazilla)
                            @if($upazilla->id == $office->upazilla_id)
                            <option value="{{$upazilla->id}}" selected> {{$upazilla->bn_name}}</option>
                            @else
                            <option value="{{$upazilla->id}}"> {{$upazilla->bn_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                   



                </div>
            </div>
        </div>
    </div>




    @endsection
