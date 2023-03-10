@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('unsafe') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Unsafe Act & Condition</li>
       </ol>
    </nav>
</div>


@include('admin.includes.alert')


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Unsafe Act & Condition</h5>
                <form class="forms-sample" action="{{ route('update.unsafe',$unsafe->id ) }}" method="post" enctype="multipart/form-data">
                 @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="unsafe_act">Unsafe Act <span class="">*</span></label>
                        <input type="text" class="form-control" id="unsafe_act" name="unsafe_act" value="{{ $unsafe->unsafe_act }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="unsafe_condition">Unsafe Condition <span class="">*</span></label>
                        <input type="text" class="form-control" id="unsafe_condition" name="unsafe_condition" value="{{ $unsafe->unsafe_condition }}" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Unsafe</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


@endsection
