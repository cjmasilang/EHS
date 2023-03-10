@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('search_engine_optimization') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Category</li>
       </ol>
    </nav>
</div>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit SEO</h5>
                <form class="forms-sample" method="POST" action="{{ route('update.seo',$seo->id) }}">
                 @csrf

                <div class="row">
                    <div class="form-group col-6">
                        <label for="author">* </span>Author</label>
                            <input type="author" class="form-control" name="author" value="{{ $seo->author }}">
                                @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $seo->title }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="author">* </span>Keyword</label>
                            <input type="keyword" class="form-control" name="keyword" value="{{ $seo->keyword }}">
                                @error('keyword')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleInputUsername1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $seo->description }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="google_analytics">* </span>Google Analytics</label>
                            <input type="google_analytics" class="form-control" name="google_analytics" value="{{ $seo->google_analytics }}">
                                @error('google_analytics')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleInputUsername1">Google Verification</label>
                        <input type="text" class="form-control" name="google_verification" value="{{ $seo->google_verification }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleInputUsername1">Alexa Analytics</label>
                        <input type="text" class="form-control" name="alexa_analytics" value="{{ $seo->alexa_analytics }}">
                    </div>
                </div>

                <br>

                   <div class="row mb-3">
                      <div class="col-sm-10"> <button type="submit" class="btn btn-success">Update SEO</button></div>
                   </div>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





@endsection

