<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('shift')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Shift</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Shift</h5>
                <form class="forms-sample" action="<?php echo e(route('update.shift',$shift->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">AM Shift <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="am_shift" value="<?php echo e($shift->am_shift); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">PM Shift <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="pm_shift" value="<?php echo e($shift->pm_shift); ?>" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">AM Overtime <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="am_overtime" value="<?php echo e($shift->am_overtime); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">PM Overtime <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="pm_overtime" value="<?php echo e($shift->pm_overtime); ?>" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Shift</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/edit_shift.blade.php ENDPATH**/ ?>