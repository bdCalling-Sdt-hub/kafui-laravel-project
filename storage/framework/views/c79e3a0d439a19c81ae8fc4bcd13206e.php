<div id="has-many-<?php echo e($column, false); ?>" class="nav-tabs-custom has-many-<?php echo e($column, false); ?>">
    <div class="row header has-many-head ">
        <h4><?php echo e($label, false); ?></h4>
    </div>

    <hr style="margin-top: 0px;" class="form-border m-0">

    <ul class="nav nav-tabs">
        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pk => $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li id="tab_<?php echo e($relationName . '_' . $pk, false); ?>" class="nav-item">
                <a class="nav-link <?php if($form == reset($forms)): ?> active <?php endif; ?> " href="#<?php echo e($relationName . '_' . $pk, false); ?>" data-bs-toggle="tab">
                    <?php echo e($pk, false); ?> <i class="icon-exclamation-circle text-red hide"></i>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item add-tab">
            <button type="button" class="btn btn-light btn-sm add"><i class="icon-plus-circle" style="font-size: large;"></i></button>
        </li>

    </ul>

    <div class="tab-content has-many-<?php echo e($column, false); ?>-forms">

        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pk => $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tab-pane fields-group has-many-<?php echo e($column, false); ?>-form <?php if($form == reset($forms)): ?> active <?php endif; ?>" id="<?php echo e($relationName . '_' . $pk, false); ?>">
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
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <template class="<?php echo e($column, false); ?>-tab-tpl">
        <li class="new nav-item" id="tab_<?php echo e($relationName . '_new_' . \OpenAdmin\Admin\Form\NestedForm::DEFAULT_KEY_NAME, false); ?>">
            <a class="nav-link" href="#<?php echo e($relationName . '_new_' . \OpenAdmin\Admin\Form\NestedForm::DEFAULT_KEY_NAME, false); ?>" data-bs-toggle="tab">
                &nbsp;New <?php echo e(\OpenAdmin\Admin\Form\NestedForm::DEFAULT_KEY_NAME, false); ?> <i class="icon-exclamation-circle text-red hide"></i>
            </a>
        </li>
    </template>
    <template  class="<?php echo e($column, false); ?>-tpl">
        <div class="tab-pane fields-group new" id="<?php echo e($relationName . '_new_' . \OpenAdmin\Admin\Form\NestedForm::DEFAULT_KEY_NAME, false); ?>">
            <?php echo $template; ?>

            <?php if($options['allowDelete']): ?>
            <div class="form-group form-delete-group">
                <label class="<?php echo e($viewClass['label'], false); ?> form-label"></label>
                <div class="<?php echo e($viewClass['field'], false); ?>">
                    <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash">&nbsp;</i><?php echo e(trans('admin.remove'), false); ?></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </template>

</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\hasmanytab.blade.php ENDPATH**/ ?>