    <style>
        .card-title{
            font-weight: tahoma;
            color: black;
        }
    </style>

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('photo_gallery')); ?>">Back</a></li>
                <li class="breadcrumb-item active">Add Photo</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">

                    <h5 class="card-title">Add Photo</h5>
                    <div class="text-danger highlight">* (Askterisk) Indicates required field</div>

                    <br>

                    <form class="forms-sample" action="<?php echo e(route('store.photo')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputName1">Photo Title <span class="">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Photo Type <span class="">*</span></label>
                            <select class="form-control" name="type">
                                <option value="0">Small Photo </option>
                        </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image Upload  <span class="">*</span></label>
                        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>

                    <br>

                    <div class="row mb-3">
                       <div class="col-sm-10"> <button type="submit" class="btn btn-success">Add Photo</button></div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
    </div>

 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\VBEHS\resources\views/admin/add_photo.blade.php ENDPATH**/ ?>