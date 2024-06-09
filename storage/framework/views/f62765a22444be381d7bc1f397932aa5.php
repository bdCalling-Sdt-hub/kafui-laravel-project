<div <?php echo $attributes; ?>>
    <div class="card-body d-flex align-items-center">
        <div class="icon float-start">
            <i class="icon-<?php echo e($icon, false); ?>"></i>
        </div>
        <div class="inner">
            <h3><?php echo e($info, false); ?></h3>
            <p><?php echo e($name, false); ?></p>
        </div>

    </div>
    <a href="<?php echo e($link, false); ?>" class="card-footer text-<?php echo e($color, false); ?>">
        <?php echo e($link_text, false); ?>

        <i class="icon-arrow-circle-right"></i>
    </a>
</div><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\widgets\info-box.blade.php ENDPATH**/ ?>