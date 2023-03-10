<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('unsafe')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Unsafe Act & Condition</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Unsafe Act & Condition</h5>
                <form class="forms-sample" action="<?php echo e(route('update.unsafe',$unsafe->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Unsafe Act <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="unsafe_act" value="<?php echo e($unsafe->unsafe_act); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Unsafe Condition <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="unsafe_condition" value="<?php echo e($unsafe->unsafe_condition); ?>" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Unsafe</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/edit_unsafe_act_condition.blade.php ENDPATH**/ ?>