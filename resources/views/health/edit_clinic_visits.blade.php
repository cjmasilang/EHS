@extends('health.healthHome')


@section('health-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('clinic_visits') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Clinic Visits</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Clinic Visits</h5>
                <form class="forms-sample" action="{{ route('update.clinic',$clinic->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $clinic->name }}">
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleTextarea1">Notes <span class="">*</span></label>
                        <textarea class="form-control" name="notes" id="summernote">
                            {{ $clinic->notes }}
                        </textarea>
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

