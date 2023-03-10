<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('clinic_visits')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Clinic Visits</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Clinic Visits</h5>
                <form class="forms-sample" action="<?php echo e(route('update.clinic',$clinic->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?php echo e($clinic->name); ?>">
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleTextarea1">Notes <span class="">*</span></label>
                        <textarea class="form-control" name="notes" id="summernote">
                            <?php echo e($clinic->notes); ?>

                        </textarea>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Clinic Visits</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/edit_clinic_visits.blade.php ENDPATH**/ ?>