<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="input-group">
                <input type="file" class="form-control <?php echo e($class, false); ?>" name="<?php echo e($name, false); ?>[]" <?php echo $attributes; ?> />
                <span class="input-group-btn">
                <?php if(isset($btn)): ?><?php echo $btn; ?><?php endif; ?>
                </span>
        </div>
        <?php if(isset($sortable)): ?>
        <input type="hidden" class="form-control <?php echo e($class, false); ?>_sort" name="<?php echo e($sort_flag."[$name]", false); ?>"/>
        <?php endif; ?>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\multiplefile.blade.php ENDPATH**/ ?>