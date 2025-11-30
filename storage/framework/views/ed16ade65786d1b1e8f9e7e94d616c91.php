

<?php $__env->startSection('title', 'Education - Portofolio'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1>My <span>Education</span></h1>
    <p>Academic background</p>
</div>

<div class="education-grid">
    <div class="education-card">
        <div class="education-icon">🎓</div>
        <h3>Universitas Negeri Yogyakarta</h3>
        <h4>S1 Pendidikan Teknik Informatika</h4>
        <p class="education-year">2022 - Present</p>
        <p class="education-gpa">GPA: 3.85 / 4.00</p>
        <ul class="education-details">
            <li>Active in programming community</li>
            <li>Member of Web Development Club</li>
            <li>Participated in coding competitions</li>
        </ul>
    </div>
    
    <div class="education-card">
        <div class="education-icon">🏫</div>
        <h3>SMA Negeri 1 Yogyakarta</h3>
        <h4>Science Major (IPA)</h4>
        <p class="education-year">2019 - 2022</p>
        <p class="education-gpa">Average: 90.5</p>
        <ul class="education-details">
            <li>Best Student Award 2021</li>
            <li>Mathematics Olympiad Participant</li>
            <li>School Magazine Editor</li>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/education.blade.php ENDPATH**/ ?>