@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('health_events') }}">Back</a></li>
          <li class="breadcrumb-item">View Health Events</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Health Events</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ strip_tags( $events->title ) }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Event Month <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="event_month" value=" {{ $events->event_month }}" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
