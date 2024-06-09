
<div class="input-group">
    <?php if($group): ?>
        <div class="input-group-btn">
            <input type="hidden" name="<?php echo e($id, false); ?>_group" class="<?php echo e($group_name, false); ?>-operation" value="0"/>
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" style="min-width: 32px;">
                <span class="<?php echo e($group_name, false); ?>-label"><?php echo e($default['label'], false); ?></span>
                &nbsp;&nbsp;
                <span class="icon-caret-down"></span>
            </button>
            <ul class="dropdown-menu <?php echo e($group_name, false); ?>">
                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="#" data-index="<?php echo e($index, false); ?>"> <?php echo e($item['label'], false); ?> </a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="input-group-text">
        <i class="icon-calendar"></i>
    </div>
    <input class="form-control" id="<?php echo e($id, false); ?>" placeholder="<?php echo e($label, false); ?>" name="<?php echo e($name, false); ?>" value="<?php echo e(request($name, $value), false); ?>">
</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\filter\datetime.blade.php ENDPATH**/ ?>