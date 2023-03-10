@extends('health.healthHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('health-content')

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('incident')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Incident Report</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Incident Report</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.incident') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Department <span class="">*</span></label>
                            <select class="form-control" id="department_id" name="department_id">
                                    <option disabled="" selected="">Select Department</option>
                                        @foreach($department as $row)
                                    <option value="{{ $row->id }}">{{ $row->department  }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group col-6">
                            <label for="exampleTextarea1">Employee Detail <span class="">*</span></label>
                            <textarea class="form-control" name="employee_detail" id="summernote"></textarea>
                        </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Masterlist</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
