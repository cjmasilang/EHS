<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('ptw_register')); ?>">Back</a></li>
          <li class="breadcrumb-item">View PTW Register</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">
              <?php echo csrf_field(); ?>

                <img alt="image" src="<?php echo e(asset('backend/assets/img/ptw.png')); ?>"/>
                <br>
                Enviromental, Safety and Health
                <center>
                    <h5>Valley Bread Inc. PTW Register</h5>
                </center>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="ptw_no">PTW No <span class="">*</span></label>
                        <input type="text" class="form-control" id="ptw_no" name="ptw_no" value=" <?php echo e($ptw->ptw_no); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="activity">Activity <span class="">*</span></label>
                        <input type="text" class="form-control" id="activity" name="activity" value=" <?php echo e($ptw->activity); ?>" disabled>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="work_location">Work Location <span class="">*</span></label>
                        <input type="text" class="form-control" id="work_location" name="work_location" value=" <?php echo e($ptw->work_location); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ptw_holder">PTW Holder <span class="">*</span></label>
                        <input type="text" class="form-control" id="ptw_holder" name="ptw_holder" value=" <?php echo e($ptw->ptw_holder); ?>" disabled>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="date_of_approved">Date of Approved <span class="">*</span></label>
                        <input type="text" class="form-control" id="date_of_approved" name="date_of_approved" value=" <?php echo e($ptw->date_of_approved); ?>" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date_of_expiry">Date of Expiry <span class="">*</span></label>
                        <input type="text" class="form-control" id="date_of_expiry" name="date_of_expiry" value=" <?php echo e($ptw->date_of_expiry); ?>" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="date_closed">Date Closed <span class="">*</span></label>
                        <input type="text" class="form-control" id="date_closed" name="date_closed" value=" <?php echo e($ptw->date_closed); ?>" disabled>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col align-self-start">
                            <h6>Completed By: </h6>
                            <div class="form-group row">
                                <label for="job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="job_position" name="job_position" value=" <?php echo e($ptw->job_position); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name Surname:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value=" <?php echo e($ptw->name); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="signature" class="col-sm-4 col-form-label">Signature:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="signature" name="signature" value=" <?php echo e($ptw->signature); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-sm-4 col-form-label">Date:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="date" name="date" value=" <?php echo e($ptw->date); ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col align-self-center">
                            <h6>Approved By: </h6>
                            <div class="form-group row">
                                <label for="approved_job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_job_position" name="approved_job_position" value=" <?php echo e($ptw->approved_job_position); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="approved_name" class="col-sm-4 col-form-label">Name Surname:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_name" name="approved_name" value=" <?php echo e($ptw->approved_name); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="approved_signature" class="col-sm-4 col-form-label">Signature:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_signature" name="approved_signature" value=" <?php echo e($ptw->approved_signature); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="approved_date" class="col-sm-4 col-form-label">Date:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="approved_date" name="approved_date" value=" <?php echo e($ptw->approved_date); ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col align-self-start">
                            <h6>Distribution List: </h6>
                            <div class="form-group row">
                                <label for="distributed_job_position" class="col-sm-4 col-form-label">Job Position:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="distributed_job_position" name="distributed_job_position" value=" <?php echo e($ptw->distributed_job_position); ?>" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="distributed_name" class="col-sm-4 col-form-label">Name Surname:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="distributed_name" name="distributed_name" value=" <?php echo e($ptw->distributed_name); ?>" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/view_ptw_register.blade.php ENDPATH**/ ?>