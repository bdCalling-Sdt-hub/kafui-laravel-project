<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="form-check <?php if(!$stacked): ?>form-check-inline <?php endif; ?>">
            <input type="checkbox" class="form-check-input <?php echo e($class, false); ?>" id="<?php echo e($id, false); ?>-<?php echo e($option, false); ?>" name="<?php echo e($name, false); ?>[]" value="<?php echo e($option, false); ?>" <?php echo e(false !== array_search($option, array_filter(old($column, $value ?? []))) || ($value === null && in_array($option, $checked)) ?'checked':'', false); ?> <?php echo $attributes; ?> />
            <label class="form-check-label" for="<?php echo e($id, false); ?>-<?php echo e($option, false); ?>"><?php echo e($label, false); ?></label>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\checkbox.blade.php ENDPATH**/ ?>