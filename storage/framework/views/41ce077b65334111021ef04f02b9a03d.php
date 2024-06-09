<?php $__env->startSection('field'); ?>
    <input class="form-control ie-input"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
    <style>
        .ie-content-<?php echo e($name, false); ?> .ie-input {
            display: none;
        }
        .ie-content-<?php echo e($name, false); ?> {
            width:310px;
        }
    </style>
    <script>
        admin.grid.inline_edit.functions['<?php echo e($trigger, false); ?>'] = {
            content : function(trigger,content){
                content.querySelector('input').value = trigger.dataset.value;
            },
            shown : function(trigger,content){
                let field = content.querySelector('input');
                flatpickr(field,<?php echo $options; ?>);
            },
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\datetime.blade.php ENDPATH**/ ?>