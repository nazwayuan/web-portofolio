@extends('layouts.app')

@section('title', 'Education - Portofolio')

@section('content')
<div class="page-header">
    <h1>My <span>Education</span></h1>
    <p>Academic background</p>
</div>

<div class="education-grid">
    <div class="education-card">
        <div class="education-icon">🎓</div>
        <h3>Universitas Negeri Yogyakarta</h3>
        <h4>S1 Matematika</h4>
        <p class="education-year">2023 - Sekarang</p>
        <p class="education-gpa">GPA: Rahasia / 4.00</p>
        <ul class="education-details">
            <li>Active in programming community</li>
            <li>Member of Web Development Club</li>
            <li>Participated in coding competitions</li>
        </ul>
    </div>
    
    <div class="education-card">
        <div class="education-icon">🏫</div>
        <h3>MAN 1 Mojokerto</h3>
        <h4>MIPA</h4>
        <p class="education-year">2018 - 2021</p>
        <p class="education-gpa">Average: 90.5</p>
        <ul class="education-details">
            <li>Best Student Award 2021</li>
            <li>Mathematics Olympiad Participant</li>
            <li>School Magazine Editor</li>
        </ul>
    </div>
</div>
@endsection