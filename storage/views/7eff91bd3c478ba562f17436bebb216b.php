    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

<?php $__env->startSection('health-content'); ?>

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('medical_logbook')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Medicine Logbook</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Medicine Logbook</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.medical')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Medicine <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="medicine" placeholder="Enter Medicine" required>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="exampleInputName1">Qty <span class="">*</span></label>
                        <input type="number" class="form-control" id="exampleInputName1" name="qty" placeholder="Enter Qty" required>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Medical Logbook</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/add_medical_logbook.blade.php ENDPATH**/ ?>