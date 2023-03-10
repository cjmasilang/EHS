@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('categories') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Category</li>
       </ol>
    </nav>
</div>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Category</h5>
                <form class="forms-sample" method="POST" action="{{ route('update.category',$category->id) }}">
                 @csrf

                    <div class="form-group col-6">
                        <label for="category">* </span>Category</label>
                            <input type="category" class="form-control" name="category" value="{{ $category->category }}">
                                @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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

