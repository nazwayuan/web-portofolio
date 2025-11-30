@extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="card">
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Judul Project *</label>
            <input type="text" name="title" required value="{{ old('title', $project->title) }}" placeholder="Contoh: E-Commerce Website">
            @error('title')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Deskripsi *</label>
            <textarea name="description" required rows="4" placeholder="Deskripsikan project ini...">{{ old('description', $project->description) }}</textarea>
            @error('description')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Nama File Gambar (Opsional)</label>
            <input type="text" name="image" value="{{ old('image') }}" placeholder="Contoh: pbo-project.jpg">
            <small style="color: #999;">Upload gambar ke folder public/images/ terlebih dahulu</small>
            @error('image')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Teknologi yang Digunakan *</label>
            <input type="text" name="technologies" required value="{{ old('technologies', $project->technologies) }}" placeholder="Contoh: Laravel, MySQL, Bootstrap">
            <small style="color: #999;">Pisahkan dengan koma (,)</small>
            @error('technologies')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Link Project (Opsional)</label>
            <input type="url" name="link" value="{{ old('link', $project->link) }}" placeholder="https://example.com">
            @error('link')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Tahun (Opsional)</label>
            <input type="number" name="year" value="{{ old('year', $project->year) }}" placeholder="2024" min="2000" max="2100">
            @error('year')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-top: 2rem;">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>
@endsection