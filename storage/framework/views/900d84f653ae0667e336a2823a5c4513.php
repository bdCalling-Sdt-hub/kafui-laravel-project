<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="btn-group checkbox-group-toggle">
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="btn btn-light <?php echo e(false !== array_search($option, array_filter(old($column, $value ?? []))) || ($value === null && in_array($option, $checked)) ?'active':'', false); ?>">
                <input type="checkbox" name="<?php echo e($name, false); ?>[]" value="<?php echo e($option, false); ?>" class="hide <?php echo e($class, false); ?>" <?php echo e(false !== array_search($option, array_filter(old($column, $value ?? []))) || ($value === null && in_array($option, $checked)) ?'checked':'', false); ?> <?php echo $attributes; ?> />&nbsp;<?php echo e($label, false); ?>&nbsp;&nbsp;
            </label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <input type="hidden" name="<?php echo e($name, false); ?>[]">

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\checkboxbutton.blade.php ENDPATH**/ ?>