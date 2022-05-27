<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    Welcome to our Albums 
                    <br>
                    Read More <a href="<?php echo e(route('about')); ?>">about us</a>
                    <br>
                    <a href="<?php echo e(route('admin.albums.index')); ?>">Admin</a> Page
                    <br>
                    <a href="<?php echo e(route('user.albums.index')); ?>">User</a> Page
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Denis\albumsCA - Copy\resources\views/welcome.blade.php ENDPATH**/ ?>