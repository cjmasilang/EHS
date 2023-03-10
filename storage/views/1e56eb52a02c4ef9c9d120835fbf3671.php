<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('health_events')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Health Events</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

             <h5 class="card-title">View Health Events</h5>
              <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="<?php echo e(strip_tags( $events->title )); ?>" disabled>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Event Month <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="event_month" value=" <?php echo e($events->event_month); ?>" disabled>
                    </div>
                </div>


            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/view_health_events.blade.php ENDPATH**/ ?>