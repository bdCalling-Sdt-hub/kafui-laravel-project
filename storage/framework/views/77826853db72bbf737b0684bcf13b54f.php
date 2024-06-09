
<template render="true">
    <div class="modal fade picker" id="<?php echo e($modal, false); ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 5px;">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(admin_trans('admin.choose'), false); ?></h4>
                    <button type="button" class="btn btn-light close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="loading text-center">
                        <div class="icon-pulse">
                            <i class="icon-spinner icon-3x icon-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="display:none;">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(admin_trans('admin.cancel'), false); ?></button>
                    <button type="button" class="btn btn-primary submit"><?php echo e(admin_trans('admin.submit'), false); ?></button>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    window.setFile<?php echo e($selector, false); ?> = function (url,fileName){
        FileUpload_<?php echo e($name, false); ?>.addFileFromUrl(url);

        <?php if(empty($multiple)): ?>
            admin.selectable.hideModal();
        <?php else: ?>
            admin.toast("File added");
        <?php endif; ?>
    }

    var url = "/admin/media?select=true&fn=setFile<?php echo e($selector, false); ?><?php echo $picker_path; ?>";
    var config = {
        url : url,
        modal_elm : document.querySelector('#<?php echo e($modal, false); ?>'),
    }
    admin.selectable.init(config);


</script>

<style>
    #<?php echo e($modal, false); ?> .card-header.navbar{
        display:none;
    }

</style>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\components\mediapicker.blade.php ENDPATH**/ ?>