<div class="card mb-4 shadow collapse" id="officeStore">


    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar navbar-dark ">
            <a class="navbar-brand"> New Office</a>

        </nav>
    </div>


    <div class="card-body">





        <form action="{{route('offices.store')}}" method="post">
            @csrf


            <input type="text" class="form-control form-control" name="division_id" id="setDivision" hidden required>
            <input type="text" class="form-control form-control" name="district_id" id="setDistrict" hidden required>
            <input type="text" class="form-control form-control" name="upazilla_id" id="setUpazilla" hidden required>
            <!-- <input type="text" class="form-control form-control" name="union_id" id="setUnion" hidden required>
        <input type="text" class="form-control form-control" name="office_id" id="setVillage" hidden required> -->




            <div class="form-row align-items-center">

                <div class="form-group col-12 ">
                    <label for="name" class="text-dark pl-2">Office Name</label>
                    <input type="text" class="form-control form-control    mb-2  " name="name" required>
                </div>

                <div class="form-group col-12 ">
                    <label for="bn_name" class="text-dark pl-2">Office Name (Bangla)</label>
                    <input type="text" class="form-control form-control    mb-2  " name="bn_name" required>
                </div>


                <div class="form-group  col-12 ">
                    <label for="email" class="text-dark pl-2">Email</label>
                    <input type="email" class="form-control form-control    mb-2  " name="email">
                </div>
                <div class="form-group  col-12 ">
                    <label for="phone" class="text-dark pl-2">Phone</label>
                    <input type="phone" class="form-control form-control    mb-2  " name="phone">
                </div>

                <div class="form-group  col-12 ">
                    <label for="address" class="text-dark pl-2">Address</label>
                    <input type="text" class="form-control form-control    mb-2  " name="address">
                </div>

                <div class="form-group  col-12 ">
                    <label for="bn_address" class="text-dark pl-2">Address(Bangla)</label>
                    <input type="text" class="form-control form-control    mb-2  " name="bn_address">
                </div>



                <div class=" form-group col-12">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>


            </div>


        </form>


    </div>
</div>