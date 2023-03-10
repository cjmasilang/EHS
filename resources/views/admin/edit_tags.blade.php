@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('tags') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Tags</li>
       </ol>
    </nav>
</div>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Department</h5>
                <form class="forms-sample" method="POST" action="{{ route('update.tags',$tags->id) }}">
                 @csrf

                    <div class="form-group col-6">
                        <label for="tags">* </span>Department</label>
                            <input type="tags" class="form-control" name="tags" value="{{ $tags->tags }}">
                                @error('tags')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                   <div class="row mb-3">
                      <div class="col-sm-10"> <button type="submit" class="btn btn-success">Update Tags</button></div>
                   </div>
                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

