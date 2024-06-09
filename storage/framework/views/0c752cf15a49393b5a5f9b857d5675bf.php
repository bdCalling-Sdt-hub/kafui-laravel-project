<thead>
<tr class="quick-create">
    <td colspan="<?php echo e($columnCount, false); ?>" style="height: 60px;padding-left: 50px;background-color: #f9f9f9; vertical-align: middle;">

        <span class="create" style="color: #bdbdbd;cursor: pointer;display: inline-block;">
             <i class="icon-plus"></i>&nbsp;<?php echo e(__('admin.quick_create'), false); ?>

        </span>

        <form class="row align-items-center gy-2 gx-3 create-form" autocomplete="off" style="display: none;width:calc(100% - 50px);" method="post" action='<?php echo e($url, false); ?>'>
            <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $field->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-auto">
                <button class="btn btn-primary btn-sm"><?php echo e(__('admin.submit'), false); ?></button>&nbsp;
                <a href="javascript:void(0);" class="cancel"><?php echo e(__('admin.cancel'), false); ?></a>
            </div>
            <?php echo e(csrf_field(), false); ?>


        </form>
    </td>
</tr>
</thead><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\quick-create-form.blade.php ENDPATH**/ ?>