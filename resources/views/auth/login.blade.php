<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HMIT</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 2.5rem;
            text-align: center;
            position: relative;
            z-index: 10;
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
            padding: 12px 15px;
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

        .alert-error {
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid rgba(220, 53, 69, 0.5);
            color: #ff4d4d;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: left;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <div class="glass-card login-container">
        <div style="font-size: 3rem; margin-bottom: 1rem;" class="gold-text">
            <i class='bx bx-user-circle'></i>
        </div>
        <h2 style="margin-bottom: 1.5rem;">Login <span class="gold-text">Sistem</span></h2>

        @if ($errors->any())
            <div class="alert-error">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-gold" style="width: 100%; border: none; cursor: pointer; padding: 12px; font-family: 'Outfit', sans-serif; font-size: 1.1rem; font-weight: 600; margin-top: 10px;">Login</button>
        </form>
        <p style="margin-top: 1.5rem; font-size: 0.9rem;">
            <a href="/" style="color: #FFD700; text-decoration: none;"><i class='bx bx-arrow-back'></i> Kembali ke Beranda</a>
        </p>
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
