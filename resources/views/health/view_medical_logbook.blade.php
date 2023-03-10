@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('medical_logbook') }}">Back</a></li>
          <li class="breadcrumb-item">View Medical Logbook</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Medical Logbook</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value=" {{ $med->name }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Medicine<span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="medicine" value=" {{ $med->medicine }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Qty <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="qty" value=" {{ $med->qty }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" {{ $med->created_at }}" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
