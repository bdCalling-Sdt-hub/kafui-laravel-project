<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <input type="range" class="<?php echo e($class, false); ?> form-range" name="<?php echo e($name, false); ?>" data-from="<?php echo e(old($column, $value), false); ?>" <?php echo $attributes; ?> />

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\slider.blade.php ENDPATH**/ ?>