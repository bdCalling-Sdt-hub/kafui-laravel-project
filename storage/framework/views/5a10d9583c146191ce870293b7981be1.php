<div class="form-group row">
    <label class="col-sm-2 control-label"><?php echo e($label, false); ?></label>
    <div class="col-sm-8" style="width: 390px">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php echo e($label, false); ?>" name="<?php echo e($name['start'], false); ?>" value="<?php echo e(request()->input("{$column}.start", \Illuminate\Support\Arr::get($value, 'start')), false); ?>">
            <span class="input-group-text" style="border-left: 0; border-right: 0;">-</span>
            <input type="text" class="form-control" placeholder="<?php echo e($label, false); ?>" name="<?php echo e($name['end'], false); ?>" value="<?php echo e(request()->input("{$column}.end", \Illuminate\Support\Arr::get($value, 'end')), false); ?>">
        </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\filter\between.blade.php ENDPATH**/ ?>