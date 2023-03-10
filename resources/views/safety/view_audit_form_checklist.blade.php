@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('audit_form_checklist') }}">Back</a></li>
          <li class="breadcrumb-item">View Audit Form Checklist</li>
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

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="item_name">Item Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="item_name" name="item_name" value=" {{ $audit_form_checklist->item_name }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="category">Category <span class="">*</span></label>
                        <input type="text" class="form-control" id="category" name="category" value=" {{ $audit_form_checklist->category }}" disabled>
                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

@endsection
