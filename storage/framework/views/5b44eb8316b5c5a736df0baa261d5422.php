<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> form-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?> picker-<?php echo e($column, false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="picker-file-preview <?php echo e(empty($preview) ? 'hide' : '', false); ?>">
            <?php $__currentLoopData = $preview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="file-preview-frame" data-val="<?php echo $item['value']; ?>">
                <div class="file-content">
                    <?php if($item['is_file']): ?>
                        <i class="icon-file-text-o"></i>
                    <?php else: ?>
                        <img src="<?php echo e($item['url'], false); ?>"/>
                    <?php endif; ?>
                </div>
                <div class="file-caption-info"><?php echo e(basename($item['url']), false); ?></div>
                <div class="file-actions">
                    <a class="btn btn-light btn-sm remove">
                        <i class="icon-trash"></i>
                    </a>
                    <a class="btn btn-light btn-sm" target="_blank" download="<?php echo e(basename($item['url']), false); ?>" href="<?php echo e($item['url'], false); ?>">
                        <i class="icon-download"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="input-group">
            <input <?php echo $attributes; ?> />
            <span class="input-group-btn">
              <?php echo $btn; ?>

            </span>
        </div>
<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<template>
    <template id="file-preview">
        <div class="file-preview-frame" data-val="_val_">
            <div class="file-content">
                <i class="icon-file-text-o"></i>
            </div>
            <div class="file-caption-info">_name_</div>
            <div class="file-actions">
                <a class="btn btn-light btn-sm remove">
                    <i class="icon-trash"></i>
                </a>
                <a class="btn btn-light btn-sm" target="_blank" download="_name_" href="_url_">
                    <i class="icon-download"></i>
                </a>
            </div>
        </div>
    </template>
    <template id="image-preview">
        <div class="file-preview-frame" data-val="_val_">
            <div class="file-content">
                <img src="_url_">
            </div>
            <div class="file-caption-info">_name_</div>
            <div class="file-actions">
                <a class="btn btn-light btn-sm remove">
                    <i class="icon-trash"></i>
                </a>
                <a class="btn btn-light btn-sm" target="_blank" download="_name_" href="_url_">
                    <i class="icon-download"></i>
                </a>
            </div>
        </div>
    </template>
</template>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\filepicker.blade.php ENDPATH**/ ?>