<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="input-group" style="width: 150px">
            <input type="text" id="<?php echo e($id, false); ?>" name="<?php echo e($name, false); ?>" value="<?php echo e(old($column, $value), false); ?>" class="form-control <?php echo e($class, false); ?>" placeholder="0" style="text-align:right;" <?php echo $attributes; ?> />
            <span class="input-group-text">%</span>
        </div>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\rate.blade.php ENDPATH**/ ?>