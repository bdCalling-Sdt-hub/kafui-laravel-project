<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="Pagination Navigation">
        <ul class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><?php echo __('pagination.previous'); ?></span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl(), false); ?>" rel="prev">
                        <?php echo __('pagination.previous'); ?>

                    </a>
                </li>
            <?php endif; ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl(), false); ?>" rel="next"><?php echo __('pagination.next'); ?></a>
                </li>
            <?php else: ?>
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><?php echo __('pagination.next'); ?></span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\laravel\framework\src\Illuminate\Pagination\resources\views\simple-bootstrap-5.blade.php ENDPATH**/ ?>