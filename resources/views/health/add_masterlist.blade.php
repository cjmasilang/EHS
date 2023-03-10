@extends('health.healthHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('health-content')

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('masterlist')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Masterlist</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Masterlist</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.masterlist') }}">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Department <span class="">*</span></label>
                            <select class="form-control" id="department_id" name="department_id">
                                    <option disabled="" selected="">Select Department</option>
                                        @foreach($department as $row)
                                    <option value="{{ $row->id }}">{{ $row->department  }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Position <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="position" placeholder="Enter Position" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Health Card <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="health_card" placeholder="Enter Health Card" required>
                        </div>
                    </div>
                    <br>

                    <div class="form-group col-6">
                        <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="food_handlers_cert" placeholder="Enter Food Handler Certificate" required>
                    </div>


                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Masterlist</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
