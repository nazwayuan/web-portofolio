

<?php $__env->startSection('title', 'About - Portofolio'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1>About <span>Me</span></h1>
    <p>Get to know more about me</p>
</div>

<div class="about-content">
    <div class="about-image">
        <div class="image-placeholder">
            <p>Your Photo</p>
        </div>
    </div>
    
    <div class="about-text">
        <h2>Hi, I'm <span>Your Name</span></h2>
        <p>I'm a passionate web developer and designer based in Yogyakarta, Indonesia. I love creating beautiful and functional websites that provide great user experiences.</p>
        
        <p>Currently, I'm studying at Universitas Negeri Yogyakarta, majoring in Informatics Engineering Education. I'm always eager to learn new technologies and improve my skills.</p>
        
        <div class="about-info">
            <div class="info-item">
                <strong>Name:</strong> Your Name
            </div>
            <div class="info-item">
                <strong>Location:</strong> Yogyakarta, Indonesia
            </div>
            <div class="info-item">
                <strong>Email:</strong> your@email.com
            </div>
            <div class="info-item">
                <strong>Phone:</strong> +62 812 3456 7890
            </div>
        </div>
        
        <a href="/contact" class="btn-primary">Contact Me</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/about.blade.php ENDPATH**/ ?>