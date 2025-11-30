<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Portofolio'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <nav>
        <div class="logo">Portfolio</div>
        <ul>
            <li><a href="/#home">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#skills">Skills</a></li>
            <li><a href="/#portfolio">Portfolio</a></li>
            <li><a href="/#experience">Experience</a></li>
            <li><a href="/#education">Education</a></li>
            <li><a href="/#certificates">Certificates</a></li>
            <li><a href="/#hobbies">Hobbies</a></li>
            <li><a href="/#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>&copy; 2025 Nazwa Yuan. All rights reserved.</p>
    </footer>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\portofolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>