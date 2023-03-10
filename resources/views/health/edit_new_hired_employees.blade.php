@extends('health.healthHome')


@section('health-content')


<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('new_hired_employees') }}">Back</a></li>
          <li class="breadcrumb-item">Edit New Hired Employees</li>
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
                <form class="forms-sample" action="{{ route('update.new_hired',$new_hired->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $new_hired->name }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date of Hired <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="date_of_hired" value="{{ $new_hired->date_of_hired }}">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Health Card <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="health_card" value="{{ $new_hired->health_card }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="food_handlers_cert" value="{{ $new_hired->food_handlers_cert }}">
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

