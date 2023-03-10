@extends('admin.adminHome')


@section('content')

<style>
    .card-title{
        font-weight: tahoma;
        color: black;
    }
</style>

@include('admin.includes.alert')

<main id="main" class="main">
    <div class="pagetitle">
       <nav>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{ route('ehs_policies_manual') }}">Back</a></li>
             <li class="breadcrumb-item">Edit Policies Manual</li>
          </ol>
       </nav>
    </div>

    <section class="section">

       <div class="row">
          <div class="col-lg-12">
             <div class="card">
                <div class="card-body">

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

                   <form class="forms-sample" method="POST" action="{{ route('update.policies_manual',$policies->id ) }}">

                    @csrf
                    <hr>
                    <center>Improvement Input</center>
                    <hr>
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="bbs_observation" disabled checked> BBS Observation <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="unsafe_act" value="{{ $policies->unsafe_act }}">  Unsafe Act <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="unsafe_condition" value="{{ $policies->unsafe_condition }}">  Unsafe Condition <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="recognition" value="{{ $policies->recognition }}" > Recognition <i class="input-helper"></i></label>
                            </div>

                            <div class="col-md-2">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="environment" value="{{ $policies->environment }}" >  Environment <i class="input-helper"></i></label>
                            </div>

                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="observe_input">* </span>Employee/Observer Input</label></h6>
                                <input type="text" class="form-control" id="ptw_no" name="ptw_no" value="{{ $policies->observe_input }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="recommendation">* </span>Recommendations</label></h6>
                                <input type="text" class="form-control" id="ptw_no" name="ptw_no" value="{{ $policies->recommendation }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="management_action_team">* </span>Supervisor or Management Action Taken</label></h6>
                                <input type="text" class="form-control" id="ptw_no" name="ptw_no" value="{{ $policies->management_action_team }}" required>
                            </div>
                        </div>
                    </div>

                    <br>

                    <hr>
                    <center>Safety Observation Critiical Factors (S=Safe, C=Concern)</center>
                    <hr>

                    <div class="container">
                        <div class="row">
                            <div class="col align-self-start">
                                <h6>PPE/Procedures Method: </h6>

                                    <div class="form-group">
                                        <label><strong>Eye and Head :</strong></label>
                                        <label><input type="checkbox" name="eye_and_head[]" value="{{ $policies->eye_and_head }}"> S</label>
                                        <label><input type="checkbox" name="eye_and_head[]" value="{{ $policies->eye_and_head }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Hand Over Body :</strong></label>
                                        <label><input type="checkbox" name="hand_and_body[]" value="{{ $policies->hand_and_body }}"> S</label>
                                        <label><input type="checkbox" name="hand_and_body[]" value="{{ $policies->hand_and_body }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Footwear :</strong></label>
                                        <label><input type="checkbox" name="footwear[]" value="{{ $policies->footwear }}"> S</label>
                                        <label><input type="checkbox" name="footwear[]" value="{{ $policies->footwear }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Trained on Task :</strong></label>
                                        <label><input type="checkbox" name="trained_on_mask[]" value="{{ $policies->trained_on_mask }}"> S</label>
                                        <label><input type="checkbox" name="trained_on_mask[]" value="{{ $policies->trained_on_mask }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Work Permit :</strong></label>
                                        <label><input type="checkbox" name="work_permit[]" value="{{ $policies->work_permit }}"> S</label>
                                        <label><input type="checkbox" name="work_permit[]" value="{{ $policies->work_permit }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Toolbox Talk Conducted :</strong></label>
                                        <label><input type="checkbox" name="toolbox_talk_conducted[]" value="1"> {{ $policies->toolbox_talk_conducted }}</label>
                                        <label><input type="checkbox" name="toolbox_talk_conducted[]" value="1"> {{ $policies->toolbox_talk_conducted }}</label>
                                    </div>

                            </div>

                            <div class="col align-self-center">
                                <h6>Body Position/Mechanics: </h6>

                                    <div class="form-group">
                                        <label><strong>Proper Position:</strong></label>
                                        <label><input type="checkbox" name="proper_transition[]" value="1"> {{ $policies->proper_transition }}</label>
                                        <label><input type="checkbox" name="proper_transition[]" value="1"> {{ $policies->proper_transition }}</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Asking for Help :</strong></label>
                                        <label><input type="checkbox" name="asking_for_health[]" value="1"> {{ $policies->asking_for_health }}</label>
                                        <label><input type="checkbox" name="asking_for_health[]" value="1"> {{ $policies->asking_for_health }}</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Lags to lift :</strong></label>
                                        <label><input type="checkbox" name="use_of_legs_lift[]" value="1"> {{ $policies->use_of_legs_lift }}</label>
                                        <label><input type="checkbox" name="use_of_legs_lift[]" value="1"> {{ $policies->use_of_legs_lift }}</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Over Reaching :</strong></label>
                                        <label><input type="checkbox" name="over_reaching[]" value="1"> {{ $policies->over_reaching }}</label>
                                        <label><input type="checkbox" name="over_reaching[]" value="1"> {{ $policies->over_reaching }}</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Dont twist body :</strong></label>
                                        <label><input type="checkbox" name="dont_twist_body[]" value="1"> {{ $policies->dont_twist_body }}</label>
                                        <label><input type="checkbox" name="dont_twist_body[]" value="1"> {{ $policies->dont_twist_body }}</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Get close to them :</strong></label>
                                        <label><input type="checkbox" name="get_close_to_them[]" value="1"> {{ $policies->get_close_to_them }}</label>
                                        <label><input type="checkbox" name="get_close_to_them[]" value="1"> {{ $policies->get_close_to_them }}</label>
                                    </div>

                            </div>

                            <div class="col align-self-start">
                                <h6>Slips/Trips: </h6>

                                    <div class="form-group">
                                        <label><strong>Proper Footwear:</strong></label>
                                        <label><input type="checkbox" name="proper_footwear[]" value="{{ $policies->proper_footwear }}"> S</label>
                                        <label><input type="checkbox" name="proper_footwear[]" value="{{ $policies->proper_footwear }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Aware of Hazards :</strong></label>
                                        <label><input type="checkbox" name="aware_of_hazards[]" value="{{ $policies->aware_of_hazards }}"> S</label>
                                        <label><input type="checkbox" name="aware_of_hazards[]" value="{{ $policies->aware_of_hazards }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Prompt clean up :</strong></label>
                                        <label><input type="checkbox" name="prompt_clean_up[]" value="{{ $policies->prompt_clean_up }}"> S</label>
                                        <label><input type="checkbox" name="prompt_clean_up[]" value="{{ $policies->prompt_clean_up }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Tripping hazards :</strong></label>
                                        <label><input type="checkbox" name="tripping_hazards[]" value="{{ $policies->tripping_hazards }}"> S</label>
                                        <label><input type="checkbox" name="tripping_hazards[]" value="{{ $policies->tripping_hazards }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Not rushing :</strong></label>
                                        <label><input type="checkbox" name="not_rushing[]" value="{{ $policies->not_rushing }}"> S</label>
                                        <label><input type="checkbox" name="not_rushing[]" value="{{ $policies->not_rushing }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Step Conditions :</strong></label>
                                        <label><input type="checkbox" name="step_conditions[]" value="{{ $policies->step_conditions }}"> S</label>
                                        <label><input type="checkbox" name="step_conditions[]" value="{{ $policies->step_conditions }}"> C</label>
                                    </div>

                            </div>

                            <div class="col align-self-start">
                                <h6>Equipment/Work Environment: </h6>

                                    <div class="form-group">
                                        <label><strong>MSDS:</strong></label>
                                        <label><input type="checkbox" name="msds[]" value="{{ $policies->msds }}"> S</label>
                                        <label><input type="checkbox" name="msds[]" value="{{ $policies->msds }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Lockout/Tagout :</strong></label>
                                        <label><input type="checkbox" name="lookout_tagout[]" value="{{ $policies->lookout_tagout }}"> S</label>
                                        <label><input type="checkbox" name="lookout_tagout[]" value="{{ $policies->lookout_tagout }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Equipment/Tools :</strong></label>
                                        <label><input type="checkbox" name="equipment_tools_are_safe[]" value="{{ $policies->equipment_tools_are_safe }}"> S</label>
                                        <label><input type="checkbox" name="equipment_tools_are_safe[]" value="{{ $policies->equipment_tools_are_safe }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Adjacent Work :</strong></label>
                                        <label><input type="checkbox" name="adjacent_work[]" value="{{ $policies->adjacent_work }}"> S</label>
                                        <label><input type="checkbox" name="adjacent_work[]" value="{{ $policies->adjacent_work }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Signage (if needed) :</strong></label>
                                        <label><input type="checkbox" name="signage[]" value="{{ $policies->signage }}"> S</label>
                                        <label><input type="checkbox" name="signage[]" value="{{ $policies->signage }}"> C</label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>Spill Control :</strong></label>
                                        <label><input type="checkbox" name="step_conditions[]" value="{{ $policies->step_conditions }}"> S</label>
                                        <label><input type="checkbox" name="step_conditions[]" value="{{ $policies->step_conditions }}"> C</label>
                                    </div>
                            </div>

                            <br>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="location">* </span>Location</label></h6>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $policies->location }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="observer_name">* </span>Observer Name</label></h6>
                                <input type="text" class="form-control" id="observer_name" name="observer_name" value="{{ $policies->observer_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6><label for="due_date">* </span>Due Date</label></h6>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $policies->due_date }}" required>
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
 </main>


@endsection

