@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">


            <div class="card mb-4 shadow collapse" id="villageStore"  >


                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand"  > New Village</a>

                    </nav>
                </div>


                <div class="card-body" >





                    <form action="{{route('village-store')}}" method="post">
                        @csrf


                        <div class="form-group">
                           
                            <input type="text" class="form-control form-control" name="union_id" id="setUnion" hidden  required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control" name="name" id="name" required>
                        </div>



                        <div class="form-group">
                            <label for="bn_name">Name(Bangla)</label>
                            <input type="text" class="form-control form-control" name="bn_name" id="bn_name" required>
                        </div>



                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control form-control" name="url" id="url">
                        </div>

                        <button type="submit" class="btn btn-success">Add</button>





                    </form>




                </div>
            </div>



            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand"> Village List</a>
                        <button class="btn btn-success" data-toggle="collapse" href="#villageStore"> New Village</button>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered "  id='villageTable' width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Name(Bangla)</th>
                                    <th>Action</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Name(Bangla)</th>
                                    <th>Action</th>
                                    <!-- <th>Action</th> -->
                                </tr>

                            </tfoot>
                            <tbody id= 'villageTableData'>
                            

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            <div class="card mb-4 shadow">



                <div class="card-header py-3 bg-abasas-dark">
                    <nav class="navbar navbar-dark ">
                        <a class="navbar-brand"> Location</a>

                    </nav>
                </div>



                <div class="card-body">





                    <div class="form-group">
                        <lab el for="division_id">Division</lab>
                        <select class="form-control form-control" name="division_id" id="division_id" required>
                            <option value="">Select Division </option>
                            @foreach ($divisions as $division)
                            <option value="{{$division->id}}"> {{$division->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="district_id">district</label>
                        <select class="form-control form-control" name="district_id" id="district_id" required>
                            <option value="">Select district </option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="upazilla_id">Upazilla</label>
                        <select class="form-control form-control" name="upazilla_id" id="upazilla_id" required>
                            <option value="">Select Upazilla </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="addVillageUnionId">Union</label>
                        <select class="form-control form-control" id="addVillageUnionId" required>
                            <option value="">Select Union </option>

                        </select>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- Content Modal  -->
    <div class="modal fade" id="village-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="edit-form" class="form-horizontal" method="POST" action="">
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-id">Id </label>
                        <input type="text" name="id" class="form-control" id="modal-village-id" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" id="modal-village-name" required autofocus>
                    </div>
                    <!-- /name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">BN Name</label>
                        <input type="text" name="bn_name" class="form-control" id="modal-village-bn_name" required autofocus>
                    </div>
                    <!-- /name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Url</label>
                        <input type="text" name="url" class="form-control" id="modal-village-url" required autofocus>
                    </div>
                    <!-- /name -->

                    <div class="form-group">

                        <input type="submit" value=" সাবমিট" class="form-control btn btn-success">
                    </div>
                    <!-- /description -->




                </form>
            </div>

        </div>
    </div>
</div>



    @endsection