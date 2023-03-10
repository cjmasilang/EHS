    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="section">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('department')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Department</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Department</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.dept')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-6">
                            <h6><label for="name">* </span>Department</label></h6>
                                <input type="department" class="form-control" name="department" placeholder="Enter Department" required>
                                    <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-6">
                            <h6><label for="name">* </span>All Department</label></h6>
                                <label>* </span>1</label>
                                <br>
                                <label>* </span>2</label>
                                <br>
                                <label>* </span>3</label>
                                <br>
                                <label>* </span>4</label>
                                <br>
                                <label>* </span>5</label>
                                <br>
                                <label>* </span>6</label>
                        </div>
                    </div>


                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Department</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/admin/add_department.blade.php ENDPATH**/ ?>