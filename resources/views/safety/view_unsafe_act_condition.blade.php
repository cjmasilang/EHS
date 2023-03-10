@extends('safety.safetyHome')


@section('safety-content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('unsafe') }}">Back</a></li>
          <li class="breadcrumb-item">View Unsafe Act & Condition</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Unsafe Act & Condition</h5>
              @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="unsafe_act">Unsafe Act <span class="">*</span></label>
                        <input type="text" class="form-control" id="unsafe_act" name="unsafe_act" value=" {{ $unsafe->unsafe_act }}" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="unsafe_condition">Unsafe Condition <span class="">*</span></label>
                        <input type="text" class="form-control" id="unsafe_condition" name="unsafe_condition" value=" {{ $unsafe->unsafe_condition }}" disabled>
                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

@endsection
