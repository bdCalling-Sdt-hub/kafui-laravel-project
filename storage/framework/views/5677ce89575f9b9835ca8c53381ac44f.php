<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <textarea class="form-control <?php echo e($class, false); ?>" id="<?php echo e($id, false); ?>" name="<?php echo e($name, false); ?>" placeholder="<?php echo e($placeholder, false); ?>" <?php echo $attributes; ?> ><?php echo e(old($column, $value), false); ?></textarea>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\editor.blade.php ENDPATH**/ ?>