<div class="form-check form-switch">
  <input class="form-check-input <?php echo e($class, false); ?>" <?php echo e($checked, false); ?> data-key="<?php echo e($key, false); ?>" type="checkbox">
</div>

<?php echo $__env->make("admin::grid/inline-edit/switch-script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\switch.blade.php ENDPATH**/ ?>