@extends('admin.layouts.app')

@section('title', 'Edit Skill')

@section('content')
<div class="card">
    <form action="{{ route('admin.skills.update', $skill) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Nama Skill *</label>
            <input type="text" name="name" required value="{{ old('name', $skill->name) }}" placeholder="Contoh: HTML5">
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Icon (Emoji)</label>
            <input type="text" name="icon" value="{{ old('icon', $skill->icon) }}" placeholder="Contoh: 💻" maxlength="10">
            <small style="color: #999;">Copy emoji dari: <a href="https://emojipedia.org" target="_blank">emojipedia.org</a></small>
            @error('icon')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Persentase (0-100) *</label>
            <input type="number" name="percentage" required value="{{ old('percentage', $skill->percentage) }}" min="0" max="100" placeholder="Contoh: 85">
            @error('percentage')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Kategori *</label>
            <select name="category" required style="width: 100%; padding: 0.8rem; border: 2px solid #e0e0e0; border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;">
                <option value="">-- Pilih Kategori --</option>
                <option value="hard" {{ old('category', $skill->category) == 'hard' ? 'selected' : '' }}>Hard Skill</option>
                <option value="soft" {{ old('category', $skill->category) == 'soft' ? 'selected' : '' }}>Soft Skill</option>
            </select>
            @error('category')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-top: 2rem;">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.skills.index') }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>
@endsection