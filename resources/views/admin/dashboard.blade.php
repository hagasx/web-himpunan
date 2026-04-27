@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')
<div class="cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
    <div class="glass-card">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h3 style="margin-top: 0; color: #ccc;">Total Anggota</h3>
                <h2 style="font-size: 2.5rem; margin: 10px 0; color: #FFD700;">{{ $totalUsers }}</h2>
            </div>
            <i class='bx bx-group gold-text' style="font-size: 4rem; opacity: 0.5;"></i>
        </div>
    </div>
    
    <div class="glass-card">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h3 style="margin-top: 0; color: #ccc;">Total Aspirasi</h3>
                <h2 style="font-size: 2.5rem; margin: 10px 0; color: #FFD700;">{{ $totalAspirasi }}</h2>
            </div>
            <i class='bx bx-message-square-detail gold-text' style="font-size: 4rem; opacity: 0.5;"></i>
        </div>
    </div>
</div>

<div class="glass-card" style="margin-top: 30px; text-align: left;">
    <h3>Selamat Datang, {{ auth()->user()->name }}!</h3>
    <p>Ini adalah halaman panel kontrol Himpunan Mahasiswa Informatika (HMIT). Di sini Anda dapat mengelola data sesuai dengan peran (role) yang Anda miliki.</p>
    <ul>
        @if(auth()->user()->role === 'admin')
        <li><strong>Admin:</strong> Memiliki akses penuh untuk menambah, mengedit, dan menghapus data anggota himpunan, serta mengelola semua aspirasi yang masuk.</li>
        @else
        <li><strong>Anggota:</strong> Memiliki akses untuk melihat dan mengelola kotak aspirasi.</li>
        @endif
    </ul>
</div>
@endsection
