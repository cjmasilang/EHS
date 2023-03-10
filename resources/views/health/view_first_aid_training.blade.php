@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('first_aid_trainings') }}">Back</a></li>
          <li class="breadcrumb-item">View First Aid Training</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View First Aid Training</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value=" {{ $first_aid->title }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Venue <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="venue" value=" {{ $first_aid->venue }}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name of Participants <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name "value="{{ strip_tags( $first_aid->name ) }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" {{ $first_aid->created_at }}" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
