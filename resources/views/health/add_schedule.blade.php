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
                <li class="breadcrumb-item"><a href="{{ route('schedule_updates')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Schedule </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Clinic Visits</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.schedule') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Time <span class="">*</span></label>
                            <input type="time" class="form-control" id="exampleInputName1" name="time" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Date <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="date" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Venue <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="venue" placeholder="Enter Venue" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleTextarea1">Name <span class="">*</span></label>
                            <textarea class="form-control" name="name" id="summernote"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Schedule</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
