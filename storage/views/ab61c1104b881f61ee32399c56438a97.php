<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('accident_classification')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Accident Classification</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Accident Classification</h5>
                <form class="forms-sample" action="<?php echo e(route('update.accident',$accident->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="first_aid">First Aid <span class="">*</span></label>
                        <input type="text" class="form-control" id="first_aid" name="first_aid" value="<?php echo e($accident->first_aid); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="medical_case">Medical Case <span class="">*</span></label>
                        <input type="text" class="form-control" id="medical_case" name="medical_case" value="<?php echo e($accident->medical_case); ?>" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="fatality">Fatality <span class="">*</span></label>
                        <input type="text" class="form-control" id="fatality" name="fatality" value="<?php echo e($accident->fatality); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="near_miss">Near Miss <span class="">*</span></label>
                        <input type="text" class="form-control" id="near_miss" name="near_miss" value="<?php echo e($accident->near_miss); ?>" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Accident Classification</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/edit_accident_classification.blade.php ENDPATH**/ ?>