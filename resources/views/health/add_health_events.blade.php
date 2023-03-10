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
                <li class="breadcrumb-item"><a href="{{ route('health_events')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Health Events</li>
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

                    <form class="forms-sample" method="POST" action="{{ route('store.events') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleTextarea1">Title <span class="">*</span></label>
                            <textarea class="form-control" name="title" id="summernote"></textarea>
                        </div>

                        <br>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Event Month <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="event_month" placeholder="Enter Event Month" required>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Events</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
