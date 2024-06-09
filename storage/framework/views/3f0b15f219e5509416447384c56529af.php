<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo ($errors->has($errorKey['start'].'start') || $errors->has($errorKey['end'].'end')) ? 'has-error' : ''; ?>">

    <label for="<?php echo e($id['start'], false); ?>" class="<?php echo e($viewClass['label'], false); ?> form-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                    <input type="text" name="<?php echo e($name['start'], false); ?>" id="<?php echo e($id['start'], false); ?>" value="<?php echo e(old($column['start'], $value['start'] ?? null), false); ?>" class="form-control <?php echo e($class['start'], false); ?>" autocomplete="off" <?php echo $attributes; ?> />
                </div>
            </div>

            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                    <input type="text" name="<?php echo e($name['end'], false); ?>" id="<?php echo e($id['end'], false); ?>" value="<?php echo e(old($column['end'], $value['end'] ?? null), false); ?>" class="form-control <?php echo e($class['end'], false); ?>" autocomplete="off" <?php echo $attributes; ?> />
                </div>
            </div>
        </div>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\daterange.blade.php ENDPATH**/ ?>