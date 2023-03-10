@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('shift') }}">Back</a></li>
          <li class="breadcrumb-item">View Shift</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Shift</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="am_shift">AM Shift <span class="">*</span></label>
                        <input type="text" class="form-control" id="am_shift" name="am_shift" value=" {{ $shift->am_shift }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pm_shift">PM Shift <span class="">*</span></label>
                        <input type="text" class="form-control" id="pm_shift" name="pm_shift" value=" {{ $shift->pm_shift }}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="am_overtime">AM Overtime <span class="">*</span></label>
                        <input type="text" class="form-control" id="am_overtime" name="am_overtime" value=" {{ $shift->am_overtime }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pm_overtime">PM Overtime <span class="">*</span></label>
                        <input type="text" class="form-control" id="pm_overtime" name="pm_overtime" value=" {{ $shift->pm_overtime }}" disabled>
                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

@endsection
