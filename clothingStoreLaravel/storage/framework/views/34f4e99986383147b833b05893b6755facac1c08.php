<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Album
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
            <form method="POST" action="<?php echo e(route('admin.albums.store')); ?>" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" />
              </div>
              <div class="form-group">
                <label for="artist">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist" value="<?php echo e(old('artist')); ?>" />
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="location" name="price" value="<?php echo e(old('price')); ?>" />
              </div>
              <div class="form-group">
                <label for="no_of_tracks">Number of tracks on the album</label>
                <input type="text" class="form-control" id="no_of_tracks" name="no_of_tracks" value="<?php echo e(old('no_of_tracks')); ?>" />
              </div>
            <div class="form-group">
                <label for="image_name"> Album Image </label>
                <input type="file" class="form-control" id='image_name' name="image_name" />
            </div>

              <a href="<?php echo e(route('admin.albums.index')); ?>" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\albumsCA\resources\views/admin/albums/create.blade.php ENDPATH**/ ?>