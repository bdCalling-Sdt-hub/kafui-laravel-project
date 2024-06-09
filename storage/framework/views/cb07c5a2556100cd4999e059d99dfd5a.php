<?php
    $type = "textarea";
?>

<?php $__env->startSection('field'); ?>
    <textarea class="form-control ie-input" rows="<?php echo e($rows, false); ?>"><?php echo e($value, false); ?></textarea>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
    <script>
       admin.grid.inline_edit.functions['<?php echo e($trigger, false); ?>'] = {
            content : function(trigger,content){
                //content.querySelector('select').value = trigger.dataset.value;
            },
            shown : function(trigger,content){
            },
            returnValue : function(trigger,content){
            }
        }
    </script>

    
    <script>
    <?php $__env->startComponent('admin::grid.inline-edit.partials.submit', compact('resource', 'name')); ?>
        $popover.data('display').html(val);
    <?php echo $__env->renderComponent(); ?>
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\textarea.blade.php ENDPATH**/ ?>