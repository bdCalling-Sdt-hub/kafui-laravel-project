<div>
    <span class="<?php echo e($elementClass, false); ?>" data-inserted="0" data-key="<?php echo e($key, false); ?>" data-name="<?php echo e($name, false); ?>"
          data-bs-toggle="collapse" data-bs-target="#grid-collapse-<?php echo e($name, false); ?>">
        <a href="javascript:void(0)"><i class="icon-angle-double-down"></i>&nbsp;&nbsp;<?php echo e($value, false); ?></a>
    </span>
    <template class="grid-expand-<?php echo e($name, false); ?>">
        <tr style='background-color: #ecf0f5;'>
            <td colspan='100%' style='padding:0 !important; border:0;height:auto;'>
                <div id="grid-collapse-<?php echo e($name, false); ?>" class="collapse">
                    <div style="padding: 10px 10px 0 10px;" class="html">
                        <?php if($html): ?>
                            <?php echo $html; ?>

                        <?php else: ?>
                            <div class="loading text-center" style="padding: 20px 0px;">
                                <i class="icon-spinner fa-pulse fa-3x fa-fw"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </td>
        </tr>
    </template>
</div>

<script>
    var expand = document.querySelectorAll('.<?php echo e($elementClass, false); ?>');

    expand.forEach(el=>{
        el.addEventListener('click', function (e) {
            var name = el.dataset.name;

            if (el.dataset.inserted == '0') {
                var row = e.target.closest('tr');
                var key = el.dataset.key;
                var new_row = document.querySelector('template.grid-expand-'+name).content.cloneNode(true);
                row.after(new_row);
                var target = document.querySelector("#grid-collapse-"+name);
                bootstrap.Collapse.getOrCreateInstance(target).show();

                <?php if($async): ?>
                    let url = '<?php echo e($url, false); ?>'+'&key='+key;
                    axios.get(url)
                    .then(function (response) {
                        target.querySelector('.html').innerHTML = response.data;
                    }).catch(function (error) {
                        console.log(error);
                    });
                <?php endif; ?>

                el.dataset.inserted = 1;
            }

            var i = el.querySelector("i");
            i.classList.toggle("icon-angle-double-down");
            i.classList.toggle("icon-angle-double-up");
        });
    });
    <?php if($expand): ?>
        expand.click();
    <?php endif; ?>
</script>

<?php if($loadGrid): ?>
<style>
    .collapse .grid-box .box-header:first-child {
        display: none;
    }
</style>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\components\column-expand.blade.php ENDPATH**/ ?>