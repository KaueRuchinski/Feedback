<?php $__env->startSection('title', 'Serviços'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Nossos Serviços</h1>
    <div class="row">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($service['name']); ?></h5>
                        <p class="card-text"><?php echo e($service['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\BONA\laravel completo\laravel_completo\resources\views/pages/services.blade.php ENDPATH**/ ?>