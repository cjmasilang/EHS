@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('subcategories') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Sub Category</li>
       </ol>
    </nav>
</div>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Sub Category</h5>
                <form class="forms-sample" method="POST" action="{{ route('update.subcategory',$sub_cat->id) }}">
                 @csrf

                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleInputUsername1">SubCategory</label>
                            <input type="text" class="form-control" name="subcategory"  value="{{ $sub_cat->subcategory }}">
                                @error('sub_cat')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleFormControlSelect2">Select Category</label>
                            <select class="form-control" name="category_id" id="exampleFormControlSelect2">
                                <option disabled="" selected="">Select Category</option>
                                @foreach($category as $row)

                            <option value="{{ $row->id }}"
                                <?php if($row->id == $sub_cat->category_id) echo "selected"; ?>
                                >{{ $row->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                   <div class="row mb-3">
                      <div class="col-sm-10"> <button type="submit" class="btn btn-success">Update Category</button></div>
                   </div>
                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

