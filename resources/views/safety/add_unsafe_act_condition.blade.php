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
                <li class="breadcrumb-item"><a href="{{ route('unsafe')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Unsafe Act & Condition</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Unsafe</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.unsafe') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="unsafe_act">Unsafe Act <span class="">*</span></label>
                            <input type="number" class="form-control" id="unsafe_act" name="unsafe_act" placeholder="Enter Unsafe Act" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="unsafe_condition">Unsafe Condition <span class="">*</span></label>
                            <input type="number" class="form-control" id="unsafe_condition" name="unsafe_condition" placeholder="Enter Unsafe Condition" required>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Unsafe</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
