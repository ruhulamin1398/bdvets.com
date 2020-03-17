@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-2  ">

            <div class="col-xl-12 col-md-12 mb-2  text-center h-100  bg-abasas-dark p-1 ">
                <div class="card border-none   bg-abasas-dark    h-100 p-1">


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

                    </nav>
                </div>

                <div class="card-body">

            
                   
                    <select name="signs" id="PrescriptionClinicalSigns" class="   form-control mb-2 ">

                    </select>
                </div>
            </div>

        </div>
        <!-- main body start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            <div class="card mb-4 shadow">

                <div class="card-header bg-abasas-dark py-3">
                    <nav class="navbar navbar-dark">
                        <h6 class="m-0 font-weight-bold "> Clinical Signs</h6>

                    </nav>
                </div>
                <div class="card-body">
                    <select name="country" class="chosen form-control mb-2 ">
                        <option value=""></option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
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




@endsection