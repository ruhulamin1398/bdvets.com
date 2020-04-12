@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">
       <!-- DataTales Example -->
       <div class="card shadow mb-4">

<div class="card-header py-3 bg-abasas-dark">
    <nav class="navbar navbar-dark ">
        <a class="navbar-brand"> Office List</a>
   
    </nav>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered " id="officeTable" width="100%"
            cellspacing="0">
            <thead class="bg-abasas-dark">


                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tfoot class="bg-abasas-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <!-- <th>Action</th> -->
                </tr>

            </tfoot>
            <tbody id='upazila_office_table_data_readonly'>


            </tbody>
        </table>
    </div>
</div>
</div>


        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            @include("office.location")

         


        </div>
    </div>



    @endsection