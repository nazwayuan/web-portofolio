@extends('layouts.app')

@section('title', 'Experience - Portofolio')

@section('content')
<div class="page-header">
    <h1>My <span>Experience</span></h1>
    <p>Work and organizational experience</p>
</div>

<div class="timeline">
    <div class="timeline-item">
        <div class="timeline-date">2024 - Present</div>
        <div class="timeline-content">
            <h3>Web Developer Intern</h3>
            <h4>PT. Tech Indonesia</h4>
            <p>Developing and maintaining company websites using Laravel and Vue.js. Collaborated with design team to implement UI/UX improvements.</p>
        </div>
    </div>
    
    <div class="timeline-item">
        <div class="timeline-date">2023 - 2024</div>
        <div class="timeline-content">
            <h3>Graphic Designer</h3>
            <h4>Campus Organization</h4>
            <p>Created visual content for social media and event promotions. Designed posters, banners, and promotional materials.</p>
        </div>
    </div>
    
    <div class="timeline-item">
        <div class="timeline-date">2023</div>
        <div class="timeline-content">
            <h3>Freelance Web Designer</h3>
            <h4>Self-Employed</h4>
            <p>Worked with local businesses to create their online presence. Designed and developed responsive websites.</p>
        </div>
    </div>
</div>
@endsection