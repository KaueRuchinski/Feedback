<?php $__env->startSection('title', 'Admin Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Admin Dashboard</h1>
    <p>Bem-vindo ao painel administrativo!</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Estatísticas</h5>
                    <p class="card-text">Aqui você pode ver suas estatísticas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gerenciar Itens</h5>
                    <p class="card-text">Acesse para gerenciar os itens do sistema.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Configurações</h5>
                    <p class="card-text">Ajuste as configurações do sistema.</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\BONA\laravel completo\laravel_completo\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>