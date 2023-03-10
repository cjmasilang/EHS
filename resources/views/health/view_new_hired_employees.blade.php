@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('new_hired_employees') }}">Back</a></li>
          <li class="breadcrumb-item">View New Hired Employees</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View New Hired Employees</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value0=" {{ $new_hired->name }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date of Hired <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="date_of_hired" value=" {{ $new_hired->date_of_hired }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Health Card <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="health_card" value=" {{ $new_hired->health_card }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="food_handlers_cert" value=" {{ $new_hired->food_handlers_cert }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date & Time <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" {{ $new_hired->created_at }}" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
