@extends('admin.layouts.app')

@section('title', 'Manage Projects')

@section('content')
<div style="margin-bottom: 1.5rem;">
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">+ Tambah Project Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Teknologi</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $index => $project)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->technologies }}</td>
            <td>{{ $project->year }}</td>
            <td>
                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus project ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align: center; padding: 2rem; color: #999;">Belum ada data project</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection