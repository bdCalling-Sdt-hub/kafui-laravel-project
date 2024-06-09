<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="form-check form-switch">
        <input type="hidden" name="<?php echo e($name, false); ?>" id="<?php echo e($id, false); ?>" value="<?php echo e(old($column, $value), false); ?>" />
        <input class="form-check-input <?php echo e($class, false); ?>" name="<?php echo e($name, false); ?>_cb" type="checkbox" id="<?php echo e($name, false); ?>_cb" <?php echo e(!empty(old($column, $value)) ? 'checked' : '', false); ?> <?php echo $attributes; ?> onchange="document.querySelector('#<?php echo e($id, false); ?>').value = (this.checked ? 'on' : 'off')" />
    </div>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\switchfield.blade.php ENDPATH**/ ?>