@extends('admin.layouts.app')

@section('title', 'Tambah Certificate Baru')

@section('content')
<div class="card">
    <form action="{{ route('admin.certificates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label>Judul Certificate *</label>
            <input type="text" name="title" required value="{{ old('title') }}" placeholder="Contoh: Web Development Certificate">
            @error('title')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Kategori *</label>
            <select name="category" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
                <option value="">-- Pilih Kategori --</option>
                <option value="kepanitiaan" {{ old('category') == 'kepanitiaan' ? 'selected' : '' }}>👥 Kepanitiaan</option>
                <option value="lomba" {{ old('category') == 'lomba' ? 'selected' : '' }}>🏆 Lomba</option>
                <option value="penghargaan" {{ old('category') == 'penghargaan' ? 'selected' : '' }}>🎓 Penghargaan & Seminar</option>
            </select>
            @error('category')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Penerbit *</label>
            <input type="text" name="issuer" required value="{{ old('issuer') }}" placeholder="Contoh: Dicoding Indonesia">
            @error('issuer')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Tahun *</label>
            <input type="number" name="year" required value="{{ old('year') }}" placeholder="2024" min="2000" max="2100">
            @error('year')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Deskripsi (Opsional)</label>
            <textarea name="description" rows="4" placeholder="Deskripsi singkat tentang certificate...">{{ old('description') }}</textarea>
            @error('description')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Icon (Emoji)</label>
            <input type="text" name="icon" value="{{ old('icon') }}" placeholder="Contoh: 🏅" maxlength="10">
            <small style="color: #999;">Copy emoji dari: <a href="https://emojipedia.org" target="_blank">emojipedia.org</a></small>
            @error('icon')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Foto Sertifikat (Opsional)</label>
            <input type="file" name="image" accept="image/*" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
            <small style="color: #999;">Format: JPG, PNG, GIF (Max 2MB)</small>
            @error('image')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-top: 2rem;">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.certificates.index') }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>
@endsection