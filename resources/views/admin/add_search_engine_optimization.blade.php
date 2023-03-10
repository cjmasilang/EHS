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
                <li class="breadcrumb-item"><a href="{{ route('search_engine_optimization')}}">Back</a></li>
                <li class="breadcrumb-item active">Add SEO</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add SEO</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.seo') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-success">
                                    <h6><label for="author">* </span>Author</label></h6>
                                    <input type="text" class="form-control" name="author" placeholder="Enter Author" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-info">
                                    <h6><label for="title">* </span>Title</label></h6>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-success">
                                    <h6><label for="keyword">* </span>Keyword</label></h6>
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-info">
                                    <h6><label for="description">* </span>Description</label></h6>
                                    <input type="text" class="form-control" name="description" placeholder="Enter Google Analytics" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-success">
                                    <h6><label for="google_analytics">* </span>Google Analytics</label></h6>
                                    <input type="text" class="form-control" name="google_analytics" placeholder="Enter Google Verification" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-info">
                                    <h6><label for="google_verification">* </span>Google Verification</label></h6>
                                    <input type="text" class="form-control" name="google_verification" placeholder="Enter Alexa Analytics" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check form-check-info">
                                <h6><label for="alexa_analytics">* </span>Alexa Analytics</label></h6>
                                <input type="text" class="form-control" name="alexa_analytics" placeholder="Enter Alexa Analytics" required>
                            </div>
                        </div>
                    </div>


                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add SEO</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

@endsection
