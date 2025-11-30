

<?php $__env->startSection('title', 'Portfolio - Portofolio'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1>My <span>Portfolio</span></h1>
    <p>Some of my recent works</p>
</div>

<div class="portfolio-grid">
    <div class="portfolio-item">
        <div class="portfolio-image">
            <div class="image-placeholder">
                <p>Project 1</p>
                <small>Screenshot here</small>
            </div>
        </div>
        <h3>E-Commerce Website</h3>
        <p>Online shopping platform with cart and payment features</p>
        <div class="portfolio-tags">
            <span>Laravel</span>
            <span>MySQL</span>
            <span>Bootstrap</span>
        </div>
    </div>
    
    <div class="portfolio-item">
        <div class="portfolio-image">
            <div class="image-placeholder">
                <p>Project 2</p>
                <small>Screenshot here</small>
            </div>
        </div>
        <h3>School Management System</h3>
        <p>System for managing students, teachers, and classes</p>
        <div class="portfolio-tags">
            <span>PHP</span>
            <span>JavaScript</span>
            <span>MySQL</span>
        </div>
    </div>
    
    <div class="portfolio-item">
        <div class="portfolio-image">
            <div class="image-placeholder">
                <p>Project 3</p>
                <small>Screenshot here</small>
            </div>
        </div>
        <h3>Landing Page Design</h3>
        <p>Modern and responsive landing page for tech startup</p>
        <div class="portfolio-tags">
            <span>HTML</span>
            <span>CSS</span>
            <span>Figma</span>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/portfolio.blade.php ENDPATH**/ ?>