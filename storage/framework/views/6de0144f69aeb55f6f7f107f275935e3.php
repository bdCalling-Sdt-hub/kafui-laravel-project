<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-control" id="map_<?php echo e($name['lat'].$name['lng'], false); ?>" style="width: 100%;height: 300px"></div>
<input type="hidden" id="<?php echo e($name['lat'], false); ?>" name="<?php echo e($name['lat'], false); ?>" value="<?php echo e(old($column['lat'], $value['lat']), false); ?>" <?php echo $attributes; ?> />
<input type="hidden" id="<?php echo e($name['lng'], false); ?>" name="<?php echo e($name['lng'], false); ?>" value="<?php echo e(old($column['lng'], $value['lng']), false); ?>" <?php echo $attributes; ?> />

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\map.blade.php ENDPATH**/ ?>