

<?php $__env->startSection('title', 'Formulário de Comentário'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Comentário sobre a Geladeira</h1>

    <form action="<?php echo e(route('contact.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="geladeira_id" value="<?php echo e($id); ?>">

        <div class="form-group">
            <label for="comment">Seu Comentário</label>
            <textarea id="comment" name="comment" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\BONA\laravel completo\laravel_completo\resources\views/geladeira/form.blade.php ENDPATH**/ ?>