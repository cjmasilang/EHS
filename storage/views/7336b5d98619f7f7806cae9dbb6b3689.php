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
                <li class="breadcrumb-item"><a href="<?php echo e(route('first_aid_trainings')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add First Aid Training</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add First Aid Training</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" method="POST" action="<?php echo e(route('store.first_aid')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputName1">Title <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Enter Title" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputName1">Venue <span class="">*</span></label>
                            <input type="text" class="form-control" id="exampleInputName1" name="venue" placeholder="Enter Venue" required>
                        </div>
                    </div>

                    <br>

                    <div class="form-group col-6">
                        <label for="exampleTextarea1">Name oF Participants <span class="">*</span></label>
                        <textarea class="form-control" name="name" id="summernote"></textarea>
                    </div>
                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add First Aid</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('health.healthHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/health/add_first_aid_training.blade.php ENDPATH**/ ?>