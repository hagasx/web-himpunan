@extends('layouts.admin')

@section('header', 'Manajemen Aspirasi')

@section('content')
<div class="glass-card" style="text-align: left;">
    <div style="margin-bottom: 20px;">
        <h3 style="margin: 0;">Daftar Aspirasi Masuk</h3>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="20%">Nama</th>
                    <th width="20%">Email</th>
                    <th width="35%">Pesan Aspirasi</th>
                    <th width="10%">Tanggal</th>
                    <th width="10%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($aspirasis as $index => $aspirasi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $aspirasi->nama ?? 'Anonim' }}</td>
                    <td>{{ $aspirasi->email ?? '-' }}</td>
                    <td>{{ Str::limit($aspirasi->pesan, 50) }}</td>
                    <td>{{ $aspirasi->created_at->format('d M Y') }}</td>
                    <td>
                        <form action="{{ route('admin.aspirasi.destroy', $aspirasi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus aspirasi ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-sm btn-danger">
                                <i class='bx bx-trash'></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <tr style="background: rgba(255, 255, 255, 0.01);">
                    <td colspan="6" style="padding: 10px 15px; border-bottom: 2px solid rgba(255, 215, 0, 0.1);">
                        <strong>Pesan Lengkap:</strong><br>
                        <span style="color: #ccc; font-style: italic;">"{{ $aspirasi->pesan }}"</span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: #aaa;">Belum ada aspirasi yang masuk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
