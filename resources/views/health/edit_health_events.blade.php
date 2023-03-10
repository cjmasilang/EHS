@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('health_events') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Health Events</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Health Events</h5>
                <form class="forms-sample" action="{{ route('update.events',$events->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ strip_tags( $events->title ) }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Event Month <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="event_month" value="{{ $events->event_month }}">
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Clinic Visits</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

