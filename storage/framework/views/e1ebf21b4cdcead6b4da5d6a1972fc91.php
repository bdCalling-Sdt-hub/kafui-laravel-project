<div class="grid-dropdown-actions dropdown">
    <a href="#" style="padding: 0 10px;" class="dropdown-toggle grid-actions-dropdown" data-bs-toggle="dropdown">
        <i class="icon-ellipsis-v"></i>
    </a>
    <ul class="dropdown-menu grid-actions-menu" style="z-index:100;">

        <?php $__currentLoopData = $default; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo $action->render(); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(!empty($custom)): ?>

            <?php if(!empty($default)): ?>
            <li class=""><hr class="dropdown-divider"></li>
            <?php endif; ?>

            <?php $__currentLoopData = $custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo $action->render(); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ul>
</div>

<?php echo $__env->yieldContent('child'); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\actions\dropdown.blade.php ENDPATH**/ ?>