@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> New Medichine</a>

            </nav>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('medichines.store') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-2"> Name</span>
                        <input type="text" name="name" class="form-control mb-2" id="inlineFormInput" required >
                    </div>

                    <div class="form-group">
                        <label for="catagory_id"> Category</label>
                        <select class="form-control mb-2" name="medichine_category_id" id="catagory_id"    required>
                            <option value="1" selected="selected"> Select Category</option>
                            @foreach ($medichineCategories as $medichineCategory)
                                <option value="{{$medichineCategory->id}}"> {{$medichineCategory->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-auto">

                        <span class="text-dark pl-2">Description</span>
                        <input type="text" name="description" size="55" class="form-control mb-2" id="inlineFormInput" required >
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> Medichine List</a>

            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($medichines as $medichine)
                        <?php $id = $medichine->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$i++}}</td>
                            <td class="  word-break name">{{$medichine->name}}</td>
                            <td class="  word-break medichineCategory">{{$medichine->category->name}}</td>
                            <td class=" word-break description ">{{$medichine->description}}</td>




                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="medichine-edit-item" data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


                                <form method="POST" action="{{ route('medichines.destroy',  $medichine->id )}} " id="delete-form-{{ $medichine->id }}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $medichine->id }}').submit();
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
<div class="modal fade" id="medichine-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">Edit Medichine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="medichine-edit-form" class="form-horizontal" method="POST" action="{{route('medichines.update',['medichine'=>1])}}">
                @method("put")
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="medichine-modal-input-id">Id </label>
                        <input type="text" name="id" class="form-control" id="medichine-modal-input-id" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="medichine-modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" id="medichine-modal-input-name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="catagory_id"> Category</label>
                        <select class="form-control mb-2" name="medichine_category_id" id="medichine-modal-input-catagory_id"    required>


                        </select>
                    </div>

                    <!-- /name -->
                    <!-- description -->
                    <div class="form-group">
                        <label class="col-form-label" for="medichine-modal-input-description">Description</label>
                        <input type="text" name="description" class="form-control" id="medichine-modal-input-description" required>
                    </div>

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
