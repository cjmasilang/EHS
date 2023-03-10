@extends('safety.safetyHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('safety-content')

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ptw_register')}}">Back</a></li>
                <li class="breadcrumb-item active">Add PTW Register</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.ptw_register') }}" enctype="multipart/form-data">
                    @csrf

                    <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
                    <br>
                    Enviromental, Safety and Health
                    <center>
                        <h5>Valley Bread Inc. PTW Register</h5>
                    </center>

                    <br>

                    <div class="row">
                        <div class="form-group col-3">
                            <label for="ptw_no">PTW No <span class="">*</span></label>
                            <input type="text" class="form-control" id="ptw_no" name="ptw_no" placeholder="Enter PTW No" required>
                        </div>

                        <div class="form-group col-9">
                            <label for="activity">Activity <span class="">*</span></label>
                            <input type="text" class="form-control" id="activity" name="activity" placeholder="Enter Activity" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="work_location">Work Location <span class="">*</span></label>
                            <input type="text" class="form-control" id="work_location" name="work_location" placeholder="Enter Work Location" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="ptw_holder">PTW Holder <span class="">*</span></label>
                            <input type="text" class="form-control" id="ptw_holder" name="ptw_holder" placeholder="Enter PTW Holder" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="date_of_approved">Date of Approved <span class="">*</span></label>
                            <input type="date" class="form-control" id="date_of_approved" name="date_of_approved" placeholder="Enter Date of Approved" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="date_of_expiry">Date of Expiry <span class="">*</span></label>
                            <input type="date" class="form-control" id="date_of_expiry" name="date_of_expiry" placeholder="Enter Date of Expiry" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="date_closed">Date Closed <span class="">*</span></label>
                            <input type="date" class="form-control" id="date_closed" name="date_closed" placeholder="Enter Date Closed" required>
                        </div>
                    </div>

                    <br>
                    <hr>

                    <div class="container">
                        <div class="row">
                            <div class="col align-self-start">
                                <h6>Completed By: </h6>
                                <div class="form-group row">
                                    <label for="job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="job_position" placeholder="Enter Job Position">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Name Surname:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name Surname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="signature" class="col-sm-4 col-form-label">Signature:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="signature" placeholder="Enter Signature">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Date:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="date" placeholder="Enter Date">
                                    </div>
                                </div>
                            </div>

                            <div class="col align-self-center">
                                <h6>Approved By: </h6>
                                <div class="form-group row">
                                    <label for="approved_job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="approved_job_position" placeholder="Enter Job Position">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="approved_name" class="col-sm-4 col-form-label">Name Surname:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="approved_name" placeholder="Enter Name Surname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="approved_signature" class="col-sm-4 col-form-label">Signature:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="approved_signature" placeholder="Enter Signature">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="approved_date" class="col-sm-4 col-form-label">Date:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="approved_date" placeholder="Enter Date">
                                    </div>
                                </div>
                            </div>

                            <div class="col align-self-start">
                                <h6>Distribution List: </h6>
                                <div class="form-group row">
                                    <label for="distributed_job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="distributed_job_position"placeholder="Enter Job Position">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="distributed_name" class="col-sm-4 col-form-label">Name Surname:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="distributed_name" placeholder="Enter Name Surname">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <center>
                        <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Submit Register</button></div>
                    </center>

                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
