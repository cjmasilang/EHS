@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('masterlist') }}">Back</a></li>
          <li class="breadcrumb-item">View Masterlist</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Masterlist</h5>
              @csrf

              <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Name <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" value=" {{ $masterlist->name }}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Department<span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="department_id" value=" {{ $masterlist->department_id }}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Position <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="position" value=" {{ $masterlist->position }}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Health Card <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="health_card" value=" {{ $masterlist->health_card }}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="food_handlers_cert" value=" {{ $masterlist->food_handlers_cert }}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Date <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" {{ $masterlist->created_at }}" disabled>
                </div>
            </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
