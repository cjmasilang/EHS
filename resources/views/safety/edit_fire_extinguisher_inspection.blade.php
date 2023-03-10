@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('monthly_fire_extinguisher_inspection') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Monthly Inspection</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <form class="forms-sample" action="{{ route('update.fire_extinguisher',$inspection->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                 <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>

                 <center>
                     <h5>Monthly Fire Extinguisher Inspection <br>
                         (Qualitative)</h5>
                 </center>


                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">Location <span class="">*</span></label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $inspection->location }}" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="type">Type <span class="">*</span></label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $inspection->type }}" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="gauge">Gauge <span class="">*</span></label>
                        <input type="text" class="form-control" id="gauge" name="gauge" value="{{ $inspection->gauge }}" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hose">Hose <span class="">*</span></label>
                        <input type="text" class="form-control" id="hose" name="hose" value="{{ $inspection->hose }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cylinder">Cylinder <span class="">*</span></label>
                        <input type="text" class="form-control" id="cylinder" name="cylinder" value="{{ $inspection->cylinder }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pin">Pin <span class="">*</span></label>
                        <input type="text" class="form-control" id="pin" name="pin" value="{{ $inspection->pin }}" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="bracket">Bracket <span class="">*</span></label>
                        <input type="text" class="form-control" id="bracket" name="bracket" value="{{ $inspection->bracket }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date_of_inspection">Date of Inspection <span class="">*</span></label>
                        <input type="date" class="form-control" id="date_of_inspection" name="date_of_inspection" value="{{ $inspection->date_of_inspection }}" required>
                    </div>
                </div>

               <br>

                <div class="col align-self-start">
                    <div class="form-group row">
                        <label for="knowledge_by" class="col-sm-4 col-form-label">Knowledge By:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="knowledge_by" name="knowledge_by" value="{{ $inspection->knowledge_by }}" required>
                        </div>
                    </div>
                </div>

                <br>

                <center>
                    <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Edit Fire Inspection</button></div>
                 </center>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


@endsection
