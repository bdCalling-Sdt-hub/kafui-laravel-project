<tr style="height: 28px;">
    <td><strong><small><?php echo e($label, false); ?>:</small></strong>&nbsp;&nbsp;&nbsp;</td>
    <td><input type="checkbox" class="<?php echo e($class, false); ?>" <?php echo e($checked, false); ?> data-key="<?php echo e($key, false); ?>" /></td>
</tr>

<?php echo $__env->make("admin::grid/inline-edit/switch-script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\switch-group.blade.php ENDPATH**/ ?>