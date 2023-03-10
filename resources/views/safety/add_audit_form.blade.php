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
                <li class="breadcrumb-item"><a href="{{ route('audit_form')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Audit Form</li>
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
                    <h5>7s Audit Form</h5>
                </center>

                    <div class="text-danger highlight">* (Checkbox) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.audit_form') }}" enctype="multipart/form-data">
                    @csrf

                    <table class="table table-bordered">
                        <div class="form-group col-6 pull-right">
                            <label for="audit_date">Audit Date <span class="">*</span></label>
                            <input type="date" class="form-control" id="audit_date" name="audit_date" placeholder="Enter Auditor Date" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="name">Auditor Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                        </div>


                        <br>

                        @foreach($audit_checklist as $audit)
                        <tr class="bg-dark text-white">
                            <td>Category {{$audit->category }}</td>
                            <td width=30>Compliant</td>
                            <td width=30>Not Compliant</td>
                        </tr>

                        <?php

                        ?>

                            @foreach($content_audit as $row)
                                @if ($row->category==$audit->category)
                                <tr>
                                    <input type="hidden" name="id[<?=$row->id?>]" value="<?=$row->id?>">

                                    <td> {{$row->item_name}} </td>
                                    <td>
                                        <input type="checkbox" name="compliant" {{ $row->id==true ? '': '' }}/>
                                    </td>

                                    <td>
                                        <input type="checkbox" name="not_compliant" {{ $row->id==false ? '': '' }}/>
                                    </td>

                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>

                    <br>

                        <center>
                            <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Submit Audit Form</button></div>
                        </center>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
