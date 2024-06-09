

<span class="ie-wrap">
    <a
        id="<?php echo e($trigger, false); ?>"
        class="ie"
        data-bs-toggle="popover"
        data-target="<?php echo e($target, false); ?>"
        data-value="<?php echo e($value, false); ?>"
        data-original="<?php echo e($value, false); ?>"
        data-key="<?php echo e($key, false); ?>"
        data-name="<?php echo e($name, false); ?>"
        data-resource="<?php echo e($resource, false); ?>"
        <?php if(isset($type)): ?>
        data-type="<?php echo e($type, false); ?>"
        <?php endif; ?>
        data-init="0"
    >
        <span class="ie-display"><?php echo e($display, false); ?></span>
        <i class="icon-edit" style="visibility: hidden;"></i>
    </a>
</span>

<template id="<?php echo e($target, false); ?>">
    <div class="ie-content ie-content-<?php echo e($name, false); ?>">
        <div class="ie-container">
            <?php echo $__env->yieldContent('field'); ?>
            <div class="error"></div>
        </div>
        <div class="ie-action">
            <button class="btn btn-primary btn-sm ie-submit"><?php echo e(__('admin.submit'), false); ?></button>
            <button class="btn btn-light btn-sm ie-cancel"><?php echo e(__('admin.cancel'), false); ?></button>
        </div>
    </div>
</template>

<script>
    admin.grid.inline_edit.init_popover("<?php echo e($trigger, false); ?>","<?php echo e($target, false); ?>");
</script>

<?php echo $__env->yieldContent('assert'); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\comm.blade.php ENDPATH**/ ?>