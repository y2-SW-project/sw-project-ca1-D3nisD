<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Albums
            <a href="<?php echo e(route('admin.albums.create')); ?>" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            <?php if(count($albums)=== 0): ?>
              <p>There are no Albums!</p>
            <?php else: ?>
            <table id="table-albums" class="table table-hover">
                <thead>
                  <th>Title</th>
                  <th>Artist</th>
                  <th>Price</th>
                  <th>Number of tracks on the album</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr data-id="<?php echo e($album->id); ?>">
                      <td><?php echo e($album->name); ?></td>
                      <td><?php echo e($album->artist); ?></td>
                      <td><?php echo e($album->price); ?></td>
                      <td><?php echo e($album->no_of_tracks); ?></td>
                      <td>
                        <a href="<?php echo e(route('admin.albums.show', $album->id)); ?>" class="btn btn-default">View</a>
                        <a href="<?php echo e(route('admin.albums.edit', $album->id)); ?>" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="<?php echo e(route('admin.albums.destroy', $album->id)); ?>">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token"  value="<?php echo e(csrf_token()); ?>">
                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\albumsCA\resources\views/admin/albums/index.blade.php ENDPATH**/ ?>