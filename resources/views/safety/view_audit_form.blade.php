@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('audit_form') }}">Back</a></li>
          <li class="breadcrumb-item">View Audit Form</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

              @csrf

              <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
              <br>
              Enviromental, Safety and Health
              <center>
                  <h5>7s Audit Form</h5>
              </center>

              <table class="table table-bordered">
                <div class="form-group col-6 pull-right">
                    <label for="audit_date">Audit Date <span class="">*</span></label>
                    <input type="text" class="form-control" id="audit_date" name="audit_date" value=" {{ $workplace_audit->audit_date }}" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="name">Auditor Name <span class="">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value=" {{ $workplace_audit->name }}" disabled>
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
                            <input id="hidden" type="hidden" name="id[<?=$row->id?>]" value="@if(!empty($row->id)) 1 @else 0 @endif">


                            <td><?=$row->item_name?></td>
                            <td>
                                <input type="checkbox" disabled='disabled' name="yes" {{ $row->id==true ? 'checked': '' }}/>
                            </td>

                            <td>
                                <input type="checkbox" disabled='disabled' name="no" {{ $row->id==false ? 'unchecked': '' }}/>
                            </td>

                        </tr>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection

