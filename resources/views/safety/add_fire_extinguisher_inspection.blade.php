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
                <li class="breadcrumb-item"><a href="{{ route('monthly_fire_extinguisher_inspection')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Monthly Fire Extinguisher Inspection</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                @csrf
                <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>

                <center>
                    <h5>Monthly Fire Extinguisher Inspection <br>
                        (Qualitative)
                    </h5>
                </center>

                <br>
                    <h5 class="card-title">Check for any damages (GC,NR,DG,DC,OC)</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.fire_extinguisher') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="location">Location <span class="">*</span></label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="type">Type <span class="">*</span></label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="gauge">Gauge <span class="">*</span></label>
                            <input type="text" class="form-control" id="gauge" name="gauge" placeholder="Enter Gauge" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="hose">Hose <span class="">*</span></label>
                            <input type="text" class="form-control" id="hose" name="hose" placeholder="Enter Hose" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="cylinder">Cylinder <span class="">*</span></label>
                            <input type="text" class="form-control" id="cylinder" name="cylinder" placeholder="Enter Cylinder" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="pin">Pin <span class="">*</span></label>
                            <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Pin" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="bracket">Bracket <span class="">*</span></label>
                            <input type="text" class="form-control" id="bracket" name="bracket" placeholder="Enter Bracket" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="date_of_inspection">Date of Inspection <span class="">*</span></label>
                            <input type="date" class="form-control" id="date_of_inspection" name="date_of_inspection" placeholder="Enter Date" required>
                        </div>
                    </div>

                    <br>

                    <div class="col align-self-start">
                        <div class="form-group row">
                            <label for="knowledge_by" class="col-sm-4 col-form-label">Knowledge By:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="knowledge_by" name="knowledge_by" placeholder="Enter Knowledge By" required>
                            </div>
                        </div>

                    </div>

                    <br>

                    <center>
                       <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Submit Fire Inspection</button></div>
                    </center>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
