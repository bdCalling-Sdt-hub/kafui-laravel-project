<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="has-many-<?php echo e($column, false); ?>">
            <table class="table table-with-fields has-many-<?php echo e($column, false); ?> vertical-align-<?php echo e($verticalAlign, false); ?>">
                <thead>
                <tr>
                    <?php if(!empty($options['sortable'])): ?>
                        <th></th>
                    <?php endif; ?>

                    <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($header, false); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <th class="hidden"></th>

                    <?php if($options['allowDelete']): ?>
                        <th></th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody class="has-many-<?php echo e($column, false); ?>-forms">
                <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pk => $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="has-many-<?php echo e($column, false); ?>-form fields-group">

                        <?php if(!empty($options['sortable'])): ?>
                           <td width="20"><span class="icon-arrows-alt-v btn btn-light handle"></span></td>
                        <?php endif; ?>

                        <?php $hidden = ''; ?>

                        <?php $__currentLoopData = $form->fields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if(is_a($field, \OpenAdmin\Admin\Form\Field\Hidden::class)): ?>
                                <?php $hidden .= $field->render(); ?>
                                <?php continue; ?>
                            <?php endif; ?>

                            <td><?php echo $field->setLabelClass(['hidden'])->setWidth(12, 0)->render(); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <td class="hidden"><?php echo $hidden; ?></td>

                        <?php if($options['allowDelete']): ?>
                            <td class="form-group">
                                <div>
                                    <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash">&nbsp;</i><?php echo e(trans('admin.remove'), false); ?></div>
                                </div>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <template class="<?php echo e($column, false); ?>-tpl">
                <tr class="has-many-<?php echo e($column, false); ?>-form fields-group">

                    <?php if(!empty($options['sortable'])): ?>
                        <td width="20"><span class="icon-arrows-alt-v btn btn-light handle"></span></td>
                    <?php endif; ?>

                    <?php echo $template; ?>


                    <td class="form-group">
                        <div>
                            <div class="remove btn btn-danger btn-sm pull-right"><i class="icon-trash">&nbsp;</i><?php echo e(trans('admin.remove'), false); ?></div>
                        </div>
                    </td>
                </tr>
            </template>

            <?php if($options['allowCreate']): ?>
                <div class="form-group">
                    <div class="<?php echo e($viewClass['field'], false); ?>">
                        <div class="add btn btn-success btn-sm"><i class="icon-plus"></i>&nbsp;<?php echo e(trans('admin.new'), false); ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\hasmanytable.blade.php ENDPATH**/ ?>