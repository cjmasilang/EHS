<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('first_aid_trainings')); ?>">Back</a></li>
          <li class="breadcrumb-item">View First Aid Training</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View First Aid Training</h5>
              <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value=" <?php echo e($first_aid->title); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Venue <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="venue" value=" <?php echo e($first_aid->venue); ?>" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name of Participants <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name "value="<?php echo e(strip_tags( $first_aid->name )); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="created_at" value=" <?php echo e($first_aid->created_at); ?>" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/view_first_aid_training.blade.php ENDPATH**/ ?>