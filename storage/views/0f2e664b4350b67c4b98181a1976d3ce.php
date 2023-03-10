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
                <li class="breadcrumb-item"><a href="<?php echo e(route('workplace_inspection_checklist')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Workplace Checklist</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                <img alt="image" src="<?php echo e(asset('backend/assets/img/ptw.png')); ?>"/>
                <br>
                Enviromental, Safety and Health
                <center>
                    <h5>Workplace Inspection Checklist</h5>
                </center>

                    <div class="text-danger highlight">* (Checkbox) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.workplace_inspection_checklist')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <table class="table table-bordered">

                        <br>
                        <?php $__currentLoopData = $monitoring_checklist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monitoring): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-dark text-white">
                            <td>Category <?php echo e($monitoring->category); ?></td>
                            <td width=30>Yes</td>
                            <td width=30>No</td>
                            <td width=30>Remarks</td>
                        </tr>

                        <?php

                        ?>

                        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->category==$monitoring->category): ?>

                        <tr>
                            <input type="hidden" name="id[<?=$row->id?>]" value="<?=$row->id?>">

                            <td> <?php echo e($row->checklist_name); ?> </td>
                            <td>
                                <input type="checkbox" name="yes" <?php echo e($row->id==true ? '': ''); ?>/>
                            </td>

                            <td>
                                <input type="checkbox" name="no" <?php echo e($row->id==false ? '': ''); ?>/>
                            </td>

                            <td>
                                <textarea class="form-control" name="remarks" id="remarks"></textarea>
                            </td>

                        </tr>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>

                    <br>
                    <div class="row">
                        <div class='col-6'>
                            <div class='row '>
                                <div class='col-2'>
                                    <label class='pt-2'>Name:</label>
                                </div>

                                <div class='col-6 mb-2'>
                                    <input type="text" name="name" class='form-control' placeholder="Enter Name">
                                </div>
                            </div>
                        </div

                        <div class="row mb-3">
                            <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Checklist</button></div>
                        </div>
                    </div>

                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/add_workplace_inspection_checklist.blade.php ENDPATH**/ ?>