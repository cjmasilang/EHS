@extends('safety.safetyHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('safety-content')

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('accident_classification')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Accident Classfication</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Accident</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.accident') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="first_aid">First Aid <span class="">*</span></label>
                            <input type="number" class="form-control" id="first_aid" name="first_aid" placeholder="Enter First Aid" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="medical_case">Medical Case <span class="">*</span></label>
                            <input type="number" class="form-control" id="medical_case" name="medical_case" placeholder="Enter Medical Case" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="fatality">Fatality <span class="">*</span></label>
                            <input type="number" class="form-control" id="fatality" name="fatality" placeholder="Enter Fatality" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="near_miss">Near Miss <span class="">*</span></label>
                            <input type="number" class="form-control" id="near_miss" name="near_miss" placeholder="Enter Near Miss" required>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Accident</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
