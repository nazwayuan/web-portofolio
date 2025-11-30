@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; margin-bottom: 2rem;">
    <div class="card" style="text-align: center;">
        <h2 style="color: #E8B4B8; font-size: 3rem; margin-bottom: 0.5rem;">{{ $skillCount }}</h2>
        <p style="color: #666; font-size: 1.1rem;">Total Skills</p>
    </div>
    
    <div class="card" style="text-align: center;">
        <h2 style="color: #E8B4B8; font-size: 3rem; margin-bottom: 0.5rem;">{{ $projectCount }}</h2>
        <p style="color: #666; font-size: 1.1rem;">Total Projects</p>
    </div>
    
    <div class="card" style="text-align: center;">
        <h2 style="color: #E8B4B8; font-size: 3rem; margin-bottom: 0.5rem;">{{ $certificateCount }}</h2>
        <p style="color: #666; font-size: 1.1rem;">Total Certificates</p>
    </div>

    <div class="card" style="text-align: center;">
        <h2 style="color: #E8B4B8; font-size: 3rem; margin-bottom: 0.5rem;">{{ $hobbyCount }}</h2>
        <p style="color: #666; font-size: 1.1rem;">Total Hobbies</p>
    </div>
</div>

<div class="card">
    <h2 style="margin-bottom: 1rem; color: #2C1810;">Selamat Datang di Admin Panel!</h2>
    <p style="color: #666;">Kelola data Skills, Projects, Certificates, dan Hobbies portfolio kamu dari sini.</p>
    <br>
    <a href="{{ route('admin.skills.index') }}" class="btn btn-primary">Kelola Skills</a>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Kelola Projects</a>
    <a href="{{ route('admin.certificates.index') }}" class="btn btn-primary">Kelola Certificates</a>
    <a href="{{ route('admin.hobbies.index') }}" class="btn btn-primary">Kelola Hobbies</a>
</div>
@endsection