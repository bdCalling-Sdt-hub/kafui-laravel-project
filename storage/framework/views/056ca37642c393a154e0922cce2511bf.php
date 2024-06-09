<?php $__env->startSection('field'); ?>
    <input class="form-control ie-input"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
 <script>

    admin.grid.inline_edit.functions['<?php echo e($trigger, false); ?>'] = {
        content : function(trigger,content){
            content.querySelector('input').value = trigger.dataset.value;
        },
        shown : function(trigger,content){
            let field = content.querySelector('input');
            field.focus();
            <?php if($mask): ?>
            Inputmask(<?php echo json_encode($mask, 15, 512) ?>).mask(field);
            <?php endif; ?>

        }
    }

</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\input.blade.php ENDPATH**/ ?>