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
        <select class="form-control form-control office_upazilla" name="upazilla_id" id="upazilla_id" required>
            <option value="">Select Upazilla </option>

        </select>
    </div>
    <!-- <div class="form-group">
        <label for="union_id">Union</label>
        <select class="form-control form-control" id="union_id" required>
            <option value="">Select Union </option>

        </select>
    </div>
    <div class="form-group">
        <label for="office_id">Villlage</label>
        <select class="form-control form-control" id="office_id" required>
            <option value="">Select Union </option>

        </select>
    </div> -->



</div>
</div>