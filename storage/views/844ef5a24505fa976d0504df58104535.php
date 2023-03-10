<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('first_aid_trainings')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit First Aid Training</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit First Aid</h5>
                <form class="forms-sample" action="<?php echo e(route('update.first_aid',$first_aid->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                 <div class="row">
                     <div class="form-group col-md-12">
                         <label for="exampleInputName1">title <span class="">*</span></label>
                         <input type="text" class="form-control" id="exampleInputName1" name="title" value="<?php echo e($first_aid->title); ?>">
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group col-md-12">
                         <label for="exampleInputName1">Venue <span class="">*</span></label>
                         <input type="text" class="form-control" id="exampleInputName1" name="venue" value="<?php echo e($first_aid->venue); ?>">
                     </div>
                 </div>


                 <div class="form-group">
                     <label for="exampleTextarea1">Name <span class="">*</span></label>
                     <textarea class="form-control" name="name" id="summernote">
                         <?php echo e($first_aid->name); ?>

                     </textarea>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update First Aid</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/edit_first_aid_training.blade.php ENDPATH**/ ?>