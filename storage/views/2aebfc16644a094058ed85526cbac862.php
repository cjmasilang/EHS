<?php $__env->startSection('safety-content'); ?>

<div class="pagetitle">
    <nav>
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('workplace_inspection_checklist')); ?>">Back</a></li>
          <li class="breadcrumb-item">View Workplace Inspection Checklist</li>
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
                  <h5>Workplace Inspection Checklist</h5>
              </center>

              <table class="table table-bordered">

                <br>
                <?php $__currentLoopData = $monitoring_checklist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monitoring): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-dark text-white">
                    <td>Category (<?php echo e($monitoring->category); ?>)</td>
                    <td width=30>Yes</td>
                    <td width=30>No</td>
                    <td width=40>Remarks</td>
                </tr>

                <?php

                ?>

                <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($row->category==$monitoring->category): ?>
                <tr>
                    <input id="hidden" type="hidden" name="id[<?=$row->id?>]" value="<?php if(!empty($row->id)): ?> 1 <?php else: ?> 0 <?php endif; ?>">


                    <td><?=$row->checklist_name?></td>
                    <td>
                        <input type="checkbox" disabled='disabled' name="yes" value="0" <?php echo e($row->id==true ? 'checked': ''); ?>/>
                    </td>

                    <td>
                        <input type="checkbox" disabled='disabled' name="no" value="1" <?php echo e($row->id==false ? 'checked': ''); ?>/>
                    </td>

                    <td>
                        <input type="text" class="form-control" id="remarks" name="remarks" value=" <?php echo e($workplace->remarks); ?>" disabled>
                    </td>
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


<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/view_workplace_inspection_checklist.blade.php ENDPATH**/ ?>