<?php $__env->startSection('field'); ?>
    <select name='select-<?php echo e($name, false); ?>' class="form-select ie-input">
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt_value => $opt_label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option name='select-<?php echo e($name, false); ?>' value="<?php echo e($opt_value, false); ?>" data-label="<?php echo e($opt_label, false); ?>"><?php echo e($opt_label, false); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
    <script>
        admin.grid.inline_edit.functions['<?php echo e($trigger, false); ?>'] = {
            content : function(trigger,content){
                content.querySelector('select').value = trigger.dataset.value;
            },
            shown : function(trigger,content){
            },
            returnValue : function(trigger,content){
                var field = content.querySelector('select');
                return {'val':field.value,'label':field.options[field.selectedIndex].text};
            }
        }
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\select.blade.php ENDPATH**/ ?>