


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Apparel</div>
                <div class="card-body">
                    <?php if(count($albums)=== 0): ?>
                        <p>We are currently out of stock</p>
                    <?php else: ?>
                    <table id="table-album" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Price</th>
                            <th>Ref Number</th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr data-id="<?php echo e($album->id); ?>">
                                 <td><?php echo e($album->name); ?></td>
                                 <td><?php echo e($album->artist); ?></td>
                                 <td><?php echo e($album->price); ?></td>
                                 <td><?php echo e($album->no_of_tracks); ?></td>
                                 <td>
                                     <a href="<?php echo e(route('user.albums.show',$album->id)); ?>" class="btn btn-primary">View</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\ClothingStoreCA\resources\views/user/albums/index.blade.php ENDPATH**/ ?>