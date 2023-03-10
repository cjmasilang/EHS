<?php $__env->startSection('health-content'); ?>


<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('new_hired_employees')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit New Hired Employees</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Medical Logbook</h5>
                <form class="forms-sample" action="<?php echo e(route('update.new_hired',$new_hired->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?php echo e($new_hired->name); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Date of Hired <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="date_of_hired" value="<?php echo e($new_hired->date_of_hired); ?>">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Health Card <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="health_card" value="<?php echo e($new_hired->health_card); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Food Handlers Certificate <span class="">*</span></label>
                        <input type="date" class="form-control" id="exampleInputName1" name="food_handlers_cert" value="<?php echo e($new_hired->food_handlers_cert); ?>">
                    </div>
                </div>


               <br>

               <button type="submit" class="btn btn-success mr-2">Update Medical Logbook</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/edit_new_hired_employees.blade.php ENDPATH**/ ?>