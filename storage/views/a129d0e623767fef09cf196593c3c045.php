<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('audit_form')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Audit Form</li>
       </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">

              <?php echo csrf_field(); ?>

              <img alt="image" src="<?php echo e(asset('backend/assets/img/ptw.png')); ?>"/>
              <br>
              Enviromental, Safety and Health
              <center>
                  <h5>7s Audit Form</h5>
              </center>

              <table class="table table-bordered">
                <div class="form-group col-6 pull-right">
                    <label for="audit_date">Audit Date <span class="">*</span></label>
                    <input type="text" class="form-control" id="audit_date" name="audit_date" value=" <?php echo e($workplace_audit->audit_date); ?>" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="name">Auditor Name <span class="">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value=" <?php echo e($workplace_audit->name); ?>" disabled>
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
                            <input id="hidden" type="hidden" name="id[<?=$row->id?>]" value="<?php if(!empty($row->id)): ?> 1 <?php else: ?> 0 <?php endif; ?>">


                            <td><?=$row->item_name?></td>
                            <td>
                                <input type="checkbox" disabled='disabled' name="yes" <?php echo e($row->id==true ? 'checked': ''); ?>/>
                            </td>

                            <td>
                                <input type="checkbox" disabled='disabled' name="no" <?php echo e($row->id==false ? 'unchecked': ''); ?>/>
                            </td>

                        </tr>
                        </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>


            </form>

          </div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/view_audit_form.blade.php ENDPATH**/ ?>