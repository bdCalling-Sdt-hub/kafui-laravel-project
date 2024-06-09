<div <?php echo $attributes; ?>>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card" style="margin-bottom: 0px">
        <a class="card-header with-border" data-bs-toggle="collapse" data-parent="#<?php echo e($id, false); ?>" href="#collapse<?php echo e($key, false); ?>">
            <h4 class="card-title">
                <?php echo e($item['title'], false); ?>

            </h4>
        </a>
        <div id="collapse<?php echo e($key, false); ?>" class="panel-collapse collapse <?php echo e($key == 0 ? 'in' : '', false); ?>">
            <div class="card-body">
                <?php echo $item['content']; ?>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\widgets\collapse.blade.php ENDPATH**/ ?>