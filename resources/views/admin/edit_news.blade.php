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
                <li class="breadcrumb-item"><a href="{{ route('news_management')}}">Back</a></li>
                <li class="breadcrumb-item active">Add News</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                 <h5 class="card-title">Edit News</h5>
                 <form class="forms-sample" method="POST" action="{{ route('update.news',$news->id) }}">
                  @csrf

                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">Title <span class="">*</span></label>
                          <input type="text" class="form-control" id="exampleInputName1" name=" title" value="{{ $news->title }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="form-group col-md-6">
                              <label for="exampleInputName1">Category  <span class="">*</span></label>
                              <select class="form-control" id="exampleSelectGender" name="category_id">
                                  <option disabled="" selected="">Select Category</option>
                                  @foreach($category as $row)
                                  <option value="{{ $row->id }}"
                                  <?php if ($row->id == $news->category_id) {
                                  echo "selected"; } ?> >{{ $row->category  }}
                                  </option>
                              @endforeach
                          </select>
                      </div>

                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">Sub Category <span class="">*</span></label>
                          <select class="form-control" name="subcategory_id" id="subcategory_id">
                                  <option disabled="" selected="">Select Sub Category</option>
                                  @foreach($sub as $row)
                                  <option value="{{ $row->id }}"
                                  <?php if ($row->id == $news->subcategory_id) {
                                  echo "selected"; } ?> >{{ $row->subcategory  }} </option>
                              @endforeach
                          </select>
                      </div>
                  </div>

                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">Tags <span class="">*</span></label>
                              <select class="form-control" id="exampleSelectGender" name="tags_id">
                              <option disabled="" selected="">Select Tags</option>
                              @foreach($tags as $row)
                              <option value="{{ $row->id }}"
                              <?php if ($row->id == $news->tags_id) {
                              echo "selected"; } ?> >{{ $row->tags  }}
                          </option>
                          @endforeach
                      </select>
                  </div>

                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">Sub Tags <span class="">*</span></label>
                              <select class="form-control" id="subtags_id" name="subtags_id">
                              <option disabled="" selected="">Select Sub Tags</option>
                              @foreach($subtags as $row)
                              <option value="{{ $row->id }}"
                              <?php if ($row->id == $news->subtags_id) {
                              echo "selected"; } ?> >{{ $row->subtags  }} </option>
                              @endforeach
                          </select>
                      </div>
                  </div>

                  <br>
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">News Image Upload <span class="">*</span></label>
                          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                      </div>

                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">Old Image <span class="">*</span></label>
                              <img src="{{ URL::to($news->image)  }}" style="width: 70px; height: 50px;">
                          <input type="hidden" name="oldimage" value="{{ $news->image }}">
                      </div>
                  </div>

                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="exampleInputName1">Tags <span class="">*</span></label>
                          <input type="text" class="form-control" id="exampleInputName1" name="tags" value="{{ $news->tags }}">
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="exampleTextarea1">Details <span class="">*</span></label>
                      <textarea class="form-control" name="details" id="summernote">
                          {{ $news->details }}
                      </textarea>
                  </div>

                  <hr>
                  <h4 class="text-center">Extra Opions <span class="">*</span> </h4>
                  <br>

                  <div class="row">
                      <label class="form-check-label col-md-3">
                      <input type="checkbox" name="headline" class="form-check-input" value="1" <?php if($news->headline == 1){ echo "checked";
                      } ?> > Headline <i class="input-helper"></i></label>

                      <label class="form-check-label col-md-3">
                      <input type="checkbox" name="bigthumbnail" class="form-check-input" value="1" <?php if($news->bigthumbnail == 1){ echo "checked";
                      } ?> > General Big Thumbnail <i class="input-helper"></i></label>

                      <label class="form-check-label col-md-3">
                      <input type="checkbox" name="first_section" class="form-check-input" value="1"<?php if($news->first_section == 1){ echo "checked";
                      } ?> > Popular News <i class="input-helper"></i></label>

                      <label class="form-check-label col-md-3">
                      <input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1" <?php if($news->first_section_thumbnail == 1){ echo "checked";
                      } ?> > First Section BigThumbnail <i class="input-helper"></i></label>
                  </div>


                  <br>
                  <br>


                                  <button type="submit" class="btn btn-success mr-2">Update News</button>
                              </form>
                          </div>
                      </div>
                  </div>

   </section>
</main>


@endsection

