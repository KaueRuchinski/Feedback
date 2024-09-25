<?php $__env->startSection('title', 'Sobre Nós'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Sobre Nós</h1>
    <div class="row">
        <?php $__currentLoopData = $teamMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($member['name']); ?></h5>
                        <p class="card-text"><strong><?php echo e($member['role']); ?></strong></p>
                        <p class="card-text"><?php echo e($member['bio']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\BONA\laravel completo\laravel_completo\resources\views/pages/about.blade.php ENDPATH**/ ?>