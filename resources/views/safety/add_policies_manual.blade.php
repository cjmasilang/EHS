@extends('safety.safetyHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }

        .form-group{
              font-weight: tahoma;
        }

    </style>

@section('safety-content')

<section class="section">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ehs_policies_manual')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Policies Manual</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>


                    <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
                    <br>
                    Enviromental, Safety and Health
                    <center>
                        <h3>EHS Policies Manual
                            <br>
                            <p>BEHAVIOR BASED SAFETY OBSERVATION FORM (BBSO)</p>
                        </h3>
                    </center>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.policies_manual') }}">
                    @csrf

                    <hr>
                    <center>Improvement Input</center>
                    <hr>

                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="unsafe_act" disabled checked> BBS Observation <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="unsafe_act" value="1"> Unsafe Act <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="unsafe_condition" value="1"> Unsafe Condition <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="recognition" value="1" > Recognition <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="environment" value="1" > Environment <i class="input-helper"></i></label>
                            </div>

                        </div>
                    </div>

                    <br>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h6><label for="observe_input">* </span>Employee/Observer Input</label></h6>
                                    <input type="text" class="form-control" name="observe_input" placeholder="Enter Employee Name" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h6><label for="recommendation">* </span>Recommendations</label></h6>
                                    <input type="text" class="form-control" name="recommendation" placeholder="Enter Recommendation" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h6><label for="management_action_team">* </span>Supervisor or Management Action Taken</label></h6>
                                    <input type="text" class="form-control" name="management_action_team" placeholder="Enter Supervisor or Management Action Taken" required>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <center>Safety Observation Critiical Factors (S=Safe, C=Concern)</center>
                        <hr>
                        <br>

                        <div class="container">
                            <div class="row">
                                <div class="col align-self-start">
                                    <h6>PPE/Procedures Method: </h6>

                                        <div class="form-group">
                                            <label><strong>Eye and Head :</strong></label>
                                            <label><input type="checkbox" name="eye_and_head[]" value="1"> S</label>
                                            <label><input type="checkbox" name="eye_and_head[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Hand Over Body :</strong></label>
                                            <label><input type="checkbox" name="hand_and_body[]" value="1"> S</label>
                                            <label><input type="checkbox" name="hand_and_body[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Footwear :</strong></label>
                                            <label><input type="checkbox" name="footwear[]" value="1"> S</label>
                                            <label><input type="checkbox" name="footwear[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Trained on Task :</strong></label>
                                            <label><input type="checkbox" name="trained_on_mask[]" value="1"> S</label>
                                            <label><input type="checkbox" name="trained_on_mask[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Work Permit :</strong></label>
                                            <label><input type="checkbox" name="work_permit[]" value="1"> S</label>
                                            <label><input type="checkbox" name="work_permit[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Toolbox Talk Conducted :</strong></label>
                                            <label><input type="checkbox" name="toolbox_talk_conducted[]" value="1"> S</label>
                                            <label><input type="checkbox" name="toolbox_talk_conducted[]" value="1"> C</label>
                                        </div>

                                </div>

                                <div class="col align-self-center">
                                    <h6>Body Position/Mechanics: </h6>

                                        <div class="form-group">
                                            <label><strong>Proper Position:</strong></label>
                                            <label><input type="checkbox" name="proper_transition[]" value="1"> S</label>
                                            <label><input type="checkbox" name="proper_transition[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Asking for Help :</strong></label>
                                            <label><input type="checkbox" name="asking_for_health[]" value="1"> S</label>
                                            <label><input type="checkbox" name="asking_for_health[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Lags to lift :</strong></label>
                                            <label><input type="checkbox" name="use_of_legs_lift[]" value="1"> S</label>
                                            <label><input type="checkbox" name="use_of_legs_lift[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Over Reaching :</strong></label>
                                            <label><input type="checkbox" name="over_reaching[]" value="1"> S</label>
                                            <label><input type="checkbox" name="over_reaching[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Dont twist body :</strong></label>
                                            <label><input type="checkbox" name="dont_twist_body[]" value="1"> S</label>
                                            <label><input type="checkbox" name="dont_twist_body[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Get close to them :</strong></label>
                                            <label><input type="checkbox" name="get_close_to_them[]" value="1"> S</label>
                                            <label><input type="checkbox" name="get_close_to_them[]" value="1"> C</label>
                                        </div>

                                </div>

                                <div class="col align-self-start">
                                    <h6>Slips/Trips: </h6>

                                        <div class="form-group">
                                            <label><strong>Proper Footwear:</strong></label>
                                            <label><input type="checkbox" name="proper_footwear[]" value="1"> S</label>
                                            <label><input type="checkbox" name="proper_footwear[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Aware of Hazards :</strong></label>
                                            <label><input type="checkbox" name="aware_of_hazards[]" value="1"> S</label>
                                            <label><input type="checkbox" name="aware_of_hazards[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Prompt clean up :</strong></label>
                                            <label><input type="checkbox" name="prompt_clean_up[]" value="1"> S</label>
                                            <label><input type="checkbox" name="prompt_clean_up[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Tripping hazards :</strong></label>
                                            <label><input type="checkbox" name="tripping_hazards[]" value="1"> S</label>
                                            <label><input type="checkbox" name="tripping_hazards[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Not rushing :</strong></label>
                                            <label><input type="checkbox" name="not_rushing[]" value="1"> S</label>
                                            <label><input type="checkbox" name="not_rushing[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Step Conditions :</strong></label>
                                            <label><input type="checkbox" name="step_conditions[]" value="1"> S</label>
                                            <label><input type="checkbox" name="step_conditions[]" value="1"> C</label>
                                        </div>

                                </div>

                                <div class="col align-self-start">
                                    <h6>Equipment/Work Environment: </h6>

                                        <div class="form-group">
                                            <label><strong>MSDS:</strong></label>
                                            <label><input type="checkbox" name="msds[]" value="1"> S</label>
                                            <label><input type="checkbox" name="msds[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Lockout/Tagout :</strong></label>
                                            <label><input type="checkbox" name="lookout_tagout[]" value="1"> S</label>
                                            <label><input type="checkbox" name="lookout_tagout[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Equipment/Tools :</strong></label>
                                            <label><input type="checkbox" name="equipment_tools_are_safe[]" value="1"> S</label>
                                            <label><input type="checkbox" name="equipment_tools_are_safe[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Adjacent Work :</strong></label>
                                            <label><input type="checkbox" name="adjacent_work[]" value="1"> S</label>
                                            <label><input type="checkbox" name="adjacent_work[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Signage (if needed) :</strong></label>
                                            <label><input type="checkbox" name="signage[]" value="1"> S</label>
                                            <label><input type="checkbox" name="spill_control[]" value="1"> C</label>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Spill Control :</strong></label>
                                            <label><input type="checkbox" name="step_conditions[]" value="1"> S</label>
                                            <label><input type="checkbox" name="step_conditions[]" value="1"> C</label>
                                        </div>

                                </div>

                                <br>



                            </div>
                        </div>


                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h6><label for="location">* </span>Location</label></h6>
                                    <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h6><label for="observer_name">* </span>Observer Name</label></h6>
                                    <input type="text" class="form-control" name="observer_name" placeholder="Enter Observer Name" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <h6><label for="due_date">* </span>Due Date</label></h6>
                                    <input type="date" class="form-control" name="due_date" placeholder="Enter Employee Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="due_date">* </span>Noted By</label></h6>
                                <input type="text" class="form-control" name="noted_by" placeholder="Judy Mae B. Padeo" disabled>
                            </div>
                        </div>

                  <br>


                    <center>
                    <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Submit Policies Manual</button></div>
                    </center>
                 </form>
              </div>
           </div>
        </div>


     </div>
 </section>

@endsection
