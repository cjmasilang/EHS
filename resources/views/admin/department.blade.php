@extends('admin.adminHome')


@section('content')

<section class="section">
<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <br>
            <div class="card-header">
                <h5 class="card-title">
                    <a href="{{ route('add.dept') }}"><button type="button" class="btn btn-success btn-fw" id="department" style="float: center;">Add Department</button></a>
                </h5>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:99%;">
                  <thead>
                    <tr>
                        <th width="0%">#</th>
                        <th width="25%">Name</th>
                        <th width="25%">Date</th>
                        <th width="25%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($department as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->department }}</td>

                        <td> {{ Carbon\Carbon::parse($row->created_at)->format('Y-m-d') }} </td>
                        <td>
                            <a href="{{ route('view.dept', $row->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('edit.dept', $row->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('delete.dept', $row->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>


          </div>
        </div>
      </div>

</div>
</section>
@endsection

<!-- Add Modal -->
<div class="modal fade" id="add_department" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form method="POST" id='add_schooldept_form' autocomplete="off">
              @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="text-danger highlight">* (Askterisk) Indicates required field</div>
                    <div class="modal-body">
                    <input type="textbox" id="departement_id" name="departement_id" hidden />

                    <div class="row form-group">
                        <div class="col-md-12 col-sm-12">
                            <label><span class="text-danger">* </span>Department Name</label>
                            <input type="text" class="form-control form-control-sm" name="school_name" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="border:2px solid white;"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-sm" style="border:2px solid white;"><i class="fa fa-save"></i> Save</button>
                </div>

            </form>
        </div>
    </div>
</div>


  <script>
    $( "#add_schooldept_form" ).submit(function( event ) {
        event.preventDefault();
        $.ajax({
                    type: 'POST',
                    url: "{{route('add.dept')}}",
                    data:$("#add_department").serialize(),
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                          $("#add_department")[0].reset();
                          $('#add_department').modal('hide');
                          dataTable.ajax.reload();
                            swal.fire("Done!", results.message, "success");
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });

    });
  </script>
