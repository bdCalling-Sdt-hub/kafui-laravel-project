<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="btn-group grey-border">
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="checkbox" name="<?php echo e($name, false); ?>" value="<?php echo e($option, false); ?>" id="<?php echo e($name, false); ?>-<?php echo e($option, false); ?>" class="btn-check <?php echo e($class, false); ?>" <?php echo e(($option == old($column, $value)) || ($value === null && in_array($label, $checked)) ?'checked':'', false); ?> <?php echo $attributes; ?> />
            <label class="btn btn-outline-primary" for="<?php echo e($name, false); ?>-<?php echo e($option, false); ?>"><?php echo e($label, false); ?></label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <input type="hidden" name="<?php echo e($name, false); ?>[]">

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\checkboxcard.blade.php ENDPATH**/ ?>