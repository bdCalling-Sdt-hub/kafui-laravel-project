<span class="grid-selector" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal, false); ?>" id="<?php echo e($display_field, false); ?>-<?php echo e($key, false); ?>" key="<?php echo e($key, false); ?>" data-display_field="<?php echo e($display_field, false); ?>" data-val="<?php echo e($original, false); ?>">
   <a href="javascript:void(0)" class="text-muted text-dotted">
       <i class="icon-check-square"></i>&nbsp;
       <span class="text"><?php echo $value; ?></span>
   </a>
</span>

<style>
    .belongsto.modal tr {
        cursor: pointer;
    }

    .belongsto.modal .box {
        border-top: none;
        margin-bottom: 0;
        box-shadow: none;
    }
    .belongsto.modal .loading {
        margin: 50px;
    }
</style>

<template render="true">
    <div class="modal fade belongsto" id="<?php echo e($modal, false); ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 5px;">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(admin_trans('admin.choose'), false); ?></h4>
                    <button type="button" class="btn btn-light close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="loading text-center">
                        <div class="icon-spin">
                            <i class="icon-spinner icon-3x"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?php echo e(admin_trans('admin.cancel'), false); ?></button>
                    <button type="button" class="btn btn-primary submit"><?php echo e(admin_trans('admin.submit'), false); ?></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    var related;
    var rows;
    var values;
    var labelClass = "<?php echo e($labelClass, false); ?>";
    var seperator = "<?php echo e($seperator, false); ?>";

    var update = function (callback) {
        var url = "<?php echo e($resource, false); ?>/" + related.getAttribute('key');
        <?php if($relation == \OpenAdmin\Admin\Grid\Displayers\BelongsTo::class): ?>
            var value = values.length ? values[0] : '';
        <?php else: ?>
            var value = values.length ? values : ['']
        <?php endif; ?>
        var data = {
                '<?php echo e($name, false); ?>': value,
                _method: 'PUT',
                'after-save': 'exit'
            };
        admin.ajax.post(url,data,callback);
    };

    var updateFunction = function(setValues,setRows,setRelated){

        rows = setRows;
        related = setRelated;
        values = setValues;
        update(resultFunction);
    }

    var resultFunction = function(data){

        admin.toastr.success(data.data);

        var text = related.querySelector(".text");
        var labels = [];
        var sep = "";

        for(i in values){
            var value = values[i];
            if (!text.querySelector('span[data-key="'+value+'"]')){
                var row = rows[value];
                var key = row.dataset.key;
                var value = row.querySelector(".column-"+related.dataset.display_field).innerText;
                var label = sep+"<span data-key=\""+key+"\" class=\""+labelClass+"\">"+value+"</span>";
                text.innerHTML += label;
            }
            sep = seperator;
        }
        text.querySelectorAll("span").forEach(span=>{
            var check = (new String(span.dataset.key));
            if (!arr_includes(values,check)){
                span.remove();
            }
        })

        <?php if($relation == \OpenAdmin\Admin\Grid\Displayers\BelongsTo::class): ?>
            related.dataset.val = values[0];
        <?php else: ?>
            related.dataset.val = JSON.stringify(values);
        <?php endif; ?>

        text.classList.add("text-success");

        setTimeout(function () {
            var text = related.querySelector(".text");
            text.classList.remove("text-success");

        }, 2000);
    }

    var valueFunction = function(related){
        <?php if($relation == \OpenAdmin\Admin\Grid\Displayers\BelongsTo::class): ?>
        return related.dataset.val;
        <?php else: ?>
        return JSON.parse(related.dataset.val);
        <?php endif; ?>
    }

    //var modalTrigger = '.{$this->relation_prefix}{$column} .select-relation';
    var config = {
        modal_elm : document.querySelector('#<?php echo e($modal, false); ?>'),
        url : "<?php echo $url; ?>",
        update : updateFunction, //for setting value
        value : valueFunction
    }

    admin.selectable.init(config);

</script>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\belongsto.blade.php ENDPATH**/ ?>