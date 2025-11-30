

<?php $__env->startSection('title', 'Home - Portofolio'); ?>

<?php $__env->startSection('content'); ?>

<!-- SECTION: HOME/HERO -->
<section id="home" class="hero-section">
    <div class="hero-content">
        <div class="sparkle">✦</div>
        <h1 class="hero-title">
            Welcome to<br>
            <span>My Portfolio</span>
        </h1>
        <p class="hero-text">
            Hello! I'm Nazwa Yuan Adelia Putri,
            Junior Web Developer who loves creating beautiful and functional websites.
        </p>
        <div class="hero-buttons">
            <a href="#contact" class="btn-primary">Connect With Me</a>
            <a href="#portfolio" class="btn-secondary">View Portfolio</a>
        </div>
    </div>
    
    <div class="hero-image">
        <div class="image-placeholder" style="background-image: url('/images/photo/photo1.jpg'); 
                                          background-size: cover; 
                                          background-position: center;">
            <img src="/images/photo/photo1.jpg" 
                alt="Profile Photo"
                class="rounded-full"
                style="width: 400px; 
                        height: 400px; 
                        border-radius: 50%; 
                        object-fit: cover;">
        </div>
    </div>
</section>

<div class="stats-section">
    <div class="stat-card">
        <h3><?php echo e($projects->count()); ?>+</h3>
        <p>Projects</p>
    </div>
    <div class="stat-card">
        <h3><?php echo e($skills->count()); ?>+</h3>
        <p>Skills</p>
    </div>
    <div class="stat-card">
        <h3><?php echo e($certificates->count()); ?>+</h3>
        <p>Certificates</p>
    </div>
</div>

<!-- SECTION: ABOUT -->
<section id="about" class="about-section">
    <div class="page-header">
        <h1>About <span>Me</span></h1>
        <p>Who I am, what I do, and what drives my passion.</p>
    </div>

    <div class="about-content">
        <div class="about-image">
            <div class="image-placeholder" style="background-image: url('/images/photo/photo2.jpg'); 
                                                  background-size: cover; 
                                                  background-position: center;">
                <img src="/images/photo/photo2.jpg" 
                     alt="About Photo"
                     style="width: 100%; 
                            height: 100%; 
                            border-radius: 15px; 
                            object-fit: cover;">
            </div>
        </div>
        
        <div class="about-text">
            <h2>Hi, I'm <span>Nazwa Yuan Adelia Putri</span></h2>
            <p>I'm naturally curious and always excited to explore new ideas and challenges. I pay close attention to details and have high standards for my work, though I admit I find it difficult to turn down requests for help.</p>
            
            <p>As a Mathematics student at Yogyakarta State University, my focus lies in computational and applied mathematics. Currently, I'm dedicated to developing stronger communication and time-management abilities.</p>
            
            <p>My guiding principle is simple: "It's better to try and fail than to regret never trying." I also have a love for learning languages and appreciate starting every task with proper planning and organization.</p>
        </div>
    </div>
</section>

