@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  mb-2  ">

            <div class="col-xl-12 col-md-12 mb-2  text-center h-100   p-1 ">


                <div class="card    bg-abasas-dark    h-100 p-1">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Farmer Information</h6>
                            <div class="form-row">
                                <div class="col-auto font-weight-bold">Phone : </div>
                                <div class="col-auto">
                                    <input type="text" id="farmerPhoneField" class="form-control-sm mb-2 " size="45">
                                </div>
                            </div>

                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 " id="farmerProfile">

                            </div>
                            <div class="col-8">
                                <div class="row" id="farmerProperty">

                                </div>
                            </div>
                        </div>






                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>


        </div>


        <!-- main body start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">

            <div class="col-xl-12 col-md-12  mb-2  h-100   text-center  bg-abasas-dark p-1 ">
                <div class="card border-none  h-100  bg-abasas-dark  p-1">
                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Species</h6>

                        </nav>
                    </div>

                    <div class="card-body">

                        <form>

                            <div class="form-group row">
                                <label for="inputSpecies" class="col-sm-4 col-form-label-sm">Species</label>
                                <div class="col-sm-6">
                                    <input type="text" name="species" class="form-control-sm" value="chicken" id="inputSpecies">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputFor" class="col-sm-4 col-form-label-sm">For</label>
                                <div class="col-sm-6">
                                    <input type="text" name="for" class="form-control-sm" value="Broiler" id="inputFor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAge" class="col-sm-4 col-form-label-sm">Age</label>
                                <div class="col-sm-6">
                                    <input type="text" name="age" class="form-control-sm" value="8 Days" id="inputAge">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputBirds" class="col-sm-4 col-form-label-sm">NO. of animal</label>
                                <div class="col-sm-6">
                                    <input type="number" name="birds" class="form-control-sm" value="200" id="inputBirds">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputWeight" class="col-sm-4 col-form-label-sm">Weight</label>
                                <div class="col-sm-6">
                                    <input type="text" name="weight" class="form-control-sm" value="300 gm" id="inputWeight">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputFeeding" class="col-sm-4 col-form-label-sm">Feeding</label>
                                <div class="col-sm-6">
                                    <input type="text" name="feeding" class="form-control-sm" value="water 100 LTR" id="inputFeeding">
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
                                    <input type="text" name="complain" class="form-control-sm" value="Diziness ,Nasal" id="inputComplain">
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
                                    <input type="number" name="Affected" class="form-control-sm" value="10" id="inputAffected">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputMedication" class="col-sm-4 col-form-label-sm">Medication</label>
                                <div class="col-sm-6">
                                    <input type="text" name="Medication" class="form-control-sm" value="Florefenicol , Neomycin" id="inputMedication">
                                </div>
                            </div>



                        </form>


                    </div>
                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>


        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4    h-100   p-2 ">
                <div class="card border-dark   h-100   p-2">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Clinical signs </h6>
                            <button class="btn btn-sm btn-success" id=createClinicalSign> New </button>

                        </nav>

                    </div>

                    <div class="card-body">



                        <select name="signs" id="PrescriptionClinicalSigns" class="   form-control mb-2 ">

                        </select>


                        <table class="table table-sm table-striped">

                            <tbody id="selectedSignsTable">

                            </tbody>


                        </table>


                    </div>

                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>


        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4    h-100   p-2 ">
                <div class="card border-dark   h-100   p-2">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Tentative Diagnosis </h6>
                            <button class="btn btn-sm btn-success" id="createtentativeDiagnosis"> New </button>

                        </nav>

                    </div>

                    <div class="card-body">



                        <select id="PrescriptiontentativeDiagnosis" class="   form-control mb-2 ">

                        </select>


                        <table class="table table-sm table-striped">

                            <tbody id="selectedDiagnosisTable">

                            </tbody>


                        </table>


                    </div>

                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>


        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4    h-100   p-2 ">
                <div class="card border-dark   h-100    p-2">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Advice </h6>
                            <button class="btn btn-sm btn-success" id="createAdvice"> New </button>

                        </nav>

                    </div>

                    <div class="card-body">



                        <select id="PrescriptionAdvice" class="   form-control mb-2 ">

                        </select>


                        <table class="table table-sm table-striped">

                            <tbody id="selectedAdviceTable">

                            </tbody>


                        </table>


                    </div>

                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>


        <!-- Left Sidebar Start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4    h-100   p-2 ">
                <div class="card border-dark   h-100   p-2">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> Necropsy </h6>
                            <button class="btn btn-sm btn-success" id="createNecropsy"> New </button>

                        </nav>

                    </div>

                    <div class="card-body">



                        <select id="PrescriptionNecropsy" class="   form-control mb-2 ">

                        </select>


                        <table class="table table-sm table-striped">

                            <tbody id="selectedNecropsyTable">

                            </tbody>


                        </table>


                    </div>

                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>


        <!-- Left Sidebar Start -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  mb-2  ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4    h-100   p-2 ">
                <div class="card border-none   h-100   p-2">


                    <div class="card-header bg-abasas-dark py-3">
                        <nav class="navbar navbar-dark">
                            <h6 class="m-0 font-weight-bold "> RX </h6>
                            <button class="btn btn-sm btn-success" id="createrxMedichine"> New </button>

                        </nav>

                    </div>

                    <div class="card-body">

                        <div class="row ">
                            <div class="col-4  ">
                                <label class="text-dark font-weight-bold" for="rxMedichine"> Medichine</label>
                                <select id="rxMedichine" class="   form-control-sm mb-2 w-100   text-light "> </select>
                            </div>
                            <div class="col-7  ">
                                <label class="text-dark font-weight-bold" for="rxMedichineSig"> Sig : </label>
                                <input type="text" id="rxMedichineSig" class="form-control-sm mb-2 w-100 text-dark">
                            </div>
                            <div class="col-1  ">

                            <label class="text-dark font-weight-bold w-100" for="submitRxMedichine"> .</label>
                            <button class="btn btn-sm btn-success " id="submitRxMedichine"> Add </button>
                            </div>
                        </div>




                        <table class="table table-sm table-striped">

                            <tbody id="selectedRxMedichine"> </tbody>

                        </table>


                    </div>

                </div>
                <!-- Growth Card Example -->
            </div>




            <!-- sumit Area Start -->




        </div>




    </div>
