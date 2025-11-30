@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1 class="h3 mb-0">Manage Hobbies</h1>
        <a href="{{ route('admin.hobbies.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Hobby
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="5%">Icon</th>
                            <th width="20%">Name</th>
                            <th width="35%">Description</th>
                            <th width="10%">Type</th>
                            <th width="10%">Items</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($hobbies as $hobby)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="fs-4">{{ $hobby->icon }}</td>
                            <td>{{ $hobby->name }}</td>
                            <td>{{ Str::limit($hobby->description, 60) }}</td>
                            <td>
                                <span class="badge bg-info">{{ $hobby->type }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.hobby-items.index', $hobby) }}" class="badge bg-secondary text-decoration-none">
                                    {{ $hobby->items_count }} items
                                </a>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.hobby-items.index', $hobby) }}" 
                                       class="btn btn-sm btn-info" title="Manage Items">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <a href="{{ route('admin.hobbies.edit', $hobby) }}" 
                                       class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.hobbies.destroy', $hobby) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Delete this hobby?')">
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
                            <td colspan="7" class="text-center py-4 text-muted">
                                No hobbies found. <a href="{{ route('admin.hobbies.create') }}">Add one now</a>
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