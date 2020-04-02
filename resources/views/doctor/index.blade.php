@extends('layout.app')
@section('content')







<!-- Begin Page Content -->
<div class="container-fluid">



@include("doctor.create")



    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> Doctors List</a>

            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Office</th>
                            <th>Designation</th>
                            <th>Designation(Bangla)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>Office</th>
                            <th>Designation</th>
                            <th>Designation(Bangla)</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($doctors as $doctor)
                        <?php $id = $doctor->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$i++}}</td>
                            <td class="  word-break name">{{$doctor->user->name}}</td>
                            <td class="  word-break office">{{$doctor->office->name}}</td>
                            <td class="  word-break designation">{{$doctor->designation}}</td>
                            <td class="  word-break bn_designation">{{$doctor->bn_designation}}</td>




                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="doctor-edit-item"
                                    data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


                                <form method="POST" action="{{ route('doctors.destroy',  $doctor->id )}} "
                                    id="delete-form-{{ $doctor->id }}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $doctor->id }}').submit();
			}
			else{
				event.preventDefault();
			}
			" class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">

                                    </i>
                                </button>



                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>









<!-- Attachment Modal -->
<div class="modal fade" id="doctor-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">Edit Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="doctor-edit-form" class="form-horizontal" method="POST"
                    action="{{route('doctors.update',['doctor'=>1])}}">
                    @method("put")
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="doctor-modal-input-id">Id </label>
                        <input type="text" name="id" class="form-control" id="doctor-modal-input-id" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="doctor-modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" id="doctor-modal-input-name" required
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="catagory_id"> Office </label>
                        <select class="form-control mb-2" name="office_id" id="doctor-modal-input-office_id" required>


                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="doctor-modal-input-designation">Designation</label>
                        <input type="text" name="designation" class="form-control" id="doctor-modal-input-designation"
                            required autofocus>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="doctor-modal-input-bn_designation">Designation(Bangla)</label>
                        <input type="text" name="bn_designation" class="form-control" id="doctor-modal-input-bn_designation"
                            required autofocus>
                    </div>


                    <!-- /name -->


                    <div class="form-group">

                        <input type="submit" value="Submit" class="form-control btn btn-success">
                    </div>
                    <!-- /description -->




                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!-- /Attachment Modal -->






@endsection
