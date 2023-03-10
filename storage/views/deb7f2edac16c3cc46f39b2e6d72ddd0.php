<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('schedule_updates')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Schedule</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Schedule</h5>
                <form class="forms-sample" action="<?php echo e(route('update.schedule',$schedule->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Time <span class="">*</span></label>
                            <input type="time" class="form-control" id="exampleInputName1" name="time" value="<?php echo e($schedule->time); ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Date <span class="">*</span></label>
                            <input type="date" class="form-control" id="exampleInputName1" name="date" value="<?php echo e($schedule->date); ?>">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Venue <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="venue" value="<?php echo e($schedule->venue); ?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleTextarea1">Name <span class="">*</span></label>
                            <textarea class="form-control" name="name" id="summernote">
                                <?php echo e($schedule->name); ?>

                            </textarea>
                        </div>
                    </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Schedule</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/edit_schedule.blade.php ENDPATH**/ ?>