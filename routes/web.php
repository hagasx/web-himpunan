<?php

use Illuminate\Support\Facades\Route;

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
