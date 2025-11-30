@extends('admin.layouts.app')

@section('title', 'Manage Certificates')

@section('content')
<div style="margin-bottom: 1.5rem;">
    <a href="{{ route('admin.certificates.create') }}" class="btn btn-primary">+ Tambah Certificate Baru</a>
</div>

@if(session('success'))
<div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem;">
    {{ session('success') }}
</div>
@endif

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Icon</th>
            <th>Foto</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($certificates as $index => $certificate)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td style="font-size: 2rem;">{{ $certificate->icon }}</td>
            <td>
                @if($certificate->image)
                    <img src="{{ asset('images/' . $certificate->image) }}" alt="{{ $certificate->title }}" style="width: 80px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #ddd;">
                @else
                    <span style="color: #999;">-</span>
                @endif
            </td>
            <td>{{ $certificate->title }}</td>
            <td>
                @if($certificate->category == 'kepanitiaan')
                    <span style="background: #8B4049; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">👥 Kepanitiaan</span>
                @elseif($certificate->category == 'lomba')
                    <span style="background: #D4A5A5; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">🏆 Lomba</span>
                @elseif($certificate->category == 'penghargaan')
                    <span style="background: #E8B4B8; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">🎓 Penghargaan</span>
                @else
                    <span style="background: #999; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">-</span>
                @endif
            </td>
            <td>{{ $certificate->issuer }}</td>
            <td>{{ $certificate->year }}</td>
            <td>
                <a href="{{ route('admin.certificates.edit', $certificate) }}" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus certificate ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" style="text-align: center; padding: 2rem; color: #999;">Belum ada data certificate</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection