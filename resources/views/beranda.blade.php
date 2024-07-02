
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset('beranda/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('beranda/css/Hero-Clean-images.css')}}">
    <link rel="stylesheet" href="{{asset('beranda/css/Hero-Features-icons.css')}}">
    <link rel="stylesheet" href="{{asset('beranda/css/Search-Input-Responsive-with-Icon.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-body">
        <div class="container-fluid"><a class="navbar-brand" href="#">My Library</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-start d-lg-flex justify-content-lg-center" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Buku</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-img">
                        <img src="{{asset('beranda/img/buku.jpg')}}" class="img-fluid rounded" alt="Buku">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="hero-content">
                        <h1 class="fw-bold">Selamat Datang di My Library</h1>
                        <p class="my-4">Temukan berbagai koleksi buku terbaru kami dan mulai petualangan literasi Anda.</p>
                        <a href="#" class="btn btn-primary btn-lg">Cari Buku Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="fitur">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-lg-6 text-center mx-auto">
                    <h2>Apa yang Kami Tawarkan</h2>
                    <p class="my-3">Jelajahi fitur-fitur unggulan dari My Library yang dapat memudahkan Anda dalam mencari dan menikmati buku-buku favorit.</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="fitur-item text-center">
                        <div class="fitur-icon">
                            <i class="bi bi-book-fill"></i>
                        </div>
                        <h4>Koleksi Buku Luas</h4>
                        <p>Temukan ribuan judul buku dari berbagai genre dan penulis terkenal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">

                    <div class="fitur-item text-center">
                        <div class="fitur-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4>Histori Browsing</h4>
                        <p>Simpan histori pencarian dan buku-buku yang Anda minati untuk referensi selanjutnya.</p>
                    </div>
                </div>

                </div>
                <div class="col-md-4">
                    <div class="fitur-item text-center">
                        <div class="fitur-icon">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <h4>Ulasan dan Rekomendasi</h4>
                        <p>Berbagi ulasan buku favorit Anda dan temukan rekomendasi bacaan menarik dari komunitas kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a class="link-light" href="#">My Library</a></li>

            </ul>

        </div>
    </footer>
    <script src="{{asset('beranda/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
