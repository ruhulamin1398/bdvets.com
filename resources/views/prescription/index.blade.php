@extends('layout.app')
@section('content')





    <!-- Begin Page Content -->
    <div class="container-fluid">



        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand"> Clinical Sign List</a>

                </nav>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tfoot class="bg-abasas-dark">
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>

                        </tfoot>
                        <tbody>

                        <?php $i = 1; ?>
                       @foreach ($prescriptions as $prescription)
          
        
                            <?php $id = $prescription->id; ?>
                            <tr class="data-row">
                                <td class="iteration">{{$i++}}</td>
                                <td class="  word-break name"> {{$prescription->farmer-> name}}</td>


                         

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>




@endsection
