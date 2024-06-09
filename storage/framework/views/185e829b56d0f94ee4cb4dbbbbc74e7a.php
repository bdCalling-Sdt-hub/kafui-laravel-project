<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-clock"></i></span>
                    <input type="text" name="<?php echo e($name['start'], false); ?>" value="<?php echo e(old($column['start'], $value['start'] ?? null), false); ?>" class="form-control <?php echo e($class['start'], false); ?>" autocomplete="off" <?php echo $attributes; ?> />
                </div>
            </div>

            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-clock"></i></span>
                    <input type="text" name="<?php echo e($name['end'], false); ?>" value="<?php echo e(old($column['end'], $value['end'] ?? null), false); ?>" class="form-control <?php echo e($class['end'], false); ?>" autocomplete="off" <?php echo $attributes; ?> />
                </div>
            </div>
        </div>
<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\timerange.blade.php ENDPATH**/ ?>