@extends('layouts.app')

@section('title', 'Hobbies - Portofolio')

@section('content')
<div class="page-header">
    <h1>My <span>Hobbies</span></h1>
    <p>What I love to do in my free time</p>
</div>

<div class="hobbies-grid">
    <div class="hobby-card">
        <div class="hobby-icon">💻</div>
        <h3>Coding</h3>
        <p>Building web applications and exploring new programming languages. I love solving problems through code and creating useful tools.</p>
    </div>
    
    <div class="hobby-card">
        <div class="hobby-icon">🎨</div>
        <h3>Design</h3>
        <p>Creating beautiful UI/UX designs and illustrations. I enjoy experimenting with colors, typography, and layouts.</p>
    </div>
    
    <div class="hobby-card">
        <div class="hobby-icon">📚</div>
        <h3>Reading</h3>
        <p>Learning from books about technology, self-development, and fiction. Knowledge is power!</p>
    </div>
    
    <div class="hobby-card">
        <div class="hobby-icon">📸</div>
        <h3>Photography</h3>
        <p>Capturing moments and beautiful sceneries. I love street photography and landscape shots.</p>
    </div>
    
    <div class="hobby-card">
        <div class="hobby-icon">🎮</div>
        <h3>Gaming</h3>
        <p>Playing video games in my spare time. It helps me relax and also inspires game development ideas.</p>
    </div>
    
    <div class="hobby-card">
        <div class="hobby-icon">✈️</div>
        <h3>Traveling</h3>
        <p>Exploring new places and experiencing different cultures. Every destination has a story to tell.</p>
    </div>
</div>
@endsection