@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> Prescription List </a>

            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>Prescription id </th>
                            <th>Farmer</th>
                            <th>Phone</th>
                            <th>Species</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                            <th>Prescription id </th>
                            <th>Farmer</th>
                            <th>Phone</th>
                            <th>Species</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($prescriptions as $prescription)


                        <?php $id = $prescription->id; ?>
                        <tr class="data-row">
                            <td class=""> {{$prescription->id}}</td>
                            <td class=""> {{$prescription->farmer-> name}}</td>
                            <td class=""> {{$prescription->farmer-> phone}}</td>
                            <td class=""> {{$prescription->species->species}}</td>
                            <td>
                 <button type="button" class="btn btn-success " id="edit-product-button" > <a href="{{route("prescriptions.show",$id)}}" > <i class="fa fa-eye text-light" aria-hidden="false"> </i> </a></button> </td>



                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>




@endsection