


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Apparel: <?php echo e($apparel->name); ?></div>
                <div class="card-body">
                    <table id="table-apparels" class="table table-hover">
                    <tbody>
                  <tr>
                      <td rowspan="8"><img src="<?php echo e(asset('storage/images/' . $apparel->image_name)); ?>" width="250"/></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td><?php echo e($apparel->name); ?></td>
                  </tr>
                  <tr>
                    <td>Series</td>
                    <td><?php echo e($apparel->series); ?></td>
                  </tr>
                  <tr>
                    <td>Price</td>
                    <td>€<?php echo e($apparel->price); ?></td>
                  </tr>
                  <tr>
                    <td>Ref Number</td>
                    <td><?php echo e($apparel->refnumber); ?></td>
                  </tr>
                </tbody>
                    </table>
                    <a href="<?php echo e(route('user.apparels.index')); ?>" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\ClothingStoreCA\resources\views/user/apparels/show.blade.php ENDPATH**/ ?>