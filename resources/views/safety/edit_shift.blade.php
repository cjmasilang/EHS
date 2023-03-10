@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('shift') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Shift</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Shift</h5>
                <form class="forms-sample" action="{{ route('update.shift',$shift->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="am_shift">AM Shift <span class="">*</span></label>
                        <input type="number" class="form-control" id="am_shift" name="am_shift" value="{{ $shift->am_shift }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pm_shift">PM Shift <span class="">*</span></label>
                        <input type="number" class="form-control" id="pm_shift" name="pm_shift" value="{{ $shift->pm_shift }}" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">AM Overtime <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="am_overtime" value="{{ $shift->am_overtime }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">PM Overtime <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="pm_overtime" value="{{ $shift->pm_overtime }}" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Shift</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


@endsection
