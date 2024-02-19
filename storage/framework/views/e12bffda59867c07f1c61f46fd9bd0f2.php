<div class="page-header">
    <h4 class="page-title text-capitalize"><?php echo e($title); ?></h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="fa-solid fa-rocket"></i>
            </a>
        </li>
        <?php if($induk != null): ?>
            <li class="separator">
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-item">
                <a href="#"><?php echo e($induk); ?></a>
            </li>
        <?php endif; ?>
        <li class="separator">
            <i class="fa-solid fa-chevron-right"></i>
        </li>
        <li class="nav-item">
            <a href="#"><?php echo e($title); ?></a>
        </li>
    </ul>
</div>
<?php /**PATH X:\laravel\next-job\resources\views/components/atoms/HeaderTitle.blade.php ENDPATH**/ ?>