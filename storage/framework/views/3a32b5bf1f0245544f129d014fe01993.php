<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <select class="form-select <?php echo e($class, false); ?> d-none" style="width: 100%;" name="<?php echo e($name, false); ?>" <?php echo $attributes; ?> >
        <option value=""></option>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($select, false); ?>" <?php echo e($select == old($column, $value) ?'selected':'', false); ?>><?php echo e($option, false); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <div class="belongsto-<?php echo e($class, false); ?> belongsto belongsto-selected-rows">

        <?php echo $grid->render(); ?>


        <template class="empty">
            <?php echo $__env->make('admin::grid.empty-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </template>
    </div>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\belongsto.blade.php ENDPATH**/ ?>