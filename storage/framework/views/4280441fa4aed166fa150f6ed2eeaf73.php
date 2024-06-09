<span data-bs-toggle="modal" data-bs-target="#grid-modal-<?php echo e($name, false); ?>" data-key="<?php echo e($key, false); ?>">
   <a href="javascript:void(0)"><i class="icon-clone"></i>&nbsp;&nbsp;<?php echo e($value, false); ?></a>
</span>

<div class="modal grid-modal fade" id="grid-modal-<?php echo e($name, false); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="border-radius: 5px;">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo e($title, false); ?></h4>
                <button type="button" class="btn btn-light close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <?php echo $html; ?>

            </div>
        </div>
    </div>
</div>

<?php if($grid): ?>
<style>
    .box.grid-box {
        box-shadow: none;
        border-top: none;
    }

    .grid-box .box-header:first-child {
        display: none;
    }
</style>
<?php endif; ?>

<?php if($async): ?>
<script>
    var modal = document.querySelector('#grid-modal-<?php echo e($name, false); ?>');
    var modalBody = modal.querySelector('.modal-body');

    var load = function (url) {

        modalBody.innerHTML = "<div class='loading text-center' style='height:100px;'>\
                <div class='icon-pulse'>\
                    <i class='icon-spinner icon-3x icon-fw'></i>\
                </div>\
            </div>";

        axios.get(url)
        .then(function (response) {
            modalBody.innerHTML = response.data;
        }).catch(function (error) {
            console.log(error);
        });

    };

    modal.addEventListener('show.bs.modal', function (e) {
        var key = e.relatedTarget.dataset.key;
        load('<?php echo e($url, false); ?>'+'&key='+key);
    })

</script>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\components\column-modal.blade.php ENDPATH**/ ?>