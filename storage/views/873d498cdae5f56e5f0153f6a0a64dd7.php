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
                <li class="breadcrumb-item"><a href="<?php echo e(route('vital_monitoring')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Vital Monitoring</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Vital Monitoring</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.vitalsigns')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Name <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Blood Pressure <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="bp" placeholder="Enter Blood Pressure" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Pulse Rate <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="pr" placeholder="Enter Pulse Rate" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Temperature <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="t" placeholder="Enter Temperature" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Oxygen Saturation <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="o" placeholder="Enter Oxygen Saturation" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Respiratory Rate <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="rr" placeholder="Enter Respiratory Rate" required>
                        </div>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Vital Signs</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/add_vital_monitoring.blade.php ENDPATH**/ ?>