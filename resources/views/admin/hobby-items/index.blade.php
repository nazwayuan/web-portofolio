@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center my-4">
        <div>
            <h1 class="h3 mb-0">Manage Items for: {{ $hobby->name }} {{ $hobby->icon }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.hobbies.index') }}">Hobbies</a></li>
                    <li class="breadcrumb-item active">Items</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('admin.hobby-items.create', $hobby) }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Item
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="card-title">Hobby Details</h5>
                    <p class="mb-1"><strong>Type:</strong> <span class="badge bg-info">{{ $hobby->type }}</span></p>
                    <p class="mb-0"><strong>Description:</strong> {{ $hobby->description }}</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="{{ route('admin.hobbies.edit', $hobby) }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i> Edit Hobby
                    </a>
                    <a href="{{ route('admin.hobbies.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Hobbies
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="25%">Title</th>
                            <th width="35%">Content</th>
                            <th width="20%">Metadata</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ Str::limit($item->content, 60) }}</td>
                            <td>
                                @if($item->metadata)
                                    <small class="text-muted">
                                        @foreach($item->metadata as $key => $value)
                                            <span class="badge bg-secondary">{{ $key }}: {{ $value }}</span>
                                        @endforeach
                                    </small>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.hobby-items.edit', [$hobby, $item]) }}" 
                                       class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.hobby-items.destroy', [$hobby, $item]) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Delete this item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">
                                No items found. <a href="{{ route('admin.hobby-items.create', $hobby) }}">Add one now</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection