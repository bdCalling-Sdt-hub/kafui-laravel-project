<?php
    $type = "checkbox";
?>
<?php $__env->startSection('field'); ?>

    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="checkbox">
            <label>
                <input type="checkbox" name='radio-<?php echo e($name, false); ?>[]' class="minimal ie-input" value="<?php echo e($option, false); ?>" data-label="<?php echo e($label, false); ?>"/> <?php echo e($label, false); ?>

            </label>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('assert'); ?>
    <style>
        .icheck.checkbox {
            margin: 5px 0 5px 20px;
        }

        .ie-content-<?php echo e($name, false); ?> .ie-container  {
            width: 150px;
            position: relative;
        }
    </style>
    <script>
        admin.grid.inline_edit.functions['<?php echo e($trigger, false); ?>'] = {
            content : function(trigger,content){

                try{
                    let valArr = JSON.parse(trigger.dataset.value);
                }
                catch(err){}
                if (typeof(valArr) != 'Array'){
                    valArr = [];
                }
                let fields = content.querySelectorAll('input');
                fields.forEach(el=>{
                    if (valArr.includes(el.value)){
                        el.checked = true;
                    }
                })
            },
            shown : function(trigger,content){
            },
            returnValue : function(trigger,content){
                let fields = content.querySelectorAll('input:checked');
                let obj = {'val':[],'label':[]}
                fields.forEach(el=>{
                    obj.val.push(el.value);
                    obj.label.push(el.dataset.label);
                })
                return obj;
            }
        }
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin::grid.inline-edit.comm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\checkbox.blade.php ENDPATH**/ ?>