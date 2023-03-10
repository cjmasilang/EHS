<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('shift')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Shift</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Shift</h5>
              <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">AM Shift <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="am_shift" value=" <?php echo e($shift->am_shift); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">PM Shift <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="pm_shift" value=" <?php echo e($shift->pm_shift); ?>" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">AM Overtime <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="am_overtime" value=" <?php echo e($shift->am_overtime); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">PM Overtime <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="pm_overtime" value=" <?php echo e($shift->pm_overtime); ?>" disabled>
                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/view_shift.blade.php ENDPATH**/ ?>