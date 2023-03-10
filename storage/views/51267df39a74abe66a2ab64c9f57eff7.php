<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('masterlist')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Masterlist</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Masterlist</h5>
              <?php echo csrf_field(); ?>

              <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Name <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" value=" <?php echo e($masterlist->name); ?>" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Department<span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="department_id" value=" <?php echo e($masterlist->department_id); ?>" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Position <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="position" value=" <?php echo e($masterlist->position); ?>" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Health Card <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="health_card" value=" <?php echo e($masterlist->health_card); ?>" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="food_handlers_cert" value=" <?php echo e($masterlist->food_handlers_cert); ?>" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputName1">Date <span class="">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" <?php echo e($masterlist->created_at); ?>" disabled>
                </div>
            </div>


            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/view_masterlist.blade.php ENDPATH**/ ?>