    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

<?php $__env->startSection('safety-content'); ?>

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('shift')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Shift</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Shift</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.shift')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="am_shift">AM Shift <span class="">*</span></label>
                            <input type="number" class="form-control" id="am_shift" name="am_shift" placeholder="Enter AM Shift" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="pm_shift">PM Shift <span class="">*</span></label>
                            <input type="number" class="form-control" id="pm_shift" name="pm_shift" placeholder="Enter PM Shift" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="am_overtime">AM Overtime <span class="">*</span></label>
                            <input type="number" class="form-control" id="am_overtime" name="am_overtime" placeholder="Enter AM Overtime" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="pm_overtime">PM Overtime <span class="">*</span></label>
                            <input type="number" class="form-control" id="pm_overtime" name="pm_overtime" placeholder="Enter PM Overtime" required>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Shift</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/add_shift.blade.php ENDPATH**/ ?>