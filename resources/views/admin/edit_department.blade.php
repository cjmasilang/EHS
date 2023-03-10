@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('department') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Department</li>
       </ol>
    </nav>
</div>

@include('admin.includes.alert')

<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Department</h5>
                <form class="forms-sample" method="POST" action="{{ route('update.dept',$department->id) }}">
                 @csrf

                    <div class="form-group col-6">
                        <label for="department">* </span>Department</label>
                            <input type="department" class="form-control" name="department" value="{{ $department->department }}">
                                @error('department')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                   <div class="row mb-3">
                      <div class="col-sm-10"> <button type="submit" class="btn btn-success">Update Department</button></div>
                   </div>
                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

