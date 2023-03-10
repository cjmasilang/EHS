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
                <li class="breadcrumb-item"><a href="{{ route('subcategories')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Sub Category</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Sub Category</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.subcategory') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="inputText" class="col-sm-2 col-form-label">Category <span class="">*</span></label>
                                <input type="text" class="form-control" name="subcategory"  placeholder="Enter Sub Category" required>
                                    @error('subcategory')
                                <span class="text-danger">{{ $message }}</span>

                            @enderror
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleFormControlSelect2">Select Category <span class="">*</span></label>
                                <select class="form-control" name="category_id" id="exampleFormControlSelect2">
                                    <option disabled="" selected="">Select Category</option>
                                    @foreach($category as $row)
                                <option value="{{ $row->id }}">{{ $row->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Category</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
