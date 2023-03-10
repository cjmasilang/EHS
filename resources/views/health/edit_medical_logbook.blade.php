@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('medical_logbook') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Medical Logbook</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Medical Logbook</h5>
                    <form class="forms-sample" action="{{ route('update.medical',$med->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                 <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $med->name }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputName1">Medicine <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="medicine" value="{{ $med->medicine }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputName1">Qty <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="qty" value="{{ $med->qty }}" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Medical Logbook</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

