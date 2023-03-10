<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('monthly_fire_extinguisher_inspection')); ?>">Back</a></li>
          <li class="breadcrumb-item">Edit Monthly Inspection</li>
       </ol>
    </nav>
</div>


<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="section">

    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <form class="forms-sample" action="<?php echo e(route('update.fire_extinguisher',$inspection->id )); ?>" method="post" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>

                 <img alt="image" src="<?php echo e(asset('backend/assets/img/ptw.png')); ?>"/>

                 <center>
                     <h5>Monthly Fire Extinguisher Inspection <br>
                         (Qualitative)</h5>
                 </center>


                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">Location <span class="">*</span></label>
                        <input type="text" class="form-control" id="location" name="location" value="<?php echo e($inspection->location); ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="type">Type <span class="">*</span></label>
                        <input type="text" class="form-control" id="type" name="type" value="<?php echo e($inspection->type); ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="gauge">Gauge <span class="">*</span></label>
                        <input type="text" class="form-control" id="gauge" name="gauge" value="<?php echo e($inspection->gauge); ?>" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hose">Hose <span class="">*</span></label>
                        <input type="text" class="form-control" id="hose" name="hose" value="<?php echo e($inspection->hose); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cylinder">Cylinder <span class="">*</span></label>
                        <input type="text" class="form-control" id="cylinder" name="cylinder" value="<?php echo e($inspection->cylinder); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pin">Pin <span class="">*</span></label>
                        <input type="text" class="form-control" id="pin" name="pin" value="<?php echo e($inspection->pin); ?>" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="bracket">Bracket <span class="">*</span></label>
                        <input type="text" class="form-control" id="bracket" name="bracket" value="<?php echo e($inspection->bracket); ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date_of_inspection">Date of Inspection <span class="">*</span></label>
                        <input type="date" class="form-control" id="date_of_inspection" name="date_of_inspection" value="<?php echo e($inspection->date_of_inspection); ?>" required>
                    </div>
                </div>

               <br>

                <div class="col align-self-start">
                    <div class="form-group row">
                        <label for="knowledge_by" class="col-sm-4 col-form-label">Knowledge By:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="knowledge_by" name="knowledge_by" value="<?php echo e($inspection->knowledge_by); ?>" required>
                        </div>
                    </div>
                </div>

                <br>

                <center>
                    <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Edit Fire Inspection</button></div>
                 </center>

                </form>
             </div>
          </div>
       </div>


    </div>
 </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/edit_fire_extinguisher_inspection.blade.php ENDPATH**/ ?>