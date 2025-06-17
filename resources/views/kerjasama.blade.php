<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kerjasama - Lokatara</title>
    <link rel="stylesheet" href="{{ asset('css/kerjasama.css') }}">
</head>
<body>
    @include('partials.navbar')

    <section class="kerjasama-hero">
        <div class="container">
            <h1>Kerjasama Strategis</h1>
            <p>Membangun sinergi bersama untuk kesuksesan perlombaan dan informasi yang berkualitas.</p>
        </div>
    </section>

    <section class="kerjasama-info container">
        <img src="{{ asset('images/sponsor.jpg') }}" alt="sponsor" class="full-width-img">
        <h2>Kenapa Kerjasama dengan Kami?</h2>
        <div class="info-cards">
            <div class="card">
                <h3>Jangkauan Luas</h3>
                <p>Kami memiliki jaringan sekolah dan komunitas perlombaan yang luas di berbagai daerah.</p>
            </div>
            <div class="card">
                <h3>Profesional & Terpercaya</h3>
                <p>Tim kami berpengalaman dalam mengelola acara dan informasi yang transparan.</p>
            </div>
            <div class="card">
                <h3>Dukungan Penuh</h3>
                <p>Kami siap memberikan support teknis dan promosi agar kerjasama berjalan lancar.</p>
            </div>
        </div>
    </section>

    <section class="sponsor-section container">
        <h2>Daftar Sponsor Kami</h2>
        <div class="sponsor-cards">
            <div class="sponsor-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo" />
                <p>Amazon</p>
            </div>
            <div class="sponsor-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft Logo" />
                <p>Microsoft</p>
            </div>
            <div class="sponsor-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Google_Logo.svg" alt="Google Logo" />
                <p>Google</p>
            </div>
            <div class="sponsor-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple Logo" />
                <p>Apple</p>
            </div>
            <div class="sponsor-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Facebook_Logo_2023.png" alt="Meta (Facebook) Logo" />
                <p>Meta (Facebook)</p>
            </div>
        </div>
    </section>
    @include('partials.footer')
</body>
</html>
