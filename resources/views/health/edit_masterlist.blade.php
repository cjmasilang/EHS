@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('masterlist') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Masterlist</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Masterlist</h5>
                    <form class="forms-sample" action="{{ route('update.masterlist',$masterlist->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $masterlist->name }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Department <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="department_id" value="{{ $masterlist->department_id }}" required>
                    </div>
               </div>

                <br>

               <div class="row">
                   <div class="form-group col-md-6">
                       <label for="exampleInputName1">Position <span class="">*</span></label>
                       <input type="text" class="form-control" id="exampleInputName1" name="position" value="{{ $masterlist->position }}" required>
                   </div>


                   <div class="form-group col-md-6">
                       <label for="exampleInputName1">Health Card <span class="">*</span></label>
                       <input type="date" class="form-control" id="exampleInputName1" name="health_card" value="{{ $masterlist->health_card }}" required>
                   </div>
               </div>

               <br>

               <div class="row">
                   <div class="form-group col-md-6">
                       <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                       <input type="date" class="form-control" id="exampleInputName1" name="food_handlers_cert" value="{{ $masterlist->food_handlers_cert }}" required>
                   </div>
               </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Masterlist</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

