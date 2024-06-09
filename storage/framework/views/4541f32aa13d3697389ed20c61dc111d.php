<div <?php echo $attributes; ?>>
    <ul class="nav nav-tabs">

        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($tab['type'] == \OpenAdmin\Admin\Widgets\Tab::TYPE_CONTENT): ?>
                <li class="nav-item"><a class="nav-link <?php echo e($active === $i ? 'active' : '', false); ?>" href="#<?php echo e($tab['ref'], false); ?>"
                        data-bs-toggle="tab"><?php echo e($tab['title'], false); ?></a></li>
            <?php elseif($tab['type'] == \OpenAdmin\Admin\Widgets\Tab::TYPE_LINK): ?>
                <li class="nav-item"><a class="nav-link <?php echo e($active === $i ? 'active' : '', false); ?>"
                        href="<?php echo e($tab['href'], false); ?>"><?php echo e($tab['title'], false); ?></a></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(!empty($dropDown)): ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $dropDown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                href="<?php echo e($link['href'], false); ?>"><?php echo e($link['name'], false); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        <?php endif; ?>
        <li class="pull-right header"><?php echo e($title, false); ?></li>
    </ul>
    <div class="tab-content">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-body tab-pane <?php echo e($active === $i ? 'active' : '', false); ?>" id="<?php echo e($tab['ref'], false); ?>">
                <?php ($content = \Illuminate\Support\Arr::get($tab, 'content')); ?>
                <?php if($content instanceof \Illuminate\Contracts\Support\Renderable): ?>
                    <?php echo $content->render(); ?>

                <?php else: ?>
                    <?php echo $content; ?>

                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\widgets\tab.blade.php ENDPATH**/ ?>