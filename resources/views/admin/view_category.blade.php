@extends('admin.adminHome')


@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('categories') }}">Back</a></li>
          <li class="breadcrumb-item">View Category</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Category</h5>
              @csrf

              <div class="form-group col-6">
                  <label for="exampleInputUsername1">Category</label>
                  <input type="text" class="form-control" name="category" disabled = "disabled" value="{{ $category->category }}">
              </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
