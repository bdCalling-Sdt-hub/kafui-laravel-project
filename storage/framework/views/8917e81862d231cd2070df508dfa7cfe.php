
<div class="row has-many-head <?php echo e($column, false); ?>">
    <h4><?php echo e($label, false); ?></h4>
</div>

<hr class="form-border">

<div id="has-many-<?php echo e($column, false); ?>" class="has-many-body has-many-<?php echo e($column, false); ?>">

    <div class="has-many-<?php echo e($column, false); ?>-forms">

        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pk => $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="has-many-<?php echo e($column, false); ?>-form fields-group">

                <?php $__currentLoopData = $form->fields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $field->render(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($options['allowDelete']): ?>
                <div class="form-group form-delete-group">
                    <label class="<?php echo e($viewClass['label'], false); ?> form-label"></label>
                    <div class="<?php echo e($viewClass['field'], false); ?>">
                        <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash">&nbsp;</i><?php echo e(trans('admin.remove'), false); ?></div>
                    </div>
                </div>
                <?php endif; ?>
                <hr class="form-border">
            </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <template class="<?php echo e($column, false); ?>-tpl">
        <div class="has-many-<?php echo e($column, false); ?>-form fields-group">

            <?php echo $template; ?>


            <div class="form-group form-delete-group">
                <label class="<?php echo e($viewClass['label'], false); ?> form-label"></label>
                <div class="<?php echo e($viewClass['field'], false); ?>">
                    <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash"></i>&nbsp;<?php echo e(trans('admin.remove'), false); ?></div>
                </div>
            </div>
            <hr class="form-border">

        </div>
    </template>

    <?php if($options['allowCreate']): ?>
    <div class="has-many-footer form-group">
        <label class="<?php echo e($viewClass['label'], false); ?> form-label"></label>
        <div class="<?php echo e($viewClass['field'], false); ?>">
            <div class="add btn btn-success btn-sm"><i class="icon-save"></i>&nbsp;<?php echo e(trans('admin.new'), false); ?></div>
        </div>
    </div>
    <?php endif; ?>

</div><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\hasmany.blade.php ENDPATH**/ ?>