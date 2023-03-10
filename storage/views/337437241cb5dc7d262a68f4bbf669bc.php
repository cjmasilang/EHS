<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('monitoring_checklist')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Monitoring Checklist</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <form class="forms-sample" action="<?php echo e(route('update.monitoring_checklist',$monitoring_checklist->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                 <img alt="image" src="<?php echo e(asset('backend/assets/img/ptw.png')); ?>"/>
                 <br>
                 Enviromental, Safety and Health
                 <center>
                     <h5>Monitoring Checklist</h5>
                 </center>

                 <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="checklist_name">Checklist Name <span class="">*</span></label>
                        <input type="text" class="form-control" id="checklist_name" name="checklist_name" value="<?php echo e($monitoring_checklist->checklist_name); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="category">Category <span class="">*</span></label>
                        <input type="text" class="form-control" id="category" name="category" value="<?php echo e($monitoring_checklist->category); ?>" required>
                    </div>
                </div>

               <br>

               <button type="submit" class="btn btn-success mr-2">Update Monitoring Checklist</button>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/edit_monitoring_checklist.blade.php ENDPATH**/ ?>