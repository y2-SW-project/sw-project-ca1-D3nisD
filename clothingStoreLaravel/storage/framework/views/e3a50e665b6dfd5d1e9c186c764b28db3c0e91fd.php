<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Album: <?php echo e($album->name); ?>

          </div>
          <div class="card-body">
              <table id="table-albums" class="table table-hover">
                <tbody>
                  <tr>
                      <td rowspan="8"><img src="<?php echo e(asset('storage/images/' . $album->image_name)); ?>" width="250"/></td>
                  </tr>
                  <tr>
                    <td>Title</td>
                    <td><?php echo e($album->name); ?></td>
                  </tr>
                  <tr>
                    <td>Artist</td>
                    <td><?php echo e($album->artist); ?></td>
                  </tr>
                  <tr>
                    <td>Price</td>
                    <td>€<?php echo e($album->price); ?></td>
                  </tr>
                  <tr>
                    <td>Number of tracks on the album</td>
                    <td><?php echo e($album->no_of_tracks); ?></td>
                  </tr>
                </tbody>
              </table>
              <a href="<?php echo e(route('admin.albums.index')); ?>" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\albumsCA\resources\views/admin/albums/show.blade.php ENDPATH**/ ?>