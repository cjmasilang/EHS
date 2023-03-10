<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('vital_monitoring')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Vital Monitoring</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Vital Monitoring</h5>
              <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value0=" <?php echo e($vital_signs->name); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Blood Pressure<span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="bp" value=" <?php echo e($vital_signs->bp); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Pulse Rate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="pr" value=" <?php echo e($vital_signs->pr); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Temperature <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="t" value=" <?php echo e($vital_signs->t); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Oxygen Saturation <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="o" value=" <?php echo e($vital_signs->o); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Respiratory Rate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="rr" value=" <?php echo e($vital_signs->rr); ?>" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/view_vital_monitoring.blade.php ENDPATH**/ ?>