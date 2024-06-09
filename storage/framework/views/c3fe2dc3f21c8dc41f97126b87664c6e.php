<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <input class="form-control <?php echo e($class, false); ?>" name="<?php echo e($name, false); ?>[]" data-placeholder="<?php echo e($placeholder, false); ?>" <?php echo $attributes; ?> value="<?php echo e(implode(",",$value), false); ?>" />

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\tags.blade.php ENDPATH**/ ?>