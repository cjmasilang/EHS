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
                <li class="breadcrumb-item"><a href="{{ route('workplace_inspection_checklist')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Workplace Checklist</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
                <br>
                Enviromental, Safety and Health
                <center>
                    <h5>Workplace Inspection Checklist</h5>
                </center>

                    <div class="text-danger highlight">* (Checkbox) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.workplace_inspection_checklist') }}" enctype="multipart/form-data">
                    @csrf

                    <table class="table table-bordered">

                        <br>
                        @foreach($monitoring_checklist as $monitoring)
                        <tr class="bg-dark text-white">
                            <td>Category {{$monitoring->category }}</td>
                            <td width=30>Yes</td>
                            <td width=30>No</td>
                            <td width=30>Remarks</td>
                        </tr>

                        <?php

                        ?>

                        @foreach($content as $row)
                        @if ($row->category==$monitoring->category)

                        <tr>
                            <input type="hidden" name="id[<?=$row->id?>]" value="<?=$row->id?>">

                            <td> {{$row->checklist_name}} </td>
                            <td>
                                <input type="checkbox" name="yes" {{ $row->id==true ? '': '' }}/>
                            </td>

                            <td>
                                <input type="checkbox" name="no" {{ $row->id==false ? '': '' }}/>
                            </td>

                            <td>
                                <textarea class="form-control" name="remarks" id="remarks"></textarea>
                            </td>

                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                      </table>

                    <br>
                    <div class="row">
                        <div class='col-6'>
                            <div class='row '>
                                <div class='col-2'>
                                    <label class='pt-2'>Name:</label>
                                </div>

                                <div class='col-6 mb-2'>
                                    <input type="text" name="name" class='form-control' placeholder="Enter Name">
                                </div>
                            </div>
                        </div

                        <div class="row mb-3">
                            <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Checklist</button></div>
                        </div>
                    </div>

                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
