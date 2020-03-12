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
                        <a class="navbar-brand">Doctor's Profile</a>

                    </nav>
                </div>


                <div class="card-body">





                    <form action="{{route('doctor-profiles.update',Auth::user()->id)}}" method="post">
                        @csrf
                        @method("put")


                        

                        <div class="form-row align-items-center">

                        <div class="form-group col-12 ">
                                <label for="name"    class="text-dark pl-2" >Name</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$doctorProfile->name}}"  name="name" required>
                            </div>
                            <div class="form-group col-12 ">
                                <label for="bn_name"    class="text-dark pl-2" >Name (Bangla)</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$doctorProfile->bn_name}}"  name="bn_name"  required>
                            </div>

                            <div class="form-group  col-12 ">
                                <label for="phone"    class="text-dark pl-2" >Phone</label>
                                <input type="phone" class="form-control form-control    mb-2  " value="{{$doctorProfile->phone}}" name="phone"  required>
                            </div>

                            <div class="form-group  col-12 ">
                                <label for="degree_varsity"    class="text-dark pl-2" >University Degree</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$doctorProfile->degree_varsity}}" name="degree_varsity"  required>
                            </div>

                            <div class="form-group  col-12 ">
                                <label for="bn_degree_varsity"    class="text-dark pl-2" >University Degree (Bangla)</label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$doctorProfile->bn_degree_varsity}}" name="bn_degree_varsity"  required>
                            </div>

                            <div class="form-group  col-12 ">
                                <label for="reg_no"    class="text-dark pl-2" >Registration No </label>
                                <input type="text" class="form-control form-control    mb-2  " value="{{$doctorProfile->reg_no}}" name="reg_no"  required>
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








                </div>
            </div>
        </div>
    </div>

</div>


    @endsection