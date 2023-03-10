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
                <li class="breadcrumb-item"><a href="{{ route('aiir')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Investigation Report</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.aiir') }}" enctype="multipart/form-data">
                    @csrf

                    <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
                    <br>
                    Enviromental, Safety and Health
                    <center>
                        <h5>Accident/Incident Investigation Report (AIIR)</h5>
                    </center>

                    <br>

                    <h5>I. General Information </h5>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Area Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="area_name" placeholder="Enter Area Name" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Reported Date <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="reported_date" placeholder="Enter Reported Date" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">AIIR No <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="aiir_no" placeholder="Enter AIIR No" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Work Location <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="work_location" placeholder="Enter Work Location" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Name of Supervisor <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_of_supervisor" placeholder="Enter Name of Supervisor" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Name of Manager <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_of_manager" placeholder="Enter Name of Manager" required>
                        </div>
                    </div>

                    <br>

                    <h5>II. Involved Employee Information </h5>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="exampleInputName1">Employee Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="employee_name" placeholder="Enter Employee Name" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputName1">Employee No <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="employee_no" placeholder="Enter Employee No" required>
                        </div>

                        <div class="form-group col-md-1">
                            <label for="exampleInputName1">Age <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="age" placeholder="Enter Age" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputName1">Sex<span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="sex" placeholder="Enter Age" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputName1">Civil Status<span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="civil_status" placeholder="Enter Civil Status" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputName1">Position<span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="position" placeholder="Enter Position" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputName1">Month's with the Company<span class="">*</span></label>
                            <input type="number" class="form-control" id="exampleInputName1" name="month_with_company" placeholder="Enter Months with the company" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputName1">Month's with the Department<span class="">*</span></label>
                            <input type="number" class="form-control" id="exampleInputName1" name="month_with_department" placeholder="Enter Months with the department" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputName1">Date of Employer<span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="date_of_employer" required>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputName1">Activity at the time Accident<span class="">*</span></label>
                            <input type="time" class="form-control" id="exampleInputName1" name="activity_accident" required>
                        </div>
                    </div>

                    <hr>
                    <h5>III. Incident / Accident Classification </h5>
                    <div class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Safety & Health</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="medical_treatment" value="1" > Medical Treatment <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="first_aid" value="1" > First Aid <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="restricted" value="1" > Restricted <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="lta" value="1" > LTA <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="fatality" value="1" > Fatality <i class="input-helper"></i></label>
                            </div>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Security I/A Classification</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="property_damage" value="1" > Property Loss/Damage <i class="input-helper"></i></label>
                            </div>

                           <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pilferage" value="1" > Pilferage <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="others" value="1" > Others <i class="input-helper"></i></label>
                            </div>

                        </div>
                    </div>
                    <br>

                    <center>
                        <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Submit Investigation Report</button></div>
                    </center>

                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
