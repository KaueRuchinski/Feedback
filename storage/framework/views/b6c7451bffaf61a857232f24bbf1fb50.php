<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Meu Site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('services')); ?>">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contato</a>
                </li>
                <!-- Link para o dashboard -->
                 <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
            </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Users\Usuario\Desktop\BONA\laravel completo\laravel_completo\resources\views/partials/navbar.blade.php ENDPATH**/ ?>