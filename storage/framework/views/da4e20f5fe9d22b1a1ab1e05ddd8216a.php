
<?php ($listErrorKey = "$column"); ?>
<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <table class="table table-with-fields">

            <tbody class="list-<?php echo e($column, false); ?>-table">

            <?php $__currentLoopData = old("{$column}", ($value ?: [])); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php ($itemErrorKey = "{$column}.{$loop->index}"); ?>

                <tr>
                    <?php if(!empty($options['sortable'])): ?>
                        <td width="20"><span class="icon-arrows-alt-v btn btn-light handle"></span></td>
                    <?php endif; ?>
                    <td>
                        <div class="form-group <?php echo e($errors->has($itemErrorKey) ? 'has-error' : '', false); ?>">
                            <div class="col-sm-12">
                                <input name="<?php echo e($column, false); ?>[]" value="<?php echo e(old("{$column}.{$k}", $v), false); ?>" class="form-control" />
                                <?php if($errors->has($itemErrorKey)): ?>
                                    <?php $__currentLoopData = $errors->get($itemErrorKey); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="form-label" for="inputError"><i class="icon-times-circle-o"></i> <?php echo e($message, false); ?></label><br/>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>

                    <td style="width: 75px;">
                        <div class="<?php echo e($column, false); ?>-remove btn btn-danger btn-sm pull-right">
                            <i class="icon-trash">&nbsp;</i><?php echo e(__('admin.remove'), false); ?>

                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="<?php echo e($column, false); ?>-add btn btn-success btn-sm pull-right">
            <i class="icon-plus"></i>&nbsp;<?php echo e(__('admin.new'), false); ?>

        </div>

        <template class="<?php echo e($column, false); ?>-tpl">
            <tr>
                <?php if(!empty($options['sortable'])): ?>
                    <td width="20"><span class="icon-arrows-alt-v btn btn-light handle"></span></td>
                <?php endif; ?>
                <td>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input name="<?php echo e($column, false); ?>[]" class="form-control" />
                        </div>
                    </div>
                </td>

                <td style="width: 75px;">
                    <div class="<?php echo e($column, false); ?>-remove btn btn-danger btn-sm pull-right">
                        <i class="icon-trash">&nbsp;</i><?php echo e(__('admin.remove'), false); ?>

                    </div>
                </td>
            </tr>
        </template>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\listfield.blade.php ENDPATH**/ ?>