<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo e(route('contacts.index')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('contacts.create')); ?>">Add Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> Contact Manager. All rights reserved.</p>
    </footer>
</body>
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</html>
<?php /**PATH D:\OstadLaravelAssignment\contact-manager\resources\views/layouts/app.blade.php ENDPATH**/ ?>