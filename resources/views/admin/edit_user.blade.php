@extends('admin.adminHome')


@section('content')

<style>
    .card-title{
        font-weight: tahoma;
        color: black;
    }
</style>

@include('admin.includes.alert')

<main id="main" class="main">
    <div class="pagetitle">
       <nav>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="{{ route('user_management') }}">Back</a></li>
             <li class="breadcrumb-item">Edit User</li>
          </ol>
       </nav>
    </div>

    <section class="section">

       <div class="row">
          <div class="col-lg-12">
             <div class="card">
                <div class="card-body">

                   <h5 class="card-title">Edit User</h5>
                   <form class="forms-sample" method="POST" action="{{ route('update.user',$user->id ) }}">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                            <div class="form-check form-check-success">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="calendar" value="1" @if($user->calendar == 1) checked="" @endif> Calendar <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-info">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="category" value="1" @if($user->category == 1) checked="" @endif> Category <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-info">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="department" value="1" @if($user->department == 1) checked="" @endif> Department <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check form-check-danger">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="tags" value="1" @if($user->tags == 1) checked="" @endif> Tags <i class="input-helper"></i></label>
                            </div>



                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="news" value="1" @if($user->news == 1) checked="" @endif> News <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="settings" value="1" @if($user->settings == 1) checked="" @endif> Settings <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="gallery" value="1" @if($user->gallery == 1) checked="" @endif> Gallery <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="roles" value="1" @if($user->roles == 1) checked="" @endif> Role <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary mr-2">Edit User</button>
                   </form>
                </div>
             </div>
          </div>


       </div>
    </section>
 </main>


@endsection

