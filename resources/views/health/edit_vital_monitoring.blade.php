@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('vital_monitoring') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Vital Monitoring</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Vital Monitoring</h5>
                    <form class="forms-sample" action="{{ route('update.vitalsigns',$vital_signs->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $vital_signs->name }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Blood Pressure <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="bp" value="{{ $vital_signs->bp }}">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Pulse Rate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="pr" value="{{ $vital_signs->pr }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Temperature <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="t" value="{{ $vital_signs->t }}">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Oxygen Saturation <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="o" value="{{ $vital_signs->o }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Respiratory Rate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="rr" value="{{ $vital_signs->rr }}">
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

