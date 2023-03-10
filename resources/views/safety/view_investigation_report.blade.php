@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('aiir') }}">Back</a></li>
          <li class="breadcrumb-item">View Investigation Report</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Investigation Report</h5>
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
                        <label for="area_name">Area Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="area_name" name="area_name" value="{{ $aiir->area_name}}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="reported_date">Reported Date <span class="">*</span></label>
                        <input type="text" class="form-control" id="reported_date" name="reported_date" value="{{ $aiir->reported_date}}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="aiir_no">AIIR No <span class="">*</span></label>
                        <input type="text" class="form-control" id="aiir_no" name="aiir_no" value="{{ $aiir->aiir_no}}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="work_location">Work Location <span class="">*</span></label>
                        <input type="text" class="form-control" id="work_location" name="work_location" value="{{ $aiir->work_location}}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="name_of_supervisor">Name of Supervisor <span class="">*</span></label>
                        <input type="text" class="form-control" id="name_of_supervisor" name="name_of_supervisor" value="{{ $aiir->name_of_supervisor}}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="name_of_manager">Name of Manager <span class="">*</span></label>
                        <input type="text" class="form-control" id="name_of_manager" name="name_of_manager" value="{{ $aiir->name_of_manager}}" disabled>
                    </div>
                </div>
                <br>


                <h5>II. Involved Employee Information </h5>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="employee_name">Employee Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="employee_name" name="employee_name" value="{{ $aiir->employee_name}}" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="employee_no">Employee No <span class="">*</span></label>
                        <input type="text" class="form-control" id="employee_no" name="employee_no" value="{{ $aiir->employee_no}}" disabled>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="age">Age <span class="">*</span></label>
                        <input type="text" class="form-control" id="age" name="age" value="{{ $aiir->age}}" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="sex">Sex<span class="">*</span></label>
                        <input type="text" class="form-control" id="sex" name="sex" value="{{ $aiir->sex}}" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="civil_status">Civil Status<span class="">*</span></label>
                        <input type="text" class="form-control" id="civil_status" name="civil_status" value="{{ $aiir->civil_status}}" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="position">Position<span class="">*</span></label>
                        <input type="text" class="form-control" id="position" name="position" value="{{ $aiir->position}}" disabled>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="month_with_company">Month's with the Company<span class="">*</span></label>
                        <input type="text" class="form-control" id="month_with_company" name="month_with_company" value="{{ $aiir->month_with_company}}" disabled>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="month_with_department">Month's with the Department<span class="">*</span></label>
                        <input type="text" class="form-control" id="month_with_department" name="month_with_department"value="{{ $aiir->month_with_department}}" disabled>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="date_of_employer">Date of Employer<span class="">*</span></label>
                        <input type="text" class="form-control" id="date_of_employer" value="{{ $aiir->date_of_employer}}" disabled>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="activity_accident">Activity at the time Accident<span class="">*</span></label>
                        <input type="text" class="form-control" id="activity_accident" value="{{ $aiir->activity_accident}}" disabled>
                    </div>
                </div>

                <hr>

                <h5>III. Incident / Accident Classification </h5>
                <div class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Safety & Health</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="medical_treatment" disabled = "disabled" value="1" @if($aiir->medical_treatment == 1) checked="" @endif> Medical Treatment <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="first_aid" disabled = "disabled" value="1" @if($aiir->first_aid == 1) checked="" @endif>  First Aid <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="restricted" disabled = "disabled" value="1" @if($aiir->restricted == 1) checked="" @endif>  Restricted <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="lta" disabled = "disabled" value="1" @if($aiir->lta == 1) checked="" @endif>  LTA <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fatality" disabled = "disabled" value="1" @if($aiir->fatality == 1) checked="" @endif>  Fatality <i class="input-helper"></i></label>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Security I/A Classification</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="property_damage" disabled = "disabled value="1" @if($aiir->property_damage == 1) checked="" @endif > Property Loss/Damage <i class="input-helper"></i></label>
                        </div>

                       <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="pilferage" disabled = "disabled value="1" @if($aiir->pilferage == 1) checked="" @endif > Pilferage <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="others" disabled = "disabled value="1" @if($aiir->others == 1) checked="" @endif > Others <i class="input-helper"></i></label>
                        </div>

                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

@endsection
