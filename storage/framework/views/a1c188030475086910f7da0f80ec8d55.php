<form action="<?php echo $action; ?>" pjax-container style="display: inline-flex;vertical-align:middle;">
    <div class="input-group input-group-sm">
        <input type="text" name="<?php echo e($key, false); ?>" class="form-control grid-quick-search" value="<?php echo e($value, false); ?>" placeholder="<?php echo e($placeholder, false); ?>">
        <button type="submit" class="btn btn-light"><i class="icon-search"></i></button>
    </div>
</form><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\quick-search.blade.php ENDPATH**/ ?>