@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('ptw_register') }}">Back</a></li>
          <li class="breadcrumb-item">Edit PTW Register</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
                <br>
                Enviromental, Safety and Health
                <center>
                    <h5> Edit PTW Register</h5>
                </center>

                <form class="forms-sample" action="{{ route('update.ptw_register',$ptw->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="ptw_no">PTW No <span class="">*</span></label>
                        <input type="text" class="form-control" id="ptw_no" name="ptw_no" value="{{ $ptw->ptw_no }}" required>
                    </div>

                    <div class="form-group col-md-9">
                        <label for="activity">Activity <span class="">*</span></label>
                        <input type="text" class="form-control" id="activity" name="activity" value="{{ $ptw->activity }}" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="work_location">Work Location <span class="">*</span></label>
                        <input type="text" class="form-control" id="work_location" name="work_location" value="{{ $ptw->work_location }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ptw_holder">PTW Holder <span class="">*</span></label>
                        <input type="text" class="form-control" id="ptw_holder" name="ptw_holder" value="{{ $ptw->ptw_holder }}" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="date_of_approved">Date of Approved <span class="">*</span></label>
                        <input type="date" class="form-control" id="date_of_approved" name="date_of_approved" value="{{ $ptw->date_of_approved }}" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date_of_expiry">Date of Expiry  <span class="">*</span></label>
                        <input type="date" class="form-control" id="date_of_expiry" name="date_of_expiry" value="{{ $ptw->date_of_expiry }}" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date_closed">Date Closed <span class="">*</span></label>
                        <input type="date" class="form-control" id="date_closed" name="date_closed" value="{{ $ptw->date_closed }}" required>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col align-self-start">
                            <h6>Completed By: </h6>
                            <div class="form-group row">
                                <label for="job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="job_position" name="job_position" value="{{ $ptw->job_position }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name Surname:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $ptw->name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="signature" class="col-sm-4 col-form-label">Signature:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="signature" name="signature" value="{{ $ptw->signature }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-sm-4 col-form-label">Date:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="date" name="date" value="{{ $ptw->date }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col align-self-center">
                            <h6>Approved By: </h6>
                            <div class="form-group row">
                                <label for="approved_job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_job_position" name="approved_job_position" value="{{ $ptw->job_position }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="approved_name" class="col-sm-4 col-form-label">Name Surname:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="approved_name" value="{{ $ptw->approved_name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="approved_signature" class="col-sm-4 col-form-label">Signature:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_signature" name="approved_signature" value="{{ $ptw->approved_signature }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="approved_date" class="col-sm-4 col-form-label">Date:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_date" name="approved_date" value="{{ $ptw->approved_date }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="col align-self-start">
                            <h6>Distribution List: </h6>
                            <div class="form-group row">
                                <label for="distributed_job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="distributed_job_position" name="distributed_job_position" value="{{ $ptw->distributed_job_position }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="distributed_name" class="col-sm-4 col-form-label">Name Surname:</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="distributed_name" name="distributed_name" value="{{ $ptw->distributed_name }}" required>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update PTW Register</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


@endsection
