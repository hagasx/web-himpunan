<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - HMIT</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: rgba(25, 25, 35, 0.8);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 215, 0, 0.2);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 215, 0, 0.1);
        }

        .sidebar-header h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        .nav-menu {
            list-style: none;
            padding: 20px 0;
            margin: 0;
            flex-grow: 1;
        }

        .nav-menu li {
            padding: 0 15px;
            margin-bottom: 10px;
        }

        .nav-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: #ccc;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-menu a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .nav-menu a:hover, .nav-menu a.active {
            background: rgba(255, 215, 0, 0.1);
            color: #FFD700;
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255, 215, 0, 0.1);
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            margin-left: 250px;
            padding: 30px;
            position: relative;
            z-index: 10;
        }

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: rgba(40, 167, 69, 0.2);
            border: 1px solid rgba(40, 167, 69, 0.5);
            color: #28a745;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .alert-error {
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid rgba(220, 53, 69, 0.5);
            color: #ff4d4d;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        th {
            background: rgba(255, 215, 0, 0.05);
            color: #FFD700;
            font-weight: 600;
        }
        tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 0.85rem;
            border-radius: 4px;
        }
        .btn-danger {
            background: rgba(220, 53, 69, 0.8);
            color: #fff;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-danger:hover {
            background: rgba(220, 53, 69, 1);
        }
        .btn-info {
            background: rgba(23, 162, 184, 0.8);
            color: #fff;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-info:hover {
            background: rgba(23, 162, 184, 1);
        }
    </style>
</head>

<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2><i class='bx bx-code-alt gold-text'></i> HMIT Panel</h2>
        </div>
        <ul class="nav-menu">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class='bx bx-home-alt'></i> Dashboard
                </a>
            </li>
            @if(auth()->user()->role === 'admin')
            <li>
                <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class='bx bx-group'></i> Kelola Anggota
                </a>
            </li>
            @endif
            <li>
                <a href="{{ route('admin.aspirasi.index') }}" class="{{ request()->routeIs('admin.aspirasi.*') ? 'active' : '' }}">
                    <i class='bx bx-message-square-detail'></i> Kelola Aspirasi
                </a>
            </li>
            <li>
                <a href="/" target="_blank">
                    <i class='bx bx-globe'></i> Lihat Website
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-gold" style="width: 100%; border: none; cursor: pointer; padding: 10px; font-family: 'Outfit', sans-serif;">
                    <i class='bx bx-log-out'></i> Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-header">
            <div>
                <h3 style="margin: 0;">@yield('header', 'Dashboard')</h3>
            </div>
            <div class="user-info">
                <div style="text-align: right;">
                    <strong style="display: block;">{{ auth()->user()->name }}</strong>
                    <span style="font-size: 0.8rem; color: #FFD700; text-transform: capitalize;">{{ auth()->user()->role }}</span>
                </div>
                <div style="font-size: 2rem; color: #FFD700;">
                    <i class='bx bx-user-circle'></i>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert-success">
                <i class='bx bx-check-circle'></i> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert-error">
                <i class='bx bx-error-circle'></i> {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Particles.js Library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": { "value": 50, "density": { "enable": true, "value_area": 800 } },
                "color": { "value": "#FFD700" },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.3, "random": false },
                "size": { "value": 3, "random": true },
                "line_linked": { "enable": true, "distance": 150, "color": "#FFD700", "opacity": 0.1, "width": 1 },
                "move": { "enable": true, "speed": 1, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
            },
            "interactivity": { "detect_on": "window", "events": { "onhover": { "enable": false }, "onclick": { "enable": false }, "resize": true } },
            "retina_detect": true
        });
    </script>
</body>

</html>
