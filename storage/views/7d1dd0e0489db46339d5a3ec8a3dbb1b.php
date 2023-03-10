<?php $__env->startSection('health-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('vital_monitoring')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Vital Monitoring</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <h5 class="card-title">Edit Vital Monitoring</h5>
                    <form class="forms-sample" action="<?php echo e(route('update.vitalsigns',$vital_signs->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?php echo e($vital_signs->name); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Blood Pressure <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="bp" value="<?php echo e($vital_signs->bp); ?>">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Pulse Rate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="pr" value="<?php echo e($vital_signs->pr); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Temperature <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="t" value="<?php echo e($vital_signs->t); ?>">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Oxygen Saturation <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="o" value="<?php echo e($vital_signs->o); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Respiratory Rate <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="rr" value="<?php echo e($vital_signs->rr); ?>">
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


<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/edit_vital_monitoring.blade.php ENDPATH**/ ?>