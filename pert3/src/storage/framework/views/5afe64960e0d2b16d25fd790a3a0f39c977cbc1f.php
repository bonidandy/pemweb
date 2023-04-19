<nav class="navbar navbar-expand-sm navbar-dark bg-primary flex-sm-nowrap flex-wrap">
    <div class="container-fluid">
        <button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand flex-grow-1"><?php echo e(config('app.name')); ?></span>
        <div class="navbar-collapse collapse flex-grow-1 justify-content-center" id="navbar5">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profiles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('sample')); ?>">Sample</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('profiles')); ?>">My Profile</a>
                </li>
                
            </ul>
        </div>
        <div class="flex-grow-1">
        </div>
    </div>
</nav><?php /**PATH /var/www/html/resources/views/partials/header.blade.php ENDPATH**/ ?>