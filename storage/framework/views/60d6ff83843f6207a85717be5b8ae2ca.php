<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Ofertas para você</h1>
    <div class="row">
        <?php $__currentLoopData = $featuredPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($post['title']); ?></h5>
                        <p class="card-text"><?php echo e($post['content']); ?></p>
                        <a href="<?php echo e(route('geladeira.form', ['id' => $post['id']])); ?>">
                            <img src="<?php echo e(asset('https://cdn.leroymerlin.com.br/categories/geladeira_1f60_300x300.jpg')); ?>" alt="Geladeira" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\BONA\laravel completo\laravel_completo\resources\views/pages/home.blade.php ENDPATH**/ ?>