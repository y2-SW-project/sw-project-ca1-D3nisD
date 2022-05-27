<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    Apparel
                    <a href="<?php echo e(route('admin.apparels.create')); ?>" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    <?php if(count($apparels)=== 0): ?>
                    <p>Currently Out Of Stock!</p>
                    <?php else: ?>
                    <table id="table-apparels" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Price</th>
                            <th>Ref Number</th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $apparels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apparel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-id="<?php echo e($apparel->id); ?>">
                                <td><?php echo e($apparel->name); ?></td>
                                <td><?php echo e($apparel->series); ?></td>
                                <td><?php echo e($apparel->price); ?></td>
                                <td><?php echo e($apparel->refnumber); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.apparels.show', $apparel->id)); ?>"
                                        class="btn btn-default">View</a>
                                    <a href="<?php echo e(route('admin.apparels.edit', $apparel->id)); ?>"
                                        class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="<?php echo e(route('admin.apparels.destroy', $apparel->id)); ?>">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\ClothingStoreCA\resources\views/admin/apparels/index.blade.php ENDPATH**/ ?>