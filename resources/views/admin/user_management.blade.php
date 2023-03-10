@extends('admin.adminHome')

    <style>
      .card-header{
          font-weight: Arial;
          font-size: 30px;
          color: black;
      }

      .pagetitle {
          margin-bottom: 10px;
      }

      .pagetitle h1 {
          font-size: 24px;
          margin-bottom: 0;
          font-weight: 600;
          color: #012970;
      }

      .breadcrumb {
      font-size: 14px;
      font-family: "Nunito", sans-serif;
      color: #899bbd;
      font-weight: 600;
      }

      .breadcrumb a {
          color: #899bbd;
          transition: 0.3s;
      }

      .breadcrumb a:hover {
          color: #51678f;
      }

      .breadcrumb .breadcrumb-item::before {
          color: #899bbd;
      }

      .breadcrumb .active {
          color: #51678f;
          font-weight: 600;
      }


</style>
@section('content')

<div class="pagetitle">
  <h1>User Management</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home')}}">Home</a></li>
          <li class="breadcrumb-item active">All Users</li>
      </ol>
  </nav>
</div>

<section class="section">
<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <br>
            <div class="card-header">
                <h5 class="card-title">
                    <a href="{{ route('add.user') }}"><button type="button" class="btn btn-success btn-fw" style="float: center;">Add User</button></a>
                </h5>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:99%;">
                  <thead>
                    <tr>
                      <th width="0%">#</th>
                      <th width="25%">Name</th>
                      <th width="25%">Role</th>
                      <th width="25%">Date</th>
                      <th width="25%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($user as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->name }}</td>
                        <td>

                            @if($row->calendar == 1)
                                <span class="badge bg-info">Calendar</span>
                                @else
                            @endif

                            @if($row->roles == 1)
                                <span class="badge bg-primary">Roles</span>
                                @else
                            @endif

                            @if($row->department == 1)
                                <span class="badge bg-primary">Department</span>
                                @else
                            @endif


                            @if($row->category == 1)
                                <span class="badge bg-danger">Category</span>
                                @else
                            @endif

                            @if($row->tags == 1)
                                <span class="badge bg-success">Tags</span>
                                @else
                            @endif

                            @if($row->news == 1)
                                <span class="badge bg-info">News</span>
                                @else
                            @endif

                            @if($row->settings == 1)
                                <span class="badge bg-danger">Settings</span>
                                @else
                            @endif

                            @if($row->gallery == 1)
                                <span class="badge bg-danger">Gallery</span>
                                @else
                            @endif
                        </td>

                        <td> {{ Carbon\Carbon::parse($row->created_at)->format('Y-m-d') }} </td>
                        <td>
                            <a href="{{ route('view.user', $row->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('edit.user', $row->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('delete.user', $row->id) }}" class="btn btn-danger">Delete</a>
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

<!-- Edit Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Edit User') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="post" enctype="multipart/form-data">

                <div class="modal-body">

                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                        <label> Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="Enter Last Name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                </div>
            </form>

        </div>
    </div>
</div>

 <!-- View Modal -->

<!-- Delete Modal -->
    <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{ route('delete.user', 'id') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <h5 class="text-center">Are you sure you want to delete this user?</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" onclick="delete()" class="btn btn-danger" data-dismiss="modal">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {


          $(document).on('click', "#edit-user", function() {
            $(this).addClass('edit-user-trigger-clicked');

            var options = {
              'backdrop': 'static'
            };
            $('#edit-modal').modal(options)
          })

          $('#edit-modal').on('show.bs.modal', function() {
            var el = $(".edit-item-trigger-clicked");
            var row = el.closest(".data-row");

            // get the data
            var id = el.data('id','users');
            var name = row.children(".name").text();
            var name = row.children(".email").text();
            var description = row.children(".description").text();


            $("#modal-input-id").val(id);
            $("#modal-input-name").val(name);
            $("#modal-input-email").val(email);
            $("#modal-input-description").val(description);

          })


          $('#edit-modal').on('hide.bs.modal', function() {
            $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
            $("#edit-form").trigger("reset");
          })
        })
        </script>

        <script>
           $('.delete').on('click', function(){

            var id = $(this).data('id');

            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then(function(result) {
            if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: {'id':id},
                dataType: "text",
                success: function(data) {
                    Swal.fire(
                    'Success!',
                    'You have successfully deleted an item',
                    'success'
                    )
                    setTimeout(
                    function()
                        {
                        location.reload();
                        }, 1500);
                }
                });
            }
            })

        });
        </script>
