@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">

            <div class="col-xl-12 col-md-12 mb-2  text-center h-100  bg-abasas-dark p-1 ">
                <div class="card border-none   bg-abasas-dark    h-100 p-1">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Farmer Information</h6>

                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="row form-group text-center ">

                            <label class="text-light col-12  " for="farmerPhoneField">Farmer Number</label>
                            <input type="text" id="farmerPhoneField" class="form-control col-12  ">

                        </div>
                        <div id="farmerProfile"></div>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>


        </div>
        <!-- main body start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">

            <div class="col-xl-12 col-md-12  mb-2  h-100   text-center  bg-abasas-dark p-1 ">
                <div class="card border-none  h-100  bg-abasas-dark  p-1">


                    <div class="card-body">

                        <form>

                            <div class="form-group row">
                                <label for="inputSpecies" class="col-sm-4 col-form-label-sm">Species</label>
                                <div class="col-sm-6">
                                    <input type="text" name="species" class="form-control-sm" id="inputSpecies">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFor" class="col-sm-4 col-form-label-sm">For</label>
                                <div class="col-sm-6">
                                    <input type="text" name="for" class="form-control-sm" id="inputFor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAge" class="col-sm-4 col-form-label-sm">Age</label>
                                <div class="col-sm-6">
                                    <input type="text" name="age" class="form-control-sm" id="inputAge">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputBirds" class="col-sm-4 col-form-label-sm">NO. of Birds</label>
                                <div class="col-sm-6">
                                    <input type="number" name="birds" class="form-control-sm" id="inputBirds">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputWeight" class="col-sm-4 col-form-label-sm">Weight</label>
                                <div class="col-sm-6">
                                    <input type="text" name="weight" class="form-control-sm" id="inputWeight">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputFeeding" class="col-sm-4 col-form-label-sm">Feeding</label>
                                <div class="col-sm-6">
                                    <input type="text" name="feeding" class="form-control-sm" id="inputFeeding">
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>



        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4  text-center  h-100   bg-abasas-dark p-2 ">
                <div class="card border-none   bg-abasas-dark  h-100   p-2">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Complain</h6>

                        </nav>
                    </div>

                    <div class="card-body">


                        <form>

                            <div class="form-group row">
                                <label for="inputComplain" class="col-sm-4 col-form-label-sm">Complain</label>
                                <div class="col-sm-6">
                                    <input type="text" name="complain" class="form-control-sm" id="inputComplain">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFirstSeen" class="col-sm-4 col-form-label-sm">FirstSeen</label>
                                <div class="col-sm-6">
                                    <input type="date" name="first_seen" class="form-control-sm" id="inputFirstSeen">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAffected" class="col-sm-4 col-form-label-sm">NO. of Affected</label>
                                <div class="col-sm-6">
                                    <input type="number" name="Affected" class="form-control-sm" id="inputAffected">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputMedication" class="col-sm-4 col-form-label-sm">Medication</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Medication" class="form-control-sm" id="inputMedication">
                                </div>
                            </div>



                        </form>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>
        <!-- supplier area End  -->

        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4  text-center  h-100   bg-abasas-dark p-2 ">
                <div class="card border-none   bg-abasas-dark  h-100   p-2">
                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Clinical Signs</h6>

                        </nav>
                    </div>

                    <div class="card-body">


                        <form>

                            <div class="form-group row">
                                <label for="inputComplain" class="col-sm-4 col-form-label-sm">Complain</label>
                                <div class="col-sm-6">
                                    <input type="text" name="complain" class="form-control-sm" id="inputComplain">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFirstSeen" class="col-sm-4 col-form-label-sm">FirstSeen</label>
                                <div class="col-sm-6">
                                    <input type="date" name="first_seen" class="form-control-sm" id="inputFirstSeen">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAffected" class="col-sm-4 col-form-label-sm">NO. of Affected</label>
                                <div class="col-sm-6">
                                    <input type="number" name="Affected" class="form-control-sm" id="inputAffected">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputMedication" class="col-sm-4 col-form-label-sm">Medication</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Medication" class="form-control-sm" id="inputMedication">
                                </div>
                            </div>



                        </form>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>
        <!-- supplier area End  -->

        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4  text-center  h-100   bg-abasas-dark p-2 ">
                <div class="card border-none   bg-abasas-dark  h-100   p-2">


                    <div class="card-body">


                        <form>

                            <div class="form-group row">
                                <label for="inputComplain" class="col-sm-4 col-form-label-sm">Complain</label>
                                <div class="col-sm-6">
                                    <input type="text" name="complain" class="form-control-sm" id="inputComplain">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFirstSeen" class="col-sm-4 col-form-label-sm">FirstSeen</label>
                                <div class="col-sm-6">
                                    <input type="date" name="first_seen" class="form-control-sm" id="inputFirstSeen">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAffected" class="col-sm-4 col-form-label-sm">NO. of Affected</label>
                                <div class="col-sm-6">
                                    <input type="number" name="Affected" class="form-control-sm" id="inputAffected">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputMedication" class="col-sm-4 col-form-label-sm">Medication</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Medication" class="form-control-sm" id="inputMedication">
                                </div>
                            </div>



                        </form>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>
        <!-- supplier area End  -->

        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4  text-center  h-100   bg-abasas-dark p-2 ">
                <div class="card border-none   bg-abasas-dark  h-100   p-2">

                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Clinical Signs</h6>

                        </nav>
                    </div>
                    <div class="card-body">


                        <form>

                            <div class="form-group row">
                                <label for="inputComplain" class="col-sm-4 col-form-label-sm">Complain</label>
                                <div class="col-sm-6">
                                    <input type="text" name="complain" class="form-control-sm" id="inputComplain">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFirstSeen" class="col-sm-4 col-form-label-sm">FirstSeen</label>
                                <div class="col-sm-6">
                                    <input type="date" name="first_seen" class="form-control-sm" id="inputFirstSeen">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputAffected" class="col-sm-4 col-form-label-sm">NO. of Affected</label>
                                <div class="col-sm-6">
                                    <input type="number" name="Affected" class="form-control-sm" id="inputAffected">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputMedication" class="col-sm-4 col-form-label-sm">Medication</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Medication" class="form-control-sm" id="inputMedication">
                                </div>
                            </div>



                        </form>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>
        <!-- supplier area End  -->




    </div>
    <!-- supplier area End  -->

    <div class="row mt-4">

        <!-- main body start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            <div class="card mb-4 shadow">

                <div class="card-header bg-abasas-dark py-3">
                    <nav class="navbar navbar-dark">
                        <h6 class="m-0 font-weight-bold "> Clinical Signs</h6>
                        <button class="btn btn-sm btn-success" id=createClinicalSign   > New </button>

                    </nav>
                </div>

                <div class="card-body">



                    <select name="signs" id="PrescriptionClinicalSigns" class="   form-control mb-2 ">

                    </select>


                    <table class="table table-sm table-striped">
                   
                    <tbody id = "selectedSignsTable">
                       
                    </tbody>
              

                    </table>


                </div>
            </div>

        </div>




  

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4  text-center  bg-abasas-dark p-2 ">
                <div class="card border-none   bg-abasas-dark  h-100 p-2">


                    <div class="card-body">
                        <div class="row no-gutters ">

                            <div class=" col-auto">
                                <label class="text-light" for="farmerPhoneField">Farmer Number</label>
                                <input type="text" id="farmerPhoneField" class="form-control mb-2">

                            </div>
                        </div>
                        <div id="farmerProfile"></div>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>
        <!-- supplier area End  -->




    </div>
    <!-- supplier area End  -->


</div>


<!-- Content Row -->

<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="clinicalSign-create-modal" tabindex="-1" role="dialog" aria-labelledby="clinicalSign-create-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="edit-modal-label ">Add Clinical Signs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <form id="clinicalSign-create-modal-form" class="form-horizontal" method="POST" action="{{route('clinical-signs.store')}}">
                    @csrf
                  
                        <div class="form-group">
                            <label class="col-form-label" for="modal-input-name">Name</label>
                            <input type="text" name="name" class="form-control" required autofocus>
                        </div>

                       

                        <div class="form-group">

                            <input type="button" id="clinicalSign-create-modal-submit-button" value="Add" class="form-control btn btn-success">
                        </div>
             




                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection