@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <div class="my-4">
        <h1 class="h3 mb-0">Edit Hobby</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.hobbies.index') }}">Hobbies</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.hobbies.update', $hobby) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Hobby Name *</label>
                    <input type="text" 
                           class="form-control @error('name') is-invalid @enderror" 
                           id="name" 
                           name="name" 
                           value="{{ old('name', $hobby->name) }}" 
                           required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="icon" class="form-label">Icon (Emoji)</label>
                    <input type="text" 
                           class="form-control @error('icon') is-invalid @enderror" 
                           id="icon" 
                           name="icon" 
                           value="{{ old('icon', $hobby->icon) }}" 
                           placeholder="🎬">
                    @error('icon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="text-muted">Gunakan emoji, contoh: 🎬 🍳 🎨 📚</small>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type *</label>
                    <select class="form-select @error('type') is-invalid @enderror" 
                            id="type" 
                            name="type" 
                            required>
                        <option value="">-- Select Type --</option>
                        <option value="film" {{ old('type', $hobby->type) == 'film' ? 'selected' : '' }}>Film</option>
                        <option value="recipe" {{ old('type', $hobby->type) == 'recipe' ? 'selected' : '' }}>Recipe</option>
                        <option value="gallery" {{ old('type', $hobby->type) == 'gallery' ? 'selected' : '' }}>Gallery</option>
                        <option value="text" {{ old('type', $hobby->type) == 'text' ? 'selected' : '' }}>Text</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description *</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" 
                              name="description" 
                              rows="4" 
                              required>{{ old('description', $hobby->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Hobby
                    </button>
                    <a href="{{ route('admin.hobbies.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection