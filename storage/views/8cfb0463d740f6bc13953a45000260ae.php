<style>
    .card-header{
        font-weight: Arial;
        font-size: 30px;
        color: black;
    }

    .pagetitle {
        margin-bottom: 10px;
    }

    .pagetitle h1 {
        font-size: 24px;
        margin-bottom: 0;
        font-weight: 600;
        color: #012970;
    }

    .breadcrumb {
    font-size: 14px;
    font-family: "Nunito", sans-serif;
    color: #899bbd;
    font-weight: 600;
    }

    .breadcrumb a {
        color: #899bbd;
        transition: 0.3s;
    }

    .breadcrumb a:hover {
        color: #51678f;
    }

    .breadcrumb .breadcrumb-item::before {
        color: #899bbd;
    }

    .breadcrumb .active {
        color: #51678f;
        font-weight: 600;
    }


</style>

<?php $__env->startSection('safety-content'); ?>

<section class="section">

    <div class="pagetitle">
        <h1>Shift</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('safety.home')); ?>">Home</a></li>
                <li class="breadcrumb-item active">All EHS Policies Manual</li>
            </ol>
        </nav>
      </div>


    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <br>
                <div class="card-header">
                    <h5 class="card-title">
                        <a href="<?php echo e(route('add.policies_manual')); ?>"><button type="button" class="btn btn-success btn-fw" id="polices_manual" style="float: center;">Add Policy Manual</button></a>
                    </h5>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:99%;">
                    <thead>
                        <tr>
                            <th width="0%">#</th>
                            <th width="15%">Employee/Observer Input</th>
                            <th width="15%">Recommendations</th>
                            <th width="15%">Supervisor or Management Action</th>
                            <th width="15%">Location</th>
                            <th width="10%">Due Date</th>
                            <th width="30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($i = 1); ?>
                        <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?> </td>
                            <td> <?php echo e($row->observe_input); ?> </td>
                            <td> <?php echo e($row->recommendation); ?> </td>
                            <td> <?php echo e($row->management_action_team); ?> </td>
                            <td> <?php echo e($row->location); ?> </td>
                            <td> <?php echo e($row->due_date); ?> </td>
                            <td>
                                <a href="<?php echo e(route('view.policies_manual', $row->id)); ?>" class="btn btn-primary">View</a>
                                <a href="<?php echo e(route('edit.policies_manual', $row->id)); ?>" class="btn btn-success">Edit</a>
                                <a href="<?php echo e(route('delete.policies_manual', $row->id)); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                    </table>
                </div>
                </div>


            </div>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('safety.safetyHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/safety/ehs_policies_manual.blade.php ENDPATH**/ ?>