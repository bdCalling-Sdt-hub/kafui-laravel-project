<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <form action="/task2/store" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control" onchange="myFunction()">
                <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3 d-none" id="display">
            <label for="options" class="form-label">Options (input your options separated via commas)</label>
            <input type="text" name="options" id="options" class="form-control" placeholder="home, office, around">
        </div>

        <div>
            <input type="submit" value="Submit" class="btn btn-success">
        </div>
    </form>

    <script>
        function myFunction() {
            var typeSelect = document.getElementById("type");
            var display = document.getElementById("display");
            if(typeSelect.value == "select") {
                display.classList.remove('d-none');
                display.classList.add('d-block');
            } else {
                display.classList.remove('d-block');
                display.classList.add('d-none');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\kafio\resources\views/task2.blade.php ENDPATH**/ ?>