</div>


<!-- Content Row -->

<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="tentativeDiagnosis-create-modal" tabindex="-1" role="dialog" aria-labelledby="tentativeDiagnosis-create-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-abasas-dark text-light ">
                <h5 class="modal-title  " id="edit-modal-label ">Add Tentative Diagnosis</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="tentativeDiagnosis-create-modal-form" class="form-horizontal" method="POST" action="{{route('diagnoses.store')}}">
                    @csrf

                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>



                    <div class="form-group">

                        <input type="button" id="tentativeDiagnosis-create-modal-submit-button" value="Add" class="form-control btn bg-abasas-dark text-light ">
                    </div>





                </form>
            </div>

        </div>
    </div>
</div>



<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="clinicalSign-create-modal" tabindex="-1" role="dialog" aria-labelledby="clinicalSign-create-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-abasas-dark text-light">
                <h5 class="modal-title " id="edit-modal-label ">Add Clinical Signs</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close "><span aria-hidden="true">&times;</span>
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

                        <input type="button" id="clinicalSign-create-modal-submit-button" value="Add" class="form-control btn bg-abasas-dark text-light ">
                    </div>





                </form>
            </div>

        </div>
    </div>
</div>



<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="advice-create-modal" tabindex="-1" role="dialog" aria-labelledby="advice-create-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-abasas-dark text-light ">
                <h5 class="modal-title " id="edit-modal-label ">Add Advice</h5>
                <button type="button" class="close  text-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="advice-create-modal-form" class="form-horizontal" method="POST" action="{{route('advices.store')}}">
                    @csrf

                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>



                    <div class="form-group">

                        <input type="button" id="advice-create-modal-submit-button" value="Add" class="form-control btn bg-abasas-dark text-light">
                    </div>





                </form>
            </div>

        </div>
    </div>
</div>










<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="necropsy-create-modal" tabindex="-1" role="dialog" aria-labelledby="necropsy-create-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-abasas-dark ">
                <h5 class="modal-title text-white" id="edit-modal-label ">Add Necropsy</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="necropsy-create-modal-form" class="form-horizontal" method="POST" action="{{route('necropsies.store')}}">
                    @csrf

                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>



                    <div class="form-group">

                        <input type="button" id="necropsy-create-modal-submit-button" value="Add" class="form-control btn bg-abasas-dark text-light ">
                    </div>





                </form>
            </div>

        </div>
    </div>
</div>













<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="rxMedichine-create-modal" tabindex="-1" role="dialog" aria-labelledby="rxMedichine-create-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-abasas-dark ">
                <h5 class="modal-title text-white" id="edit-modal-label ">Add Medichine</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="rxMedichine-create-modal-form" class="form-horizontal" method="POST" action="{{route('medichines.store')}}">
                    @csrf

                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label for="catagory_id"> Category</label>
                        <select class="form-control mb-2" name="medichine_category_id"    required>
                            <option value="1" selected="selected"> Select Category</option>
                            @foreach ($medichineCategories as $medichineCategory)
                                <option value="{{$medichineCategory->id}}"> {{$medichineCategory->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Sig : </label>
                        <input type="text" name="description" class="form-control" required autofocus>
                    </div>




                    <div class="form-group">

                        <input type="button" id="rxMedichine-create-modal-submit-button" value="Add" class="form-control btn bg-abasas-dark text-light ">
                    </div>





                </form>
            </div>

        </div>
    </div>
</div>








@endsection