<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('medical_logbook')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Medical Logbook</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Medical Logbook</h5>
              <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value=" <?php echo e($med->name); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Medicine<span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="medicine" value=" <?php echo e($med->medicine); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Qty <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="qty" value=" <?php echo e($med->qty); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" <?php echo e($med->created_at); ?>" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/view_medical_logbook.blade.php ENDPATH**/ ?>