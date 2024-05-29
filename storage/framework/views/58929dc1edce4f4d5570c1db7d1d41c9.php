<!DOCTYPE html>
<html>
<head>
    <title>New Request Quote</title>
</head>
<body>
    <h1>New Request Quote</h1>
    <p><strong>Install System:</strong> <?php echo e($requestData['install_system']); ?></p>
    <p><strong>System Complete By:</strong> <?php echo e($requestData['system_complet_by']); ?></p>
    <p><strong>Monthly Electric Use:</strong> <?php echo e($requestData['contact-usage']); ?></p>
    <p><strong>Solar System Type:</strong> <?php echo e($requestData['solar_system_type']); ?></p>
    <p><strong>Solar Panel Place:</strong> <?php echo e($requestData['solar_panel_place']); ?></p>
    <p><strong>Material on Your Roof:</strong> <?php echo e($requestData['metarial_on_your_rof']); ?></p>
    <p><strong>About Your Project:</strong> <?php echo e($requestData['contact-projects']); ?></p>
    <p><strong>First Name:</strong> <?php echo e($requestData['contact-first-name']); ?></p>
    <p><strong>Last Name:</strong> <?php echo e($requestData['contact-last-name']); ?></p>
    <p><strong>Email:</strong> <?php echo e($requestData['contact-email']); ?></p>
    <p><strong>Phone:</strong> <?php echo e($requestData['contact-phone']); ?></p>
    <p><strong>Contact Method:</strong> <?php echo e($requestData['customRadioInline1']); ?></p>
    <p><strong>Street Address:</strong> <?php echo e($requestData['contact-address']); ?></p>
    <p><strong>City:</strong> <?php echo e($requestData['contact-city']); ?></p>
    <p><strong>State:</strong> <?php echo e($requestData['contact-state']); ?></p>
    <p><strong>Zip Code:</strong> <?php echo e($requestData['contact-zip']); ?></p>
    <p><strong>Country:</strong> <?php echo e($requestData['contact-country']); ?></p>
    <p><strong>Ship to Address Type:</strong> <?php echo e($requestData['ship_to_address_type']); ?></p>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\kafio\resources\views\emails\request_queate.blade.php ENDPATH**/ ?>