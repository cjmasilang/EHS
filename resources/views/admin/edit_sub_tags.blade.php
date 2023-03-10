@extends('admin.adminHome')



@section('content')

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('subtags') }}">Back</a></li>
          <li class="breadcrumb-item">Edit Sub Tags</li>
       </ol>
    </nav>
</div>


<section class="section">

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                 <h5 class="card-title">Edit Tags</h5>
                 <form class="forms-sample" method="POST" action="{{ route('update.subtags',$subtags->id) }}">
                  @csrf


                    <div class="form-group col-6">
                        <label for="exampleInputUsername1">Sub Tags</label>
                        <input type="text" class="form-control" name="subtags"  value="{{ $subtags->sub_tags }}">

                        @error('subtags')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleFormControlSelect2">Select Tags</label>
                        <select class="form-control" name="tags_id" id="exampleFormControlSelect2">

                        <option disabled="" selected="">--Select Tags</option>
                            @foreach($tags as $row)
                                <option value="{{ $row->id }}"
                                <?php if($row->id == $subtags->tags_id) echo "selected"; ?>
                            >{{ $row->tags }} </option>
                            @endforeach
                        </select>
                    </div>

                  <br>

                        <button type="submit" class="btn btn-success mr-2">Update Sub Tags</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 </section>





@endsection

