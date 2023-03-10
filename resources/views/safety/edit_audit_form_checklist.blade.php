@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('audit_form_checklist') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Audit Form Checklist</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <form class="forms-sample" action="{{ route('update.audit_form_checklist',$audit_form_checklist->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                 <img alt="image" src="{{ asset('backend/assets/img/ptw.png') }}"/>
                 <br>
                 Enviromental, Safety and Health
                 <center>
                     <h5>7s Audit Form</h5>
                 </center>

                 <br>

                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="item_name">Item Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="item_name" name="item_name" value="{{ $audit_form_checklist->item_name }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="category">Category <span class="">*</span></label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $audit_form_checklist->category }}" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Shift</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


@endsection
