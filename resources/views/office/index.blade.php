@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">
            @if( Auth::user()->isAdmin() )

            @include("office.create")

            @endif

            @include("office.show")

        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            @include("office.location")

         


        </div>
    </div>



    @endsection