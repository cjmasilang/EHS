@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('workplace_inspection_checklist') }}">Back</a></li>
          <li class="breadcrumb-item">View Workplace Inspection Checklist</li>
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
                  <h5>Workplace Inspection Checklist</h5>
              </center>

              <table class="table table-bordered">

                <br>
                @foreach($monitoring_checklist as $monitoring)
                <tr class="bg-dark text-white">
                    <td>Category ({{$monitoring->category }})</td>
                    <td width=30>Yes</td>
                    <td width=30>No</td>
                    <td width=40>Remarks</td>
                </tr>

                <?php

                ?>

                @foreach($content as $row)
                @if ($row->category==$monitoring->category)
                <tr>
                    <input id="hidden" type="hidden" name="id[<?=$row->id?>]" value="@if(!empty($row->id)) 1 @else 0 @endif">


                    <td><?=$row->checklist_name?></td>
                    <td>
                        <input type="checkbox" disabled='disabled' name="yes" value="0" {{ $row->id==true ? 'checked': '' }}/>
                    </td>

                    <td>
                        <input type="checkbox" disabled='disabled' name="no" value="1" {{ $row->id==false ? 'checked': '' }}/>
                    </td>

                    <td>
                        <input type="text" class="form-control" id="remarks" name="remarks" value=" {{ $workplace->remarks }}" disabled>
                    </td>
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