<!-- SECTION: SKILLS (DATA DARI DATABASE) -->
<section id="skills" class="skills-section">
    <div class="page-header">
        <h1>My <span>Skills</span></h1>
        <p>My technical and professional toolkit.</p>
    </div>

    <!-- Hard Skills -->
    <div style="margin-bottom: 4rem;">
        <h2 style="text-align: center; color: var(--accent-pink); font-size: 2rem; margin-bottom: 2rem;">💼 Hard Skills</h2>
        <div class="skills-grid">
            <?php $__currentLoopData = $skills->where('category', 'hard'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="skill-card">
                <div class="skill-icon"><?php echo e($skill->icon); ?></div>
                <h3><?php echo e($skill->name); ?></h3>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: <?php echo e($skill->percentage); ?>%"></div>
                </div>
                <p class="skill-percentage"><?php echo e($skill->percentage); ?>%</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Soft Skills -->
    <div>
        <h2 style="text-align: center; color: var(--accent-pink); font-size: 2rem; margin-bottom: 2rem;">🌟 Soft Skills</h2>
        <div class="skills-grid">
            <?php $__currentLoopData = $skills->where('category', 'soft'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="skill-card">
                <div class="skill-icon"><?php echo e($skill->icon); ?></div>
                <h3><?php echo e($skill->name); ?></h3>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: <?php echo e($skill->percentage); ?>%"></div>
                </div>
                <p class="skill-percentage"><?php echo e($skill->percentage); ?>%</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- SECTION: PORTFOLIO (DATA DARI DATABASE) -->
<section id="portfolio" class="portfolio-section">
    <div class="page-header">
        <h1>My <span>Portfolio</span></h1>
        <p>Projects that highlight my skills and creativity.</p>
    </div>

    <div class="portfolio-container">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <!-- Tampilan bergantian: kiri-kanan, kanan-kiri -->
        <div class="portfolio-row <?php echo e($index % 2 == 0 ? '' : 'reverse'); ?>">
            
            <!-- Bagian Deskripsi -->
            <div class="portfolio-description">
                <div class="portfolio-number">0<?php echo e($index + 1); ?></div>
                <h3><?php echo e($project->title); ?></h3>
                <p><?php echo e($project->description); ?></p>
                
                <div class="portfolio-tags">
                    <?php $__currentLoopData = explode(', ', $project->technologies); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><?php echo e($tech); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <?php if($project->link): ?>
                    <a href="<?php echo e($project->link); ?>" target="_blank" class="btn-view">View Project →</a>
                <?php endif; ?>
            </div>
            
            <!-- Bagian Gambar -->
            <div class="portfolio-showcase">
                <div class="portfolio-image-frame">
                    <?php if($project->image && file_exists(public_path('images/' . $project->image))): ?>
                        <img src="<?php echo e(asset('images/' . $project->image)); ?>" alt="<?php echo e($project->title); ?>">
                    <?php else: ?>
                        <div class="portfolio-placeholder">
                            <p><?php echo e($project->title); ?></p>
                            <small>Screenshot</small>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<!-- SECTION: EXPERIENCE -->
<section id="experience" class="experience-section">
    <div class="page-header">
        <h1>My <span>Experience</span></h1>
        <p>Where I've been involved and what I've learned.</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; max-width: 1200px; margin: 0 auto;">
        
        <div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Staff, Bidang Olahraga dan Seni</h3>
                        <h4>Himpunan Departemen Pendidikan Matematikat</h4>
                        <p>Supported the execution of sports and arts programs and assisted in ensuring smooth departmental activities.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2023</div>
                    <div class="timeline-content">
                        <h3>Event Staff</h3>
                        <h4>Sport and Arts Mathematics</h4>
                        <p>Planned event flow and ensured all activity sequences ran according to schedule.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2023</div>
                    <div class="timeline-content">
                        <h3>Secretary</h3>
                        <h4>SU-MUSYANG HIMATIKA FMIPA UNY</h4>
                        <p>Managed administrative tasks, documentation, and correspondence throughout the assembly.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Seminar Event Staff</h3>
                        <h4>LSM XXXII</h4>
                        <p>Coordinated event logistics and communicated with speakers to ensure smooth seminar execution.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Public Realtions Staff</h3>
                        <h4>Studi Laboratorium Matematika</h4>
                        <p>Handled external communication and disseminated event information to participants and the public.</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>PDD Staff</h3>
                        <h4>Temu Rutin IHMSI</h4>
                        <p>Responsible for publication, documentation, and activity report preparation for the regular IHMSI meeting.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Secretary</h3>
                        <h4>PKKMB FMIPA UNY</h4>
                        <p>Managed committee administration, minutes, and correspondence to support the implementation of PKKMB.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Event Coordinator</h3>
                        <h4>HIMATIKA Concert #12</h4>
                        <p>Led and coordinated all event activities with the event division team.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Secretary</h3>
                        <h4>KPU FMIPA UNY</h4>
                        <p>Organized administrative documents, prepared decrees, and created debate minutes.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">2025</div>
                    <div class="timeline-content">
                        <h3>Internship</h3>
                        <h4>BPS Bantul Regency</h4>
                        <p>Assisted various teams in handling data-related and administrative tasks within BPS Bantul.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SECTION: EDUCATION -->
<section id="education" class="education-section">
    <div class="page-header">
        <h1>My <span>Education</span></h1>
        <p>My academic journey.</p>
    </div>

    <div class="education-grid">
        <!-- Card UNY -->
        <div class="education-card">
            <div class="education-icon">🎓</div>
            <h3>Universitas Negeri Yogyakarta</h3>
            <h4>S1 Matematika</h4>
            <p class="education-year">2023 - sekarang</p>
            <ul class="education-details">
                <li>Actively involved in organizational activities</li>
                <li>Actively involved in event committees</li>
            </ul>
        </div>
        
        <!-- Card MAN -->
        <div class="education-card">
            <div class="education-icon">🏫</div>
            <h3>MAN 1 Mojokerto</h3>
            <h4>MIPA</h4>
            <p class="education-year">2018 - 2021</p>
            <ul class="education-details">
                <li>Actively involved in Student Council (OSIS)</li>
                <li>Member of Garuda Jaya IX Command</li>
            </ul>
        </div>

        <!-- TAMBAHKAN CARD SMP DI BAWAH INI -->
        <div class="education-card">
            <div class="education-icon">📚</div>
            <h3>MTs Negeri 1 Mojokerto</h3>
            <h4>-</h4>
            <p class="education-year">2015 - 2018</p>
            <ul class="education-details">
                <li>Active participant in math olympiads</li>
                <li>Actively involved in Student Council (OSIS)</li>
                <li>Actively involved in in Scouts</li>
            </ul>
        </div>

        <!-- TAMBAHKAN CARD SD DI BAWAH INI -->
        <div class="education-card">
            <div class="education-icon">✏️</div>
            <h3>MI Darul Arqom Mojokerto</h3>
            <h4>-</h4>
            <p class="education-year">2009 - 2015</p>
            <ul class="education-details">
                <li>Best Student in Class</li>
            </ul>
        </div>

    </div>
</section>

<!-- SECTION: CERTIFICATES (DATA DARI DATABASE) -->
<section id="certificates" class="certificates-section">
    <div class="page-header">
        <h1>Certificates & <span>Awards</span></h1>
        <p>Professional certifications and recognitions I've earned throughout my journey.</p>
    </div>

    <div style="max-width: 1200px; margin: 0 auto;">
        
        <!-- CARD 1: KEPANITIAAN -->
        <div class="certificate-category-card" style="margin-bottom: 30px; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <div class="category-header" onclick="toggleCategory('kepanitiaan')" style="padding: 30px; background: linear-gradient(135deg, #8B4049 0%, #A85861 100%); color: white; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h2 style="margin: 0; font-size: 1.8rem; display: flex; align-items: center; gap: 15px;">
                        <span>👥</span> Organization and Committee Certificates
                    </h2>
                    <p style="margin: 10px 0 0 0; opacity: 0.9;">
                        <?php echo e($certificates->where('category', 'kepanitiaan')->count()); ?> Certificates
                    </p>
                </div>
                <span id="icon-kepanitiaan" style="font-size: 2rem; transition: transform 0.3s;">▼</span>
            </div>
            <div id="content-kepanitiaan" class="category-content" style="display: none; padding: 30px;">
                <div class="certificates-grid">
                    <?php $__currentLoopData = $certificates->where('category', 'kepanitiaan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="certificate-card">
                        <?php if($certificate->image): ?>
                        <div class="certificate-image" style="width: 100%; height: 180px; overflow: hidden; border-radius: 10px; margin-bottom: 15px; background: #f5f5f5;">
                            <img src="<?php echo e(asset('images/' . $certificate->image)); ?>" 
                                 alt="<?php echo e($certificate->title); ?>" 
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <?php endif; ?>
                        <div class="certificate-icon"><?php echo e($certificate->icon); ?></div>
                        <h3><?php echo e($certificate->title); ?></h3>
                        <p class="certificate-issuer"><?php echo e($certificate->issuer); ?></p>
                        <p class="certificate-year"><?php echo e($certificate->year); ?></p>
                        <p class="certificate-desc"><?php echo e($certificate->description); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <!-- CARD 2: LOMBA -->
        <div class="certificate-category-card" style="margin-bottom: 30px; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <div class="category-header" onclick="toggleCategory('lomba')" style="padding: 30px; background: linear-gradient(135deg, #D4A5A5 0%, #C88C95 100%); color: white; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h2 style="margin: 0; font-size: 1.8rem; display: flex; align-items: center; gap: 15px;">
                        <span>🏆</span> Competition Certificates
                    </h2>
                    <p style="margin: 10px 0 0 0; opacity: 0.9;">
                        <?php echo e($certificates->where('category', 'lomba')->count()); ?> Certificates
                    </p>
                </div>
                <span id="icon-lomba" style="font-size: 2rem; transition: transform 0.3s;">▼</span>
            </div>
            <div id="content-lomba" class="category-content" style="display: none; padding: 30px;">
                <div class="certificates-grid">
                    <?php $__currentLoopData = $certificates->where('category', 'lomba'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="certificate-card">
                        <?php if($certificate->image): ?>
                        <div class="certificate-image" style="width: 100%; height: 180px; overflow: hidden; border-radius: 10px; margin-bottom: 15px; background: #f5f5f5;">
                            <img src="<?php echo e(asset('images/' . $certificate->image)); ?>" 
                                 alt="<?php echo e($certificate->title); ?>" 
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <?php endif; ?>
                        <div class="certificate-icon"><?php echo e($certificate->icon); ?></div>
                        <h3><?php echo e($certificate->title); ?></h3>
                        <p class="certificate-issuer"><?php echo e($certificate->issuer); ?></p>
                        <p class="certificate-year"><?php echo e($certificate->year); ?></p>
                        <p class="certificate-desc"><?php echo e($certificate->description); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <!-- CARD 3: PENGHARGAAN/SEMINAR -->
        <div class="certificate-category-card" style="margin-bottom: 30px; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <div class="category-header" onclick="toggleCategory('penghargaan')" style="padding: 30px; background: linear-gradient(135deg, #E8B4B8 0%, #D8989E 100%); color: white; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h2 style="margin: 0; font-size: 1.8rem; display: flex; align-items: center; gap: 15px;">
                        <span>🎓</span> Award Certificates
                    </h2>
                    <p style="margin: 10px 0 0 0; opacity: 0.9;">
                        <?php echo e($certificates->where('category', 'penghargaan')->count()); ?> Certificates
                    </p>
                </div>
                <span id="icon-penghargaan" style="font-size: 2rem; transition: transform 0.3s;">▼</span>
            </div>
            <div id="content-penghargaan" class="category-content" style="display: none; padding: 30px;">
                <div class="certificates-grid">
                    <?php $__currentLoopData = $certificates->where('category', 'penghargaan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="certificate-card">
                        <?php if($certificate->image): ?>
                        <div class="certificate-image" style="width: 100%; height: 180px; overflow: hidden; border-radius: 10px; margin-bottom: 15px; background: #f5f5f5;">
                            <img src="<?php echo e(asset('images/' . $certificate->image)); ?>" 
                                 alt="<?php echo e($certificate->title); ?>" 
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <?php endif; ?>
                        <div class="certificate-icon"><?php echo e($certificate->icon); ?></div>
                        <h3><?php echo e($certificate->title); ?></h3>
                        <p class="certificate-issuer"><?php echo e($certificate->issuer); ?></p>
                        <p class="certificate-year"><?php echo e($certificate->year); ?></p>
                        <p class="certificate-desc"><?php echo e($certificate->description); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
function toggleCategory(category) {
    const content = document.getElementById('content-' + category);
    const icon = document.getElementById('icon-' + category);
    
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.style.display = 'none';
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>

<!-- SECTION: HOBBIES (DATA DARI DATABASE) - REVISED VERSION -->
<section id="hobbies" class="hobbies-section">
    <div class="page-header">
        <h1>My <span>Hobbies</span></h1>
        <p>What I love to do in my free time.</p>
    </div>

    <div class="hobbies-grid">
        <?php $__currentLoopData = $hobbies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobby): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="hobby-card <?php echo e($hobby->items->count() > 0 ? 'expandable' : ''); ?>" id="hobby-<?php echo e($hobby->id); ?>">
            <div class="hobby-icon"><?php echo e($hobby->icon); ?></div>
            <h3><?php echo e($hobby->name); ?></h3>
            <p><?php echo e($hobby->description); ?></p>
            
            <?php if($hobby->items->count() > 0): ?>
                <!-- TOMBOL DENGAN DESAIN PINK DI TENGAH -->
                <div style="display: flex; justify-content: center; margin-top: 1.5rem;">
                    <button class="btn-expand-hobby" onclick="toggleHobbyItems(<?php echo e($hobby->id); ?>)">
                        <span id="expand-text-<?php echo e($hobby->id); ?>">
                            <?php if($hobby->type == 'film'): ?>
                                View watched movies
                            <?php elseif($hobby->type == 'recipe'): ?>
                                View recipes
                            <?php elseif($hobby->type == 'gallery'): ?>
                                Lihat Galeri
                            <?php else: ?>
                                Lihat Detail
                            <?php endif; ?>
                        </span>
                        <span id="expand-icon-<?php echo e($hobby->id); ?>" style="margin-left: 8px;">▼</span>
                    </button>
                </div>
                
                <!-- Items List (Hidden by default) --> 
                <div class="hobby-items-list" id="hobby-items-<?php echo e($hobby->id); ?>" style="display: none;">
                    <h4 style="margin: 1.5rem 0 1rem 0; color: var(--accent-pink); text-align: center;">
                        <?php if($hobby->type == 'film'): ?> 📽️ Daftar Film
                        <?php elseif($hobby->type == 'recipe'): ?> 🍽️ Daftar Resep
                        <?php elseif($hobby->type == 'gallery'): ?> 🖼️ Galeri
                        <?php else: ?> 📝 Daftar
                        <?php endif; ?>
                    </h4>
                    <div class="hobby-items-container">
                        <?php $__currentLoopData = $hobby->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="hobby-item">
                            <div class="item-title"><?php echo e($item->title); ?></div>
                            
                            <?php if($item->metadata): ?>
                                <div class="item-meta">
                                    <?php $__currentLoopData = $item->metadata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="item-badge"><?php echo e(ucfirst($key)); ?>: <?php echo e($value); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if($item->content): ?>
                                <div class="item-content"><?php echo e($item->content); ?></div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<style>
/* STYLE UNTUK TOMBOL HOBBY BARU (PINK & CENTERED) */
.btn-expand-hobby {
    background: linear-gradient(135deg, #E8B4B8 0%, #D8989E 100%);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 25px;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(232, 180, 184, 0.3);
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-expand-hobby:hover {
    background: linear-gradient(135deg, #D8989E 0%, #C88C95 100%);
    box-shadow: 0 6px 20px rgba(232, 180, 184, 0.4);
    transform: translateY(-2px);
}

.btn-expand-hobby:active {
    transform: translateY(0);
}

/* Animasi icon saat expand */
.hobby-card.expanded .btn-expand-hobby {
    background: linear-gradient(135deg, #C88C95 0%, #A85861 100%);
}
</style>

<script>
function toggleHobbyItems(hobbyId) {
    const itemsList = document.getElementById('hobby-items-' + hobbyId);
    const expandText = document.getElementById('expand-text-' + hobbyId);
    const expandIcon = document.getElementById('expand-icon-' + hobbyId);
    const hobbyCard = document.getElementById('hobby-' + hobbyId);
    
    // Simpan text awal
    const originalText = expandText.getAttribute('data-original-text') || expandText.textContent;
    if (!expandText.getAttribute('data-original-text')) {
        expandText.setAttribute('data-original-text', originalText);
    }
    
    if (itemsList.style.display === 'none') {
        itemsList.style.display = 'block';
        
        // Text untuk sembunyikan sesuai type
        if (originalText.includes('Film')) {
            expandText.textContent = 'Sembunyikan Daftar Film';
        } else if (originalText.includes('Resep')) {
            expandText.textContent = 'Sembunyikan Daftar Resep';
        } else if (originalText.includes('Galeri')) {
            expandText.textContent = 'Sembunyikan Galeri';
        } else {
            expandText.textContent = 'Sembunyikan Detail';
        }
        
        expandIcon.textContent = '▲';
        hobbyCard.classList.add('expanded');
    } else {
        itemsList.style.display = 'none';
        expandText.textContent = originalText;
        expandIcon.textContent = '▼';
        hobbyCard.classList.remove('expanded');
    }
}
</script>

<!-- SECTION: CONTACT -->
<section id="contact" class="contact-section">
    <div class="page-header">
        <h1>Contact <span>Me</span></h1>
        <p>I'd love to hear from you! Feel free to reach out for collaborations, questions, or just to say hello.</p>
    </div>

    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">📧</div>
                <h3>Email</h3>
                <p>nazwayuan44@gmail.com</p>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">📱</div>
                <h3>Phone</h3>
                <p>+62 822 8522 339</p>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">📍</div>
                <h3>Location</h3>
                <p>Yogyakarta, Indonesia</p>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">🌐</div>
                <h3>Social Media</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/nazwayuann" target="_blank">Instagram</a>
                    <a href="https://www.tiktok.com/@nzwwayn" target="_blank">TikTok</a>
                    <a href="#" target="_blank">LinkedIn</a>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
            <h2>Send Message</h2>
            
            <!-- Pesan Sukses -->
            <div id="success-message" style="display: none; background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                ✅ Message sent successfully! Thank you, I'll get back to you soon.
            </div>
            
            <!-- Pesan Error -->
            <div id="error-message" style="display: none; background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                ❌ Oops! Failed to send message. Please try again.
            </div>
            
            <form id="contact-form" action="https://formspree.io/f/xjknvlbe" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Your name" required>
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Your email" required>
                </div>
                
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="5" placeholder="Your message" required></textarea>
                </div>
                
                <button type="submit" class="btn-primary" id="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var form = this;
    var submitBtn = document.getElementById('submit-btn');
    var successMsg = document.getElementById('success-message');
    var errorMsg = document.getElementById('error-message');
    
    // Ubah tombol jadi loading
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    // Sembunyikan pesan sebelumnya
    successMsg.style.display = 'none';
    errorMsg.style.display = 'none';
    
    // Kirim data ke Formspree
    fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'Accept': 'application/json'
        }
    }).then(function(response) {
        if (response.ok) {
            // Sukses
            successMsg.style.display = 'block';
            form.reset();
            
            // Scroll ke pesan sukses
            successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
            // Error
            errorMsg.style.display = 'block';
        }
    }).catch(function(error) {
        // Error
        errorMsg.style.display = 'block';
    }).finally(function() {
        // Kembalikan tombol
        submitBtn.textContent = 'Send Message';
        submitBtn.disabled = false;
    });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/home.blade.php ENDPATH**/ ?>