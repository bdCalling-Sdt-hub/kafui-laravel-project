<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h1>New Contact Message</h1>
    <p><strong>Name:</strong> <?php echo e($name, false); ?></p>
    <p><strong>Email:</strong> <?php echo e($email, false); ?></p>
    <p><strong>Phone:</strong> <?php echo e($phone, false); ?></p>
    <p><strong>Service:</strong> <?php echo e($service, false); ?></p>
    <p><strong>Infos:</strong> <?php echo e($infos, false); ?></p>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\kafio\resources\views\emails\contact_mail.blade.php ENDPATH**/ ?>