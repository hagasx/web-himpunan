<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AspirasiController as AdminAspirasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/divisi/{name}', function ($name) {
    $divisiData = [
        'pwti' => [
            'name' => 'PWTI',
            'desc' => 'Fokus pada riset, pelatihan coding, dan pengembangan perangkat lunak mahasiswa.',
            'icon' => 'bx-code-block',
            'ig' => '@hmit.uts',
            'programs' => ['Pelatihan Pemrograman Internal', 'Riset Teknologi Berkelanjutan', 'Partisipasi Lomba IT']
        ],
        'sosmas' => [
            'name' => 'Sosial Masyarakat',
            'desc' => 'Menjalin komunikasi yang baik dengan pihak internal maupun eksternal kampus.',
            'icon' => 'bx-share-alt',
            'ig' => '@hmit.uts',
            'programs' => ['Bakti Sosial Mahasiswa', 'Desa Binaan', 'Pengabdian Masyarakat']
        ],
        'ekraf' => [
            'name' => 'Ekonomi Kreatif',
            'desc' => 'Menciptakan peluang usaha mandiri yang berhubungan dengan teknologi informasi.',
            'icon' => 'bx-bulb',
            'ig' => '@hmit.uts',
            'programs' => ['Bazar IT', 'Pelatihan Kewirausahaan', 'Penjualan Merchandise']
        ],
        'kesor' => [
            'name' => 'Kesenian dan Olahraga',
            'desc' => 'Mewadahi kegiatan seni, olahraga, dan e-sports bagi para mahasiswa.',
            'icon' => 'bx-football',
            'ig' => '@hmit.uts',
            'programs' => ['Turnamen E-Sports Antar Kelas', 'Pekan Olahraga Jurusan', 'Malam Kesenian']
        ],
        'media' => [
            'name' => 'Media',
            'desc' => 'Mengelola publikasi, dokumentasi, dan penyebaran informasi kegiatan himpunan.',
            'icon' => 'bx-camera',
            'ig' => '@hmit.uts',
            'programs' => ['Pengelolaan Konten Media Sosial', 'Liputan Kegiatan', 'Desain Grafis Himpunan']
        ],
        'psdm' => [
            'name' => 'PSDM',
            'desc' => 'Merancang dan melaksanakan program pengembangan sumber daya serta kaderisasi mahasiswa.',
            'icon' => 'bx-group',
            'ig' => '@hmit.uts',
            'programs' => ['Masa Bimbingan Mahasiswa', 'Latihan Keterampilan Manajemen Mahasiswa (LKMM)', 'Upgrading Pengurus']
        ],
    ];

    if (!array_key_exists($name, $divisiData)) {
        abort(404);
    }

    return view('divisi', ['data' => $divisiData[$name]]);
});

Route::get('/aspirasi', [AspirasiController::class, 'index']);
Route::post('/aspirasi', [AspirasiController::class, 'store']);

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::post('/pendaftaran', [PendaftaranController::class, 'store']);

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin & Anggota Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Aspirasi Management (Accessible by both Admin and Anggota)
    Route::get('/admin/aspirasi', [AdminAspirasiController::class, 'index'])->name('admin.aspirasi.index');
    Route::delete('/admin/aspirasi/{aspirasi}', [AdminAspirasiController::class, 'destroy'])->name('admin.aspirasi.destroy');
    
    // User Management (Accessible only by Admin)
    Route::middleware('role:admin')->group(function () {
        Route::resource('admin/users', UserController::class)->names('admin.users')->except(['show']);
    });
});
