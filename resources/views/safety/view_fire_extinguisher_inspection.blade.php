@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('monthly_fire_extinguisher_inspection') }}">Back</a></li>
          <li class="breadcrumb-item">View Monthly Inspection</li>
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
                        (Qualitative)</h5>
                </center>


                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">Location <span class="">*</span></label>
                        <input type="text" class="form-control" id="location" name="location" value=" {{ $inspection->location }}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="type">Type <span class="">*</span></label>
                        <input type="text" class="form-control" id="type" name="type" value=" {{ $inspection->type }}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="gauge">Gauge <span class="">*</span></label>
                        <input type="text" class="form-control" id="gauge" name="gauge" value=" {{ $inspection->gauge }}" disabled>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="hose">Hose <span class="">*</span></label>
                        <input type="text" class="form-control" id="hose" name="hose" value=" {{ $inspection->hose }}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cylinder">Cylinder <span class="">*</span></label>
                        <input type="text" class="form-control" id="cylinder" name="cylinder" value=" {{ $inspection->cylinder }}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="pin">Pin <span class="">*</span></label>
                        <input type="text" class="form-control" id="pin" name="pin" value=" {{ $inspection->pin }}" disabled>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="bracket">Bracket <span class="">*</span></label>
                        <input type="text" class="form-control" id="bracket" name="bracket" value=" {{ $inspection->bracket }}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date_of_inspection">Date of Inspection <span class="">*</span></label>
                        <input type="text" class="form-control" id="date_of_inspection" name="date_of_inspection" value=" {{ $inspection->date_of_inspection }}" disabled>
                    </div>
                </div>

                <br>

                <div class="col align-self-start">
                    <div class="form-group row">
                        <label for="knowledge_by" class="col-sm-4 col-form-label">Knowledge By:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="knowledge_by" name="knowledge_by" value=" {{ $inspection->knowledge_by }}" disabled>
                        </div>
                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

@endsection
