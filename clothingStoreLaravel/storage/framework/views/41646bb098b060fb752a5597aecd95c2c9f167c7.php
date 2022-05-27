<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Apparel
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('admin.apparels.store')); ?>" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" />
              </div>
              <div class="form-group">
                <label for="series">series</label>
                <input type="text" class="form-control" id="series" name="series" value="<?php echo e(old('series')); ?>" />
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="location" name="price" value="<?php echo e(old('price')); ?>" />
              </div>
              <div class="form-group">
                <label for="refnumber">Reference Number</label>
                <input type="text" class="form-control" id="refnumber" name="refnumber" value="<?php echo e(old('refnumber')); ?>" />
              </div>
            <div class="form-group">
                <label for="image_name"> Album Image </label>
                <input type="file" class="form-control" id='image_name' name="image_name" />
            </div>

              <a href="<?php echo e(route('admin.apparels.index')); ?>" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\ClothingStoreCA\resources\views/admin/apparels/create.blade.php ENDPATH**/ ?>