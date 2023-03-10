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
                <li class="breadcrumb-item"><a href="{{ route('new_hired_employees')}}">Back</a></li>
                <li class="breadcrumb-item active">Add New Hired</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add New Hired</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.new_hired') }}">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Date of Hired <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="date_of_hired" placeholder="Date of Hired" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Health Card <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="health_card" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="food_handlers_cert" required>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add New Hired</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
