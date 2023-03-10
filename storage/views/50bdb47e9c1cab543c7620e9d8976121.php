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
                <li class="breadcrumb-item"><a href="<?php echo e(route('audit_form')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Audit Form</li>
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
                    <h5>7s Audit Form</h5>
                </center>

                    <div class="text-danger highlight">* (Checkbox) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.audit_form')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <table class="table table-bordered">
                        <div class="form-group col-6 pull-right">
                            <label for="audit_date">Audit Date <span class="">*</span></label>
                            <input type="date" class="form-control" id="audit_date" name="audit_date" placeholder="Enter Auditor Date" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="name">Auditor Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                        </div>


                        <br>

                        <?php $__currentLoopData = $audit_checklist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-dark text-white">
                            <td>Category <?php echo e($audit->category); ?></td>
                            <td width=30>Compliant</td>
                            <td width=30>Not Compliant</td>
                        </tr>

                        <?php

                        ?>

                            <?php $__currentLoopData = $content_audit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->category==$audit->category): ?>
                                <tr>
                                    <input type="hidden" name="id[<?=$row->id?>]" value="<?=$row->id?>">

                                    <td> <?php echo e($row->item_name); ?> </td>
                                    <td>
                                        <input type="checkbox" name="compliant" <?php echo e($row->id==true ? '': ''); ?>/>
                                    </td>

                                    <td>
                                        <input type="checkbox" name="not_compliant" <?php echo e($row->id==false ? '': ''); ?>/>
                                    </td>

                                </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                    <br>

                        <center>
                            <div class="col-sm-12"> <button type="submit" class="btn btn-success pull-right">Submit Audit Form</button></div>
                        </center>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/add_audit_form.blade.php ENDPATH**/ ?>