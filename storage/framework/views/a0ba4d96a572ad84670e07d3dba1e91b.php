<?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-check <?php echo e($inline ? 'form-check-inline' : '', false); ?>">
        <input type="checkbox" class="form-check-input" id="<?php echo e($id, false); ?>-<?php echo e($option, false); ?>" name="<?php echo e($name, false); ?>[]" value="<?php echo e($option, false); ?>" class="minimal" <?php echo e(in_array((string)$option, request($name, is_null($value) ? [] : $value)) ? 'checked' : '', false); ?> />
        <label class="form-check-label" for="<?php echo e($id, false); ?>-<?php echo e($option, false); ?>"><?php echo e($label, false); ?></label>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\filter\checkbox.blade.php ENDPATH**/ ?>