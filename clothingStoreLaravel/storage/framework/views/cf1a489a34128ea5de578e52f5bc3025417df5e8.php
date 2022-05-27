<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header d-flex justify-content-center">
            Edit Apparel
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
            <form method="POST" action="<?php echo e(route('admin.apparels.update', $apparel->id)); ?>">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $apparel->name)); ?>" />
              </div>
              <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="<?php echo e(old('series', $apparel->series)); ?>" />
              </div>
              <div class="form-group">
                <label for="price">Price (In Euros €)</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo e(old('price', $apparel->price)); ?>" />
              </div>
              <div class="form-group">
                <label for="refnumber">reference number</label>
                <input type="text" class="form-control" id="refnumber" name="refnumber" value="<?php echo e(old('refnumber', $apparel->refnumber)); ?>" />
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\ClothingStoreCA\resources\views/admin/apparels/edit.blade.php ENDPATH**/ ?>