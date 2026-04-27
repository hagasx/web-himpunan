<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himpunan Mahasiswa Informatika</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <!-- Navbar -->
    <nav class="navbar glass">
        <div class="logo">
            <i class='bx bx-code-alt'></i> HMIT
        </div>
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#divisi">Divisi</a></li>
            <li><a href="/pendaftaran">Daftar Anggota</a></li>
            <li><a href="/aspirasi">Aspirasi</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content glass-card">
            <h1 class="glow-text">Himpunan Mahasiswa <span class="gold-text">Informatika</span></h1>
            <p>Sinergi, Inovasi, dan Prestasi untuk Mewujudkan Teknologi Masa Depan.</p>
            <a href="#about" class="btn btn-gold">Kenali Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2 class="section-title">Tentang <span class="gold-text">Kami</span></h2>
        <div class="about-grid">
            <div class="glass-card full-width">
                <h3>Sejarah Singkat</h3>
                <p>Himpunan Mahasiswa Informatika (HMIT) merupakan wadah berkumpulnya para mahasiswa yang memiliki visi
                    dan orientasi dalam pengembangan teknologi di bidang informatika. Kami senantiasa menyelenggarakan
                    program dan pelatihan untuk membekali anggota dengan hard-skill maupun soft-skill di era digital.
                </p>
            </div>
            <div class="glass-card">
                <h3>Visi</h3>
                <p>Menjadi himpunan mahasiswa yang unggul, inovatif, dan menjadi pionir dalam pengembangan teknologi
                    informatika di tingkat nasional, serta berjiwa sosial tinggi.</p>
            </div>
            <div class="glass-card">
                <h3>Misi</h3>
                <ul class="mission-list">
                    <li><i class='bx bx-check-circle gold-text'></i> Meningkatkan kompetensi akademik dan non-akademik
                        mahasiswa.</li>
                    <li><i class='bx bx-check-circle gold-text'></i> Mengadakan kegiatan riset dan inovasi di bidang IT.
                    </li>
                    <li><i class='bx bx-check-circle gold-text'></i> Menjalin kerjasama solid dengan alumni dan
                        perusahaan industri.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Divisi Section -->
    <section id="divisi" class="section">
        <h2 class="section-title">Divisi <span class="gold-text">& Departemen</span></h2>
        <div class="cards-grid">
            <a href="/divisi/pwti" style="text-decoration: none; color: inherit; display: block;">
                <div class="glass-card hover-card" style="height: 100%;">
                    <i class='bx bx-code-block card-icon gold-text'></i>
                    <h3>PWTI</h3>
                    <p>Fokus pada riset, pelatihan coding, dan pengembangan perangkat lunak mahasiswa.</p>
                </div>
            </a>
            <a href="/divisi/sosmas" style="text-decoration: none; color: inherit; display: block;">
                <div class="glass-card hover-card" style="height: 100%;">
                    <i class='bx bx-share-alt card-icon gold-text'></i>
                    <h3>Sosial Masyarakat</h3>
                    <p>Menjalin komunikasi yang baik dengan pihak internal maupun eksternal kampus.</p>
                </div>
            </a>
            <a href="/divisi/ekraf" style="text-decoration: none; color: inherit; display: block;">
                <div class="glass-card hover-card" style="height: 100%;">
                    <i class='bx bx-bulb card-icon gold-text'></i>
                    <h3>Ekonomi Kreatif</h3>
                    <p>Menciptakan peluang usaha mandiri yang berhubungan dengan teknologi informasi.</p>
                </div>
            </a>
            <a href="/divisi/kesor" style="text-decoration: none; color: inherit; display: block;">
                <div class="glass-card hover-card" style="height: 100%;">
                    <i class='bx bx-football card-icon gold-text'></i>
                    <h3>Kesenian dan Olahraga</h3>
                    <p>Mewadahi kegiatan seni, olahraga, dan e-sports bagi para mahasiswa.</p>
                </div>
            </a>
            <a href="/divisi/media" style="text-decoration: none; color: inherit; display: block;">
                <div class="glass-card hover-card" style="height: 100%;">
                    <i class='bx bx-camera card-icon gold-text'></i>
                    <h3>Media</h3>
                    <p>Mengelola publikasi, dokumentasi, dan penyebaran informasi kegiatan himpunan.</p>
                </div>
            </a>
            <a href="/divisi/psdm" style="text-decoration: none; color: inherit; display: block;">
                <div class="glass-card hover-card" style="height: 100%;">
                    <i class='bx bx-group card-icon gold-text'></i>
                    <h3>PSDM</h3>
                    <p>Merancang dan melaksanakan program pengembangan sumber daya serta kaderisasi mahasiswa.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer / Contact -->
    <footer id="contact" class="glass-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <h2><i class='bx bx-code-alt gold-text'></i> HMIT</h2>
                <p>Menciptakan masa depan melalui satu baris kode.</p>
            </div>
            <div class="footer-social">
                <a href="https://www.instagram.com/hmit.uts/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Himpunan Mahasiswa Informatika. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Particles.js Library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Particles.js Config
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#FFD700" // Gold color
                },
                "shape": {
                    "type": "circle",
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                },
                "size": {
                    "value": 3,
                    "random": true,
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#FFD700",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                }
            },
            "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "push": {
                        "particles_nb": 4
                    }
                }
            },
            "retina_detect": true
        });

        // Mobile Menu Toggle
        const menuToggle = document.querySelector('#mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                // Close mobile menu on click
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>

</html>