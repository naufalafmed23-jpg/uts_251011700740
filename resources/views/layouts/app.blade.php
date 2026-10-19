<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Mainan Anak')</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; color: #fd7e14 !important; }
        
        /* Pengaturan Gambar Kartu Agar Kecil & Utuh */
        .card-img-top { 
            height: 100px; 
            object-fit: contain; 
            padding: 10px;
            background-color: #fff;
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('toys.index') }}">
                <i class="bi bi-controller me-2"></i>KidToys Store
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('toys.index') }}">Katalog Mainan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Header -->
    <header class="bg-primary text-white py-4 mb-4 shadow-sm">
        <div class="container text-center">
            <h1 class="h3 fw-bold">Katalog Toko Mainan Anak</h1>
            <p class="mb-0">Ujian Tengah Semester (UTS) Rekayasa Web - Universitas Pamulang</p>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2026 Toko Mainan Anak - Sistem Informasi S-1</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>