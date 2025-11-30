@extends('layouts.app')

@section('title', 'Skills - Portofolio')

@section('content')
<div class="page-header">
    <h1>My <span>Skills</span></h1>
    <p>Technologies and tools I work with</p>
</div>

<div class="skills-grid">
    <div class="skill-card">
        <div class="skill-icon">💻</div>
        <h3>HTML5</h3>
        <div class="skill-bar">
            <div class="skill-progress" style="width: 90%"></div>
        </div>
        <p class="skill-percentage">90%</p>
    </div>
    
    <div class="skill-card">
        <div class="skill-icon">🎨</div>
        <h3>CSS3</h3>
        <div class="skill-bar">
            <div class="skill-progress" style="width: 85%"></div>
        </div>
        <p class="skill-percentage">85%</p>
    </div>
    
    <div class="skill-card">
        <div class="skill-icon">⚡</div>
        <h3>JavaScript</h3>
        <div class="skill-bar">
            <div class="skill-progress" style="width: 75%"></div>
        </div>
        <p class="skill-percentage">75%</p>
    </div>
    
    <div class="skill-card">
        <div class="skill-icon">🔧</div>
        <h3>Laravel</h3>
        <div class="skill-bar">
            <div class="skill-progress" style="width: 80%"></div>
        </div>
        <p class="skill-percentage">80%</p>
    </div>
    
    <div class="skill-card">
        <div class="skill-icon">🐘</div>
        <h3>PHP</h3>
        <div class="skill-bar">
            <div class="skill-progress" style="width: 82%"></div>
        </div>
        <p class="skill-percentage">82%</p>
    </div>
    
    <div class="skill-card">
        <div class="skill-icon">🎭</div>
        <h3>Figma</h3>
        <div class="skill-bar">
            <div class="skill-progress" style="width: 88%"></div>
        </div>
        <p class="skill-percentage">88%</p>
    </div>
</div>
@endsection