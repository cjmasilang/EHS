@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('first_aid_trainings') }}">Back</a></li>
          <li class="breadcrumb-item">Edit First Aid Training</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit First Aid</h5>
                <form class="forms-sample" action="{{ route('update.first_aid',$first_aid->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                 <div class="row">
                     <div class="form-group col-md-12">
                         <label for="exampleInputName1">title <span class="">*</span></label>
                         <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $first_aid->title }}">
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group col-md-12">
                         <label for="exampleInputName1">Venue <span class="">*</span></label>
                         <input type="text" class="form-control" id="exampleInputName1" name="venue" value="{{ $first_aid->venue }}">
                     </div>
                 </div>


                 <div class="form-group">
                     <label for="exampleTextarea1">Name <span class="">*</span></label>
                     <textarea class="form-control" name="name" id="summernote">
                         {{ $first_aid->name }}
                     </textarea>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update First Aid</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

