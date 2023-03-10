@extends('admin.adminHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('content')

@include('admin.includes.alert')

<section class="section">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('department')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Department</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Department</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.dept') }}">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <h6><label for="name">* </span>Department</label></h6>
                                <input type="department" class="form-control" name="department" placeholder="Enter Department" required>
                                    @error('department')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-6">
                            <h6><label for="name">* </span>All Department</label></h6>
                                <label>* </span>1</label>
                                <br>
                                <label>* </span>2</label>
                                <br>
                                <label>* </span>3</label>
                                <br>
                                <label>* </span>4</label>
                                <br>
                                <label>* </span>5</label>
                                <br>
                                <label>* </span>6</label>
                        </div>
                    </div>


                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Department</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
