@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('schedule_updates') }}">Back</a></li>
          <li class="breadcrumb-item">View Schedule</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Schedule</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Time <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="time" value=" {{ $schedule->time }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="date" value=" {{ $schedule->date }}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value=" {{ strip_tags( $schedule->name ) }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Venue <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="venue" value=" {{ $schedule->venue }}" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
