<script>
    document.querySelectorAll('.<?php echo e($class, false); ?>').forEach(checkbox => {
        checkbox.addEventListener('change', function(target) {

            var key = this.dataset.key;
            var value = this.checked ? 'on' : 'off';
            var url = '<?php echo e($resource, false); ?>/' + key;
            var obj = {
                method: 'post',
                data: {
                    _method: 'PUT',
                    '<?php echo e($name, false); ?>': value,
                    'after-save': 'exit'
                }
            }

            admin.ajax.request(url, obj, function(result) {
                if (result.status) {
                    admin.toastr.success(result.data);
                } else {
                    admin.toastr.warning(result.data);
                }
            });
        })
    });
</script>
<?php /**PATH E:\xampp\htdocs\kafio\vendor\open-admin-org\open-admin\resources\views\grid\inline-edit\switch-script.blade.php ENDPATH**/ ?>