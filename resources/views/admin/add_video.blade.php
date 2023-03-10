@extends('admin.adminHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('content')

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('video_gallery')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Video</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Video</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" action="{{ route('store.video') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Video Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Video Type <span class="">*</span></label>
                            <select class="form-control" name="type">
                                <option value="0">Small Video </option>
                        </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image Upload  <span class="">*</span></label>
                        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Video</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
