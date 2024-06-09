


<h4 class="embed-title ps-3" style="font-size:1.2rem;"><?php echo e($label, false); ?></h4>
<hr>

<div id="embed-<?php echo e($column, false); ?>" class="embed-<?php echo e($column, false); ?>">


    <div class="embed-<?php echo e($column, false); ?>-forms">

        <div class="embed-<?php echo e($column, false); ?>-form fields-group">

            <?php $__currentLoopData = $form->fields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $field->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>

<hr><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\form\embeds.blade.php ENDPATH**/ ?>