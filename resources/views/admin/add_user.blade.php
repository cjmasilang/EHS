@extends('admin.adminHome')

    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }

        .form-group{
              font-weight: tahoma;
        }

    </style>

@section('content')

<section class="section">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user_management')}}">Back</a></li>
                <li class="breadcrumb-item active">Add Users</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add User</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="{{ route('store.user') }}">
                    @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-success">
                                        <h6><label for="name">* </span>Employee Name</label></h6>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Employee Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-info">
                                        <h6><label for="name">* </span>Employee Email</label></h6>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Employee Email" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <h6><label for="name">* </span>Password</label></h6>
                            <input type="password" class="form-control" name="password" placeholder="Enter Employee Password" required>
                        </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-check form-check-success">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="calendar" value="1" > Calendar <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="category" value="1" > Category <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="department" value="1" > Department <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="tags" value="1" > Tags <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="settings" value="1"> Settings <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="gallery" value="1"> Gallery <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="role" value="1" > Role <i class="input-helper"></i></label>
                                </div>

                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="news" value="1" > News <i class="input-helper"></i></label>
                                </div>


                            </div>
                        </div>
                    </div>

                  <br>

                  <button type="submit" class="btn btn-primary mr-2">Add User</button>
                 </form>
              </div>
           </div>
        </div>


     </div>
 </section>

@endsection
