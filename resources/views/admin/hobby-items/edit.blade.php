@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <div class="my-4">
        <h1 class="h3 mb-0">Edit Item: {{ $item->title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.hobbies.index') }}">Hobbies</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.hobby-items.index', $hobby) }}">{{ $hobby->name }} Items</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.hobby-items.update', [$hobby, $item]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Item Title *</label>
                    <input type="text" 
                           class="form-control @error('title') is-invalid @enderror" 
                           id="title" 
                           name="title" 
                           value="{{ old('title', $item->title) }}" 
                           required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" 
                              id="content" 
                              name="content" 
                              rows="4">{{ old('content', $item->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="metadata" class="form-label">Metadata (JSON Format)</label>
                    <textarea class="form-control @error('metadata') is-invalid @enderror font-monospace" 
                              id="metadata" 
                              name="metadata" 
                              rows="5">{{ old('metadata', $item->metadata ? json_encode($item->metadata, JSON_PRETTY_PRINT) : '') }}</textarea>
                    @error('metadata')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="text-muted">
                        <strong>Examples by type:</strong><br>
                        <strong>Film:</strong> {"year": 2010, "genre": "Sci-Fi", "rating": 9.5}<br>
                        <strong>Recipe:</strong> {"difficulty": "Easy", "time": "30 min", "servings": 4}<br>
                        <strong>Gallery:</strong> {"image_url": "https://...", "camera": "Canon EOS"}<br>
                        Leave empty if not needed.
                    </small>
                </div>

                <div class="alert alert-info">
                    <strong>Hobby:</strong> {{ $hobby->name }} {{ $hobby->icon }}<br>
                    <strong>Type:</strong> <span class="badge bg-primary">{{ $hobby->type }}</span><br>
                    <small>Make sure your metadata matches the hobby type!</small>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Item
                    </button>
                    <a href="{{ route('admin.hobby-items.index', $hobby) }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection