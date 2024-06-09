<?php $__env->startSection('field'); ?>
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="radio icheck">
            <label>
                <input type="radio" name='radio-<?php echo e($name, false); ?>' class="minimal ie-input" value="<?php echo e($option, false); ?>" data-label="<?php echo e($label, false); ?>"/>&nbsp;<?php echo e($label, false); ?>&nbsp;&nbsp;
            </label>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
    <style>
        .icheck.radio {
            margin: 0 0 10px 0px;
        }

        .ie-content-<?php echo e($name, false); ?> .ie-container  {
            width: 150px;
            position: relative;
        }
    </style>

    <script>
     admin.grid.inline_edit.functions['<?php echo e($trigger, false); ?>'] = {
            content : function(trigger,content){
                let fields = content.querySelectorAll('input');
                fields.forEach(el=>{
                    if (trigger.dataset.value == el.value){
                        el.checked = true;
                    }
                })
            },
            shown : function(trigger,content){
            },
            returnValue : function(trigger,content){
                let field = content.querySelector('input:checked');
                console.log(field);
                return  {'val':field.value,'label':field.dataset.label}
            }
        }

    </script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\radio.blade.php ENDPATH**/ ?>