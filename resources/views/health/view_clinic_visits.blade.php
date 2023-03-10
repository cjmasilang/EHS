@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('clinic_visits') }}">Back</a></li>
          <li class="breadcrumb-item">View Clinic Visits</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Clinic Visits</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value=" {{ $clinic->name }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Notes/Remarks <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="notes "value="{{ strip_tags( $clinic->notes ) }}" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
