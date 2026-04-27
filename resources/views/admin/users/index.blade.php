@extends('layouts.admin')

@section('header', 'Manajemen Anggota')

@section('content')
<div class="glass-card" style="text-align: left;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="margin: 0;">Daftar Anggota Himpunan</h3>
        <a href="{{ route('admin.users.create') }}" class="btn btn-gold" style="padding: 8px 15px; font-size: 0.9rem; text-decoration: none;">
            <i class='bx bx-plus'></i> Tambah Anggota
        </a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Tanggal Terdaftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td style="text-transform: capitalize;">{{ $user->role }}</td>
                    <td>{{ $user->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn-sm btn-info" style="margin-right: 5px;">
                            <i class='bx bx-edit'></i> Edit
                        </a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-sm btn-danger">
                                <i class='bx bx-trash'></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: #aaa;">Belum ada data anggota.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
