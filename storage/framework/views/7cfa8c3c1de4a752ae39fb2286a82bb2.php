<div class="<?php echo e($viewClass['form-group'], false); ?>">

    <label class="<?php echo e($viewClass['label'], false); ?> form-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">
        <table class="table table-with-fields">
            <thead>
            <tr>
                <?php if(!empty($options['sortable'])): ?>
                    <th></th>
                <?php endif; ?>
                <th><?php echo e(__('Key'), false); ?></th>
                <th><?php echo e(__('Value'), false); ?></th>
                <th style="width: 75px;"></th>
            </tr>
            </thead>
            <tbody class="kv-<?php echo e($column, false); ?>-table">

            <?php $__currentLoopData = old("{$column}.keys", ($value ?: [])); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php ($keysErrorKey = "{$column}.keys.{$loop->index}"); ?>
                <?php ($valsErrorKey = "{$column}.values.{$loop->index}"); ?>

                <tr>
                    <?php if(!empty($options['sortable'])): ?>
                        <td width="20"><span class="icon-arrows-alt-v btn btn-light handle"></span></td>
                    <?php endif; ?>
                    <td>
                        <div class="form-group <?php echo e($errors->has($keysErrorKey) ? 'has-error' : '', false); ?>">
                            <div class="col-sm-12">
                                <input name="<?php echo e($name, false); ?>[keys][]" value="<?php echo e(old("{$column}.keys.{$k}", $k), false); ?>" class="form-control" required/>

                                <?php if($errors->has($keysErrorKey)): ?>
                                    <?php $__currentLoopData = $errors->get($keysErrorKey); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="form-label" for="inputError"><i class="icon-times-circle-o"></i> <?php echo e($message, false); ?></label><br/>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group <?php echo e($errors->has($valsErrorKey) ? 'has-error' : '', false); ?>">
                            <div class="col-sm-12">
                                <input name="<?php echo e($name, false); ?>[values][]" value="<?php echo e(old("{$column}.values.{$k}", $v), false); ?>" class="form-control" />
                                <?php if($errors->has($valsErrorKey)): ?>
                                    <?php $__currentLoopData = $errors->get($valsErrorKey); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="form-label" for="inputError"><i class="icon-times-circle-o"></i> <?php echo e($message, false); ?></label><br/>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>

                    <td class="form-group">
                        <div>
                            <div class="<?php echo e($column, false); ?>-remove btn btn-danger btn-sm pull-right">
                                <i class="icon-trash">&nbsp;</i><?php echo e(__('admin.remove'), false); ?>

                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
        <div class="<?php echo e($column, false); ?>-add btn btn-success btn-sm pull-right">
            <i class="icon-plus"></i>&nbsp;<?php echo e(__('admin.new'), false); ?>

        </div>

    </div>
    <template class="<?php echo e($column, false); ?>-tpl">
        <tr>
            <?php if(!empty($options['sortable'])): ?>
                <td width="20"><span class="icon-arrows-alt-v btn btn-light handle"></span></td>
            <?php endif; ?>
            <td>
                <div class="form-group  ">
                    <div class="col-sm-12">
                        <input name="<?php echo e($name, false); ?>[keys][]" class="form-control" required/>
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group  ">
                    <div class="col-sm-12">
                        <input name="<?php echo e($name, false); ?>[values][]" class="form-control" />
                    </div>
                </div>
            </td>

            <td class="form-group">
                <div>
                    <div class="<?php echo e($column, false); ?>-remove btn btn-danger btn-sm pull-right">
                        <i class="icon-trash">&nbsp;</i><?php echo e(__('admin.remove'), false); ?>

                    </div>
                </div>
            </td>
        </tr>
    </template>
</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\keyvalue.blade.php ENDPATH**/ ?>