<div <?php echo $attributes; ?> style='padding: 5px;border: 1px solid #f4f4f4;background-color:white;width:<?php echo e($width, false); ?>px;'>
    <ol class="carousel-indicators">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li data-bs-target="#<?php echo $id; ?>" data-bs-slide-to="<?php echo e($key, false); ?>" class="<?php echo e($key == 0 ? 'active' : '', false); ?>"></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
    <div class="carousel-inner">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php echo e($key == 0 ? 'active' : '', false); ?>">
            <img src="<?php echo e(url($item['image']), false); ?>" alt="<?php echo e($item['caption'], false); ?>" style='max-width:<?php echo e($width, false); ?>px;max-height:<?php echo e($height, false); ?>px;display: block;margin-left: auto;margin-right: auto;'>
            <div class="carousel-caption">
                <?php echo e($item['caption'], false); ?>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $id; ?>" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $id; ?>" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\widgets\carousel.blade.php ENDPATH**/ ?>