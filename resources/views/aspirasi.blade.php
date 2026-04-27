<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Aspirasi - HMIT</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .form-container {
            max-width: 600px;
            margin: 120px auto 50px auto;
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #fff;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 8px;
            color: #fff;
            font-family: 'Outfit', sans-serif;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #FFD700;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.2);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .alert-success {
            background: rgba(40, 167, 69, 0.2);
            border: 1px solid rgba(40, 167, 69, 0.5);
            color: #28a745;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <!-- Navbar -->
    <nav class="navbar glass">
        <div class="logo">
            <a href="/" style="text-decoration: none; color: inherit;">
                <i class='bx bx-code-alt'></i> HMIT
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/#about">Tentang</a></li>
            <li><a href="/#divisi">Divisi</a></li>
            <li><a href="/#contact">Kontak</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <div class="container text-center" style="position: relative; z-index: 10;">
        <div class="glass-card form-container">
            <h2 class="section-title" style="margin-bottom: 1rem;">Kotak <span class="gold-text">Aspirasi</span></h2>
            <p style="margin-bottom: 2rem;">Sampaikan masukan, saran, atau kritik Anda untuk HMIT yang lebih baik.</p>

            @if(session('success'))
                <div class="alert-success">
                    <i class='bx bx-check-circle'></i> {{ session('success') }}
                </div>
            @endif

            <form action="/aspirasi" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama (Opsional)</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda">
                </div>
                
                <div class="form-group">
                    <label for="email">Email (Opsional)</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda">
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan Aspirasi <span class="gold-text">*</span></label>
                    <textarea id="pesan" name="pesan" class="form-control" placeholder="Tuliskan aspirasi Anda di sini..." required></textarea>
                </div>

                <button type="submit" class="btn btn-gold" style="width: 100%; border: none; cursor: pointer; padding: 12px; font-family: 'Outfit', sans-serif; font-size: 1.1rem; font-weight: 600;">Kirim Aspirasi</button>
            </form>
        </div>
    </div>

    <!-- Particles.js Library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
                "color": { "value": "#FFD700" },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.5, "random": false },
                "size": { "value": 3, "random": true },
                "line_linked": { "enable": true, "distance": 150, "color": "#FFD700", "opacity": 0.2, "width": 1 },
                "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
            },
            "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": { "enable": true, "mode": "grab" },
                    "onclick": { "enable": true, "mode": "push" },
                    "resize": true
                },
                "modes": {
                    "grab": { "distance": 140, "line_linked": { "opacity": 1 } },
                    "push": { "particles_nb": 4 }
                }
            },
            "retina_detect": true
        });
    </script>
</body>

</html>
