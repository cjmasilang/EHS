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

                    <h5 class="card-title">Add News</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.news') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputName1">Title <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Category <span class="">*</span></label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option disabled="" selected="">Select Category</option>
                                        @foreach($category as $row)
                                    <option value="{{ $row->id }}">{{ $row->category  }} </option>
                                @endforeach
                            </select>
                        </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Sub Category <span class="">*</span></label>
                            <select class="form-control" name="subcategory_id" id="subcategory_id">
                            <option disabled="" selected="">Select Sub Category</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Tags <span class="">*</span></label>
                            <select class="form-control" id="tags_id" name="tags_id">
                                <option disabled="" selected="">Select Tags</option>
                                    @foreach($tags as $row)
                                <option value="{{ $row->id }}">{{ $row->tags  }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                            <label for="exampleInputName1">Sub Tags <span class="">*</span></label>
                                <select class="form-control" id="subtags_id" name="subtags_id">
                                <option disabled="" selected="">Select Sub Tags</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">News Image Upload <span class="">*</span> </label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Tags <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="tags">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Details <span class="">*</span></label>
                        <textarea class="form-control" name="details" id="summernote"></textarea>
                    </div>

                    <hr>
                    <h4 class="text-center">Extra Opions <span class="">*</span> </h4>
                    <br>

                    <div class="row">
                        <label class="form-check-label col-md-3">
                        <input type="checkbox" name="headline" class="form-check-input" value="1"> Headline <span class="">*</span> <i class="input-helper"></i></label>

                        <label class="form-check-label col-md-3">
                        <input type="checkbox" name="bigthumbnail" class="form-check-input" value="1"> General Thumbnail <span class="">*</span><i class="input-helper"></i></label>

                        <label class="form-check-label col-md-3">
                        <input type="checkbox" name="first_section" class="form-check-input" value="1"> Popular News <span class="">*</span><i class="input-helper"></i></label>

                        <label class="form-check-label col-md-3">
                        <input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1"> First Section Thumbnail <span class="">*</span><i class="input-helper"></i></label>
                    </div>
                <br>
                <br>

                            <button type="submit" class="btn btn-success mr-2">Add News</button>
                            </form>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function() {
                      $('.summernote').summernote();
                    });
                </script>

                <!-- This is for Category  -->
                <script type="text/javascript">
                    $(document).ready(function() {
                          $('select[name="category_id"]').on('change', function(){
                              var category_id = $(this).val();
                              if(category_id) {
                                  $.ajax({
                                      url: "{{  url('/get/subcategory/') }}/"+category_id,
                                      type:"GET",
                                      dataType:"json",
                                      success:function(data) {
                                         $("#subcategory_id").empty();
                                           $.each(data,function(key,value){
                                               $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcategory+'</option>');
                                               });

                                      },

                                  });
                              } else {
                                  alert('danger');
                              }
                          });
                      });
                 </script>


                <!-- This is for Tags  -->
                <script type="text/javascript">
                    $(document).ready(function() {
                          $('select[name="tags_id"]').on('change', function(){
                              var tags_id = $(this).val();
                              if(tags_id) {
                                  $.ajax({
                                      url: "{{  url('/get/subtags/') }}/"+tags_id,
                                      type:"GET",
                                      dataType:"json",
                                      success:function(data) {
                                         $("#subtags_id").empty();
                                           $.each(data,function(key,value){
                                               $("#subtags_id").append('<option value="'+value.id+'">'+value.subtags+'</option>');
                                               });

                                      },

                                  });
                              } else {
                                  alert('danger');
                              }
                          });
                      });
                 </script>
   </section>
</main>


@endsection

