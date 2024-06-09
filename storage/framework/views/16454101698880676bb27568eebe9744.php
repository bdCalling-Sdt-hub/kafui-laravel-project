<?php echo $__env->make("admin::grid.table-header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- /.box-header -->
    <div class="card-body table-responsive no-padding">
        <div class="tables-container">
            <div class="table-wrap table-main">
                <table class="table grid-table select-table" id="<?php echo e($grid->tableID, false); ?>">
                    <thead>
                        <tr>
                            <?php $__currentLoopData = $grid->visibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th <?php echo $column->formatHtmlAttributes(); ?>><?php echo e($column->getLabel(), false); ?><?php echo $column->renderHeader(); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $__currentLoopData = $grid->rows(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr <?php echo $row->getRowAttributes(); ?>>
                            <?php $__currentLoopData = $grid->visibleColumnNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td <?php echo $row->getColumnAttributes($name); ?> class="column-<?php echo $name; ?>">
                                <?php echo $row->column($name); ?>

                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                    <?php echo $grid->renderTotalRow(); ?>


                </table>
            </div>

            <?php if($grid->leftVisibleColumns()->isNotEmpty()): ?>
            <div class="table-wrap table-fixed table-fixed-left">
                <table class="table grid-table select-table">
                    <thead>
                    <tr>
                        <?php $__currentLoopData = $grid->leftVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th <?php echo $column->formatHtmlAttributes(); ?>><?php echo e($column->getLabel(), false); ?><?php echo $column->renderHeader(); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $grid->rows(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr <?php echo $row->getRowAttributes(); ?>>
                            <?php $__currentLoopData = $grid->leftVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $name = $column->getName()
                                ?>
                                <td <?php echo $row->getColumnAttributes($name); ?> class="column-<?php echo $name; ?>">
                                    <?php echo $row->column($name); ?>

                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                    <?php echo $grid->renderTotalRow($grid->leftVisibleColumns()); ?>


                </table>
            </div>
            <?php endif; ?>

            <?php if($grid->rightVisibleColumns()->isNotEmpty()): ?>
            <div class="table-wrap table-fixed table-fixed-right">
                <table class="table grid-table select-table">
                    <thead>
                    <tr>
                        <?php $__currentLoopData = $grid->rightVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th <?php echo $column->formatHtmlAttributes(); ?>><?php echo e($column->getLabel(), false); ?><?php echo $column->renderHeader(); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $grid->rows(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr <?php echo $row->getRowAttributes(); ?>>
                            <?php $__currentLoopData = $grid->rightVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $name = $column->getName()
                                ?>
                                <td <?php echo $row->getColumnAttributes($name); ?> class="column-<?php echo $name; ?>">
                                    <?php echo $row->column($name); ?>

                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                    <?php echo $grid->renderTotalRow($grid->rightVisibleColumns()); ?>


                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php echo $grid->renderFooter(); ?>


    <div class="card-footer clearfix">
        <?php echo $grid->paginator(); ?>

    </div>
    <!-- /.box-body -->
</div>

<script>
    //var theadHeight = getOuterHeigt(document.querySelector('.table-main thead tr'));
    var tableMain = document.querySelector('.table-main');
    var theadHeight = tableMain.querySelector('thead tr').clientHeight;
    document.querySelectorAll('.table-fixed thead tr').forEach(tr=>{
        tr.style.height = theadHeight+"px";
    })

    let tfoot = tableMain.querySelector('tfoot tr');
    if (tfoot){
        var tfootHeight = tfoot.clientHeight;
        document.querySelectorAll('.table-fixed tfoot tr').forEach(tr=>{
            tr.style.height = tfootHeight+"px";
        })
    }


    let left_trs = document.querySelectorAll('.table-fixed-left tbody tr');
    let right_trs = document.querySelectorAll('.table-fixed-right tbody tr');
    tableMain.querySelectorAll('tbody tr').forEach((tr,i)=>{
        var height = tr.clientHeight;
        left_trs[i].style.height = height+"px";
        right_trs[i].style.height = height+"px";
    });

    if (tableMain.clientWidth >= tableMain.scrollWidth) {
        hide(document.querySelectorAll('.table-fixed'));
    }

</script>

<style>
    .tables-container {
        position:relative;
    }

    .tables-container table {
        margin-bottom: 0px !important;
    }

    .tables-container table th, .tables-container table td {
        white-space:nowrap;
    }

    .table-wrap table tr .active {
        background: #f5f5f5;
    }

    .table-main {
        overflow-x: auto;
        width: 100%;
    }

    .table-fixed {
        position:absolute;
        top: 0px;
        background:#ffffff;
        z-index:10;
    }

    .table-fixed-left {
        left:0;
        box-shadow: 7px 0 5px -5px rgba(0,0,0,.12);
    }

    .table-fixed-right {
        right:0;
        box-shadow: -5px 0 5px -5px rgba(0,0,0,.12);
    }
</style><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\fixed-table.blade.php ENDPATH**/ ?>