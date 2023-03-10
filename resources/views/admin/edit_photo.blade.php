@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('photo_gallery') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Photo</li>
       </ol>
    </nav>
</div>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Photo</h5>
                <form class="forms-sample" method="POST" action="{{ route('update.photo',$photo->id) }}">
                 @csrf

                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $photo->title }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Image Upload</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>


                   <div class="row mb-3">
                      <div class="col-sm-10"> <button type="submit" class="btn btn-success">Update Photo</button></div>
                   </div>
                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

