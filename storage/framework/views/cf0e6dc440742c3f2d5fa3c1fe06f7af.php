<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="input-group" style="width: 250px;">

            <input <?php echo $attributes; ?> />

            <span class="input-group-text clearfix" style="padding: 1px;"><img id="<?php echo e($column, false); ?>-captcha" src="<?php echo e(captcha_src(), false); ?>" style="height:30px;cursor: pointer;"  title="Click to refresh"/></span>

        </div>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\captcha.blade.php ENDPATH**/ ?>