@extends('admin.adminHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

@section('content')

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('subtags')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Sub Tags</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                <h5 class="card-title">Add Category</h5>
                <div class="text-danger highlight">* (Askterisk) Indicates required field</div>
                <br>
                 <form class="forms-sample" method="POST" action="{{ route('store.subtags') }}">
                  @csrf

                  <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputUsername1">Sub Tags <span class="">*</span></label>
                                <input type="text" class="form-control" name="sub_tags"  placeholder="Sub Tags">
                                    @error('sub_tags')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleFormControlSelect2">Select Tags <span class="">*</span></label>
                                <select class="form-control" name="tags_id" id="exampleFormControlSelect2">
                                    <option disabled="" selected="">Select Tags</option>
                                        @foreach($tags as $row)
                                    <option value="{{ $row->id }}">{{ $row->tags }}</option>
                                @endforeach
                            </select>
                        </div>
                  </div>


                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Sub Tags</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>


     </div>

 </section>

@endsection
