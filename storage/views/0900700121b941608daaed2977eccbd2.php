    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

<?php $__env->startSection('safety-content'); ?>

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('audit_form_checklist')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Audit Form Checklist</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.audit_form_checklist')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <img alt="image" src="<?php echo e(asset('backend/assets/img/ptw.png')); ?>"/>
                    <br>
                    Enviromental, Safety and Health
                    <center>
                        <h5>7s Audit Form</h5>
                    </center>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="item_name">Item Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Enter Item Name" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="category">Category <span class="">*</span></label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Audit Form</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/add_audit_form_checklist.blade.php ENDPATH**/ ?>