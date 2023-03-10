@extends('safety.safetyHome')

@php
$accident_classification = DB::table('accident_classification')->get();
$unsafe_act = DB::table('unsafe_act')->get();
$shift = DB::table('shift')->get();
$audit_form = DB::table('audit_form')->get();

$workplace_inspection_checklist = DB::table('workplace_inspection_checklist')->get();
$ptw_register = DB::table('ptw_register')->get();
$fire_extinguisher_inspection = DB::table('fire_extinguisher_inspection')->get();
$monitoring_checklist = DB::table('tags')->get();
$ehs_policies_manual = DB::table('ehs_policies_manual')->get();

@endphp

@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item">Dashboard</li>
       </ol>
    </nav>
</div>

<section class="section">
    <div class="row ">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-betweecn">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15 pull-center">Total Accident Classification</h5>
                                    <h2 class="mb-3 font-18">{{ count($accident_classification) }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15"> Total Unsafe Act & Condition</h5>
                                <h2 class="mb-3 font-18">{{ count($unsafe_act) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15">Total Shift</h5>
                                <h2 class="mb-3 font-18">{{ count($shift) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15">Total 7s Audit Form</h5>
                                <h2 class="mb-3 font-18">{{ count($audit_form) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15">Total Workplace Inspection</h5>
                                <h2 class="mb-3 font-18">{{ count($workplace_inspection_checklist) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15">Total PTW Register</h5>
                                <h2 class="mb-3 font-18">{{ count($ptw_register) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15">Total Monthly Fire Inspection</h5>
                                <h2 class="mb-3 font-18">{{ count($fire_extinguisher_inspection) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                                <h5 class="font-15">Total EHS Policies Manual</h5>
                                <h2 class="mb-3 font-18">{{ count($ehs_policies_manual) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="pagetitle">
        <nav>
           <ol class="breadcrumb">
              <li class="breadcrumb-item">Charts</li>
           </ol>
        </nav>
    </div>


  </section>

<section class="section">
    <div class="section-body">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Accident Classification</h4>
                    </div>
                    <div class="card-body">
                    <div class="recent-report__chart">
                        <div id="accident_classification"></div>
                        <script>

                        </script>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
