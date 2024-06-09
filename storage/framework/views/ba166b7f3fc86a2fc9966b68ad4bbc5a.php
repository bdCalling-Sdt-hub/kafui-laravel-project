<style>

    .grid-selector .wrap {
        position: relative;
        line-height: 34px;
        border-bottom: 1px dashed #eee;
        padding: 0 30px;
        font-size: 13px;
        overflow:auto;
    }

    .grid-selector .wrap:last-child {
        border-bottom: none;
    }

    .grid-selector .wrap:first-child {
        border-top: 1px solid #eee;
    }

    .grid-selector .select-label {
        float: left;
        width: 100px;
        padding-left: 10px;
        color: #999;
    }

    .grid-selector .select-options {
        margin-left: 100px;
    }

    .grid-selector ul {
        height: 25px;
        list-style: none;
    }

    .grid-selector ul > li {
        margin-right: 30px;
        float: left;
    }

    .grid-selector ul > li a {
        color: #666;
        text-decoration: none;
    }

    .grid-selector .select-options a.active {
        color: var(--primary-color);
        font-weight: 600;
    }

    .grid-selector li .add {
        visibility: hidden;
    }

    .grid-selector li:hover .add {
        visibility: visible;
    }

    .grid-selector ul .clear {
        visibility: hidden;
    }

    .grid-selector ul:hover .clear {

        visibility: visible;
    }
</style>

<div class="grid-selector">
    <?php $__currentLoopData = $selectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $selector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="wrap">
            <div class="select-label"><?php echo e($selector['label'], false); ?></div>
            <div class="select-options">
                <ul>
                    <?php $__currentLoopData = $selector['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $active = in_array($value, \Illuminate\Support\Arr::get($selected, $column, []));
                        ?>
                        <li>
                            <a href="<?php echo e(\OpenAdmin\Admin\Grid\Tools\Selector::url($column, $value, true), false); ?>"
                               class="<?php echo e($active ? 'active' : '', false); ?>"><?php echo e($option, false); ?></a>
                            <?php if(!$active && $selector['type'] == 'many'): ?>
                                &nbsp;
                                <a href="<?php echo e(\OpenAdmin\Admin\Grid\Tools\Selector::url($column, $value), false); ?>" class="add"><i
                                            class="icon-plus-square"></i></a>
                            <?php else: ?>
                                <a style="visibility: hidden;"><i class="icon-plus-square"></i></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(\OpenAdmin\Admin\Grid\Tools\Selector::url($column), false); ?>" class="clear"><i
                                    class="icon-trash"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\selector.blade.php ENDPATH**/ ?>