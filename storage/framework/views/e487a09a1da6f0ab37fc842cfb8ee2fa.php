<div class="modal" tabindex="-1" role="dialog" id="<?php echo e($modal_id, false); ?>">
    <div class="modal-dialog <?php echo e($modal_size, false); ?>" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-light close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo e($title, false); ?></h4>
            </div>
            <form class="form form-horizontal" method="<?php echo e($method, false); ?>" action="<?php echo e($url, false); ?>" autocomplete="off" <?php if(!empty($multipart)): ?>enctype="multipart/form-data"<?php endif; ?>>
                <input type="hidden" name="_action" value="<?php echo e($_action, false); ?>">
                <input type="hidden" name="_model" value="<?php echo e($_model, false); ?>">
                <input type="hidden" name="_key" value="<?php echo e($_key, false); ?>">
                <div class="modal-body">
                    <?php echo $field_html; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(__('admin.close'), false); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('admin.submit'), false); ?></button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\actions\form\modal.blade.php ENDPATH**/ ?>