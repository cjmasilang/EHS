@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('schedule_updates') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Schedule</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Schedule</h5>
                <form class="forms-sample" action="{{ route('update.schedule',$schedule->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Time <span class="">*</span></label>
                            <input type="time" class="form-control" id="exampleInputName1" name="time" value="{{ $schedule->time }}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Date <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="date" value="{{ $schedule->date }}">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Venue <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="venue" value="{{ $schedule->venue }}">
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleTextarea1">Name <span class="">*</span></label>
                            <textarea class="form-control" name="name" id="summernote">
                                {{ $schedule->name }}
                            </textarea>
                        </div>
                    </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Schedule</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

