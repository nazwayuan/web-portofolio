@extends('admin.layouts.app')

@section('title', 'Manage Skills')

@section('content')
<div style="margin-bottom: 1.5rem;">
    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">+ Tambah Skill Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Icon</th>
            <th>Nama Skill</th>
            <th>Persentase</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($skills as $index => $skill)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td style="font-size: 2rem;">{{ $skill->icon }}</td>
            <td>{{ $skill->name }}</td>
            <td>{{ $skill->percentage }}%</td>
            <td>
                <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus skill ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align: center; padding: 2rem; color: #999;">Belum ada data skill</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection