@extends('admin.adminHome')


@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('tags') }}">Back</a></li>
          <li class="breadcrumb-item">View Tags</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Tags</h5>
              @csrf

              <div class="form-group col-6">
                  <label for="exampleInputUsername1">Tags</label>
                  <input type="text" class="form-control" name="tags" disabled = "disabled" value="{{ $tags->tags }}">
              </div>


            </form>

          </div>
       </div>
    </div>
</div>

@endsection
