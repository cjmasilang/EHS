<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('unsafe')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Unsafe Act & Condition</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Unsafe Act & Condition</h5>
              <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Unsafe Act <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="unsafe_act" value=" <?php echo e($unsafe->unsafe_act); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Unsafe Condition <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="unsafe_condition" value=" <?php echo e($unsafe->unsafe_condition); ?>" disabled>
                    </div>
                </div>

            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/view_unsafe_act_condition.blade.php ENDPATH**/ ?>