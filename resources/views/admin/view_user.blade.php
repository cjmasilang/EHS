@extends('admin.adminHome')


@section('content')
    <style>
        .checkbox{
            font: bold;
        }
    </style>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user_management') }}">Back</a></li>
          <li class="breadcrumb-item">View User</li>
       </ol>
    </nav>
</div>


<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View User</h5>
              @csrf

              <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control" name="name" disabled = "disabled" value="{{ $user->name }}">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" disabled = "disabled" value="{{ $user->email }}">
              </div>

              <br>

              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">


                        <div class="form-check form-check-success">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="calendar" disabled = "disabled" value="1" @if($user->calendar == 1) checked="" @endif> Calendar <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-info">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="category" disabled = "disabled" value="1" @if($user->category == 1) checked="" @endif> Category <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-info">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="department" disabled = "disabled" value="1" @if($user->department == 1) checked="" @endif> Department <i class="input-helper"></i></label>
                        </div>

                        <div class="form-check form-check-danger">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="tags" disabled = "disabled" value="1" @if($user->tags == 1) checked="" @endif> Tags <i class="input-helper"></i></label>
                        </div>

                        </div>
                    </div>

                  <div class="col-md-6">
                      <div class="form-group">
                            <div class="form-check form-check-danger">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="news" disabled = "disabled" value="1" @if($user->news == 1) checked="" @endif> News <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-info">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="settings" disabled = "disabled" value="1" @if($user->settings == 1) checked="" @endif> Settings <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-info">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="gallery" disabled = "disabled" value="1" @if($user->gallery == 1) checked="" @endif> Gallery <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-danger">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="roles" disabled = "disabled" value="1" @if($user->roles == 1) checked="" @endif> Role <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

          </div>
       </div>
    </div>
</div>
@endsection
