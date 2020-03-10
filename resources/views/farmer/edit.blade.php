@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">

            <div class="card mb-4 shadow " id="villageStore">


                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand">Farmer Update</a>

                    </nav>
                </div>


                <div class="card-body">





                    <form action="{{route('farmers.update',['farmer'=>$farmer->id])}}" method="post">
                        @csrf
                        @method("put");


                        <input type="text" class="form-control form-control" value="{{$farmer->division_id}}" name="division_id" id="setDivision" hidden required>
                        <input type="text" class="form-control form-control" value="{{$farmer->district_id}}" name="district_id" id="setDistrict" hidden required>
                        <input type="text" class="form-control form-control" value="{{$farmer->upazilla_id}}" name="upazilla_id" id="setUpazilla" hidden required>
                        <input type="text" class="form-control form-control" value="{{$farmer->union_id}}" name="union_id" id="setUnion" hidden required>
                        <input type="text" class="form-control form-control" value="{{$farmer->village_id}}" name="village_id" id="setVillage" hidden required>


                        

                        <div class="form-row align-items-center">

                        <div class="form-group col-12 ">
                                <label for="name"    class="text-dark pl-2" >Name</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$farmer->name}}"  name="name" required>
                            </div>


                            <div class="form-group  col-12 ">
                                <label for="phone"    class="text-dark pl-2" >Phone</label>
                                <input type="phone" class="form-control form-control    mb-2  " value="{{$farmer->phone}}" name="phone">
                            </div>

                            <div class="form-group  col-12 ">
                                <label for="email"    class="text-dark pl-2" >Email</label>
                                <input type="email" class="form-control form-control    mb-2  " value="{{$farmer->email}}" name="email">
                            </div>


                            <div class="form-group col-12 ">
                                <label for="bn_name"    class="text-dark pl-2"  >Gender</label>
                              <select name="gender" id="" class="form-control mb-2" required>
                                  @if( $farmer->gender=='Male')

                                  <option value="male" selected>Male</option>
                                  <option value="female">Female</option>
                                  @else

                                  <option value="male">Male</option>
                                  <option value="female" selected>Female</option>
                                  @endif
                              </select>
                            </div>





                            <div class="form-group col-auto">
                                <label for="bn_name" class="text-dark pl-2">Cattle</label>
                                <input type="number" class="form-control form-control    mb-2  " value="{{$farmer->cattle}}"  name="cattle">
                            </div>

                            <div class="form-group col-auto">
                                <label for="url" class="text-dark pl-2">Goat</label>
                                <input type="number" class="form-control form-control    mb-2 " value="{{$farmer->goat}}"   name="goat">
                            </div>



                            <div class="form-group col-auto">
                                <label for="bn_name" class="text-dark pl-2">Buffalo</label>
                                <input type="number" class="form-control form-control    mb-2  " value="{{$farmer->buffalo}}"   name="buffalo">
                            </div>

                            <div class="form-group col-auto">
                                <label for="url" class="text-dark pl-2">Sheep</label>
                                <input type="number" class="form-control form-control    mb-2 " value="{{$farmer->sheep}}" name="sheep">
                            </div>



                            <div class="form-group col-auto">
                                <label for="bn_name" class="text-dark pl-2">Poultry</label>
                                <input type="number" class="form-control form-control    mb-2  " value="{{$farmer->poultry}}"  name="poultry">
                            </div>


                            <div class="form-group col-auto">
                                <label for="url" class="text-dark pl-2">Chicken</label>
                                <input type="number" class="form-control form-control    mb-2 " value="{{$farmer->chicken}}"  name="chicken">
                            </div>



                            <div class="form-group col-auto">
                                <label for="bn_name" class="text-dark pl-2">Duck</label>
                                <input type="number" class="form-control form-control    mb-2  " value="{{$farmer->duck}}"  name="duck">
                            </div>

                            <div class="form-group col-auto">
                                <label for="url" class="text-dark pl-2">Pigeon</label>
                                <input type="number" class="form-control form-control    mb-2 " value="{{$farmer->pigeon}}" name="pigeon">
                            </div>


                            <div class="form-group col-auto">
                                <label for="url">Turkey</label>
                                <input type="number" class="form-control form-control    mb-2 " value="{{$farmer->turkey}}" name="turkey">
                            </div>


                            <div class="form-group col-auto">
                                <label for="url" class="text-dark pl-2">Other</label>
                                <input type="number" class="form-control form-control    mb-2 " value="{{$farmer->other}}"  name="other">
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
                        <button class="btn btn-success" data-toggle="collapse" href=".location-card-body" > Change Location</button>

                    </nav>
                </div>




                <div class="location-card-body  collapse ">





                    <div class="form-group">
                        <lab el for="division_id">Division</lab>
                        <select class="form-control form-control" name="division_id" id="division_id" required>
                       
                            @foreach ($divisions as $division)
                            @if($division->id == $farmer->division_id)
                            <option value="{{$division->id}}" selected > {{$division->bn_name}}</option>
                            @else
                            <option value="{{$division->id}}"  > {{$division->bn_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="district_id">district</label>
                        <select class="form-control form-control" name="district_id" id="district_id" required>
                        @foreach ($districts as $district)
                            @if($district->id == $farmer->district_id)
                            <option value="{{$district->id}}" selected > {{$district->bn_name}}</option>
                            @else
                            <option value="{{$district->id}}"  > {{$district->bn_name}}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="upazilla_id">Upazilla</label>
                        <select class="form-control form-control" name="upazilla_id" id="upazilla_id" required>
                        @foreach ($upazillas as $upazilla)
                            @if($upazilla->id == $farmer->upazilla_id)
                            <option value="{{$upazilla->id}}" selected > {{$upazilla->bn_name}}</option>
                            @else
                            <option value="{{$upazilla->id}}"  > {{$upazilla->bn_name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="union_id">Union</label>
                        <select class="form-control form-control" id="union_id" required>
                        @foreach ($unions as $union)
                            @if($union->id == $farmer->union_id)
                            <option value="{{$union->id}}" selected > {{$union->bn_name}}</option>
                            @else
                            <option value="{{$union->id}}"  > {{$union->bn_name}}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="village_id">Villlage</label>
                        <select class="form-control form-control" id="village_id" required>
                        @foreach ($villages as $village)
                            @if($village->id == $farmer->village_id)
                            <option value="{{$village->id}}" selected > {{$village->bn_name}}</option>
                            @else
                            <option value="{{$village->id}}"  > {{$village->bn_name}}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>



                </div>
            </div>
        </div>
    </div>




    @endsection