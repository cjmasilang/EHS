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

<section class="section">

    <div class="pagetitle">
        <h1>Video</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home')}}">Home</a></li>
                <li class="breadcrumb-item active">All Video</li>
            </ol>
        </nav>
      </div>


<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <br>
            <div class="card-header">
                <h5 class="card-title">
                    <a href="{{ route('add.video') }}"><button type="button" class="btn btn-success btn-fw" id="video" style="float: center;">Add Video</button></a>
                </h5>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:99%;">
                  <thead>
                    <tr>
                        <th width="0%">#</th>
                        <th width="20%">Video Title</th>
                        <th width="20%">Image</th>
                        <th width="20%">Type</th>
                        <th width="20%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($video as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->title }}</td>
                        <td>
                            <img src="{{ asset($row->photo) }}" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                            @if($row->type == 1)
                                <span class="badge bg-danger">Small Video</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('edit.video', $row->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('delete.video', $row->id) }}" class="btn btn-danger">Delete</a>
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
