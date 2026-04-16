<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisi {{ $data['name'] }} - HMIT</title>
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
            <li><a href="/">Beranda</a></li>
            <li><a href="/#about">Tentang</a></li>
            <li><a href="/#divisi">Divisi</a></li>
            <li><a href="/#contact">Kontak</a></li>
        </ul>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <!-- Detail Divisi Section -->
    <section class="section" style="padding-top: 150px; min-height: 80vh;">
        <div class="glass-card" style="max-width: 800px; margin: 0 auto; text-align: center;">
            <i class='bx {{ $data['icon'] }} gold-text' style="font-size: 5rem; margin-bottom: 1rem;"></i>
            <h1 class="glow-text" style="font-size: 3rem; margin-bottom: 1rem;">Divisi <span class="gold-text">{{ $data['name'] }}</span></h1>
            <p style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 2rem;">{{ $data['desc'] }}</p>
            
            <div style="text-align: left; margin-bottom: 2rem;">
                <h3 style="color: var(--gold); margin-bottom: 1rem; font-size: 1.5rem;">Program Kerja Utama:</h3>
                <ul class="mission-list">
                    @foreach($data['programs'] as $program)
                        <li><i class='bx bx-check-circle gold-text'></i> {{ $program }}</li>
                    @endforeach
                </ul>
            </div>

            <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1); text-align: left;">
                <h3 style="margin-bottom: 1rem;">Hubungi Kami</h3>
                <a href="https://instagram.com/{{ ltrim($data['ig'], '@') }}" target="_blank" class="btn btn-gold" style="display: inline-flex; align-items: center; gap: 0.5rem; color: #000;">
                    <i class='bx bxl-instagram' style="font-size: 1.5rem;"></i> {{ $data['ig'] }}
                </a>
            </div>

            <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1); text-align: left;">
                <h3 style="margin-bottom: 1.5rem;">Dokumentasi Kegiatan</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.5); height: 200px; position: relative;">
                        <img src="{{ asset('images/dokumentasi/img1.png') }}" alt="Dokumentasi 1" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 10px; pointer-events: none;">
                            <span style="font-size: 0.8rem; font-weight: 600; color: #fff;">Kolaborasi Tim</span>
                        </div>
                    </div>
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.5); height: 200px; position: relative;">
                        <img src="{{ asset('images/dokumentasi/img2.png') }}" alt="Dokumentasi 2" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 10px; pointer-events: none;">
                            <span style="font-size: 0.8rem; font-weight: 600; color: #fff;">Hackathon Event</span>
                        </div>
                    </div>
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.5); height: 200px; position: relative;">
                        <img src="{{ asset('images/dokumentasi/img3.png') }}" alt="Dokumentasi 3" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 10px; pointer-events: none;">
                            <span style="font-size: 0.8rem; font-weight: 600; color: #fff;">Presentasi Karya</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="margin-top: 2rem;">
                <a href="/#divisi" style="color: var(--text-muted); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">
                    <i class='bx bx-left-arrow-alt'></i> Kembali ke Daftar Divisi
                </a>
            </div>
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
    </script>
</body>

</html>
