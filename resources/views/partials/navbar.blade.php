<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Document</title>
</head>
<body>
<div class="main">
<div class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo1.jpg') }}" alt="Logo 1" class="logo"></a>
    </div>
        <a href="{{ route('tentang') }}">Tentang Kami</a>

    <div class="dropdown">
        <button class="dropbtn">Administrasi ▾</button>
        <div class="dropdown-content">
            <a href="{{ asset('files/und.docx') }}" download>Surat Undangan</a>
            <a href="{{ asset('files/') }}" download>Surat Rekomendasi Kegiatan</a>
            <a href="{{ asset('files/jkjn.pdf') }}" download>Petunjuk Pelaksanaan & Petunjuk Teknis</a>
            <a href="{{ asset('files/') }}" download>Hasil Taklimat</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Pendaftaran ▾</button>
        <div class="dropdown-content">
            <div class="dropdown-submenu">
                <a class="submenu-toggle" href="#">Daftar Sekolah ▸</a>
                <div class="dropdown-content-sub">
                    <a href="{{ route('pendaftaran.daftar-sekolah-wira') }}">Wira</a>
                    <a href="{{ route('pendaftaran.daftar-sekolah-madya') }}">Madya</a>
                </div>
            </div>
            <div class="dropdown-submenu">
                <a class="submenu-toggle" href="#">Daftar Perlombaan ▸</a>
                <div class="dropdown-content-sub">
                    <a href="{{ route('pendaftaran.wira') }}">Wira</a>
                    <a href="{{ route('pendaftaran.madya') }}">Madya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">SDM ▾</button>
        <div class="dropdown-content">
            <a href="{{ route('kepanitiaan') }}">Kepanitiaan</a>
            <a href="{{ route('juri') }}">Juri</a>
            <a href="{{ route('keamanan') }}">Tim Satgas Keamanan & Kebersihan</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Rekapitulasi ▾</button>
        <div class="dropdown-content">
            <a href="{{ route('rekapitulasi.pertolongan-pertama') }}">Pertolongan Pertama</a>
            <a href="{{ route('rekapitulasi.rsps') }}">Remaja Sehat Peduli Sesama</a>
            <a href="{{ route('rekapitulasi.yd') }}">Young Dunant</a>
            <a href="{{ route('rekapitulasi.dp') }}">Desain Poster</a>
            <a href="{{ route('rekapitulasi.ckpl') }}">Cipta Karya Peduli Lingkungan</a>
            <div class="dropdown-submenu">
                <a class="submenu-toggle" href="#">Kompetisi Ketangkasan Tandu Darurat ▸</a>
                <div class="dropdown-content-sub">
                    <a href="{{ route('rekapitulasi.tandu.wira') }}">Wira</a>
                    <a href="{{ route('rekapitulasi.tandu.madya') }}">Madya</a>
                </div>
            </div>
            <a href="{{ route('rekapitulasi.tandu_tunggal') }}">Tandu Darurat Tunggal</a>
        </div>
    </div>

    <a href="{{ route('kerjasama') }}">Kerjasama</a>

<div class="auth-buttons">
    <a href="{{ route('login') }}" class="login-btn">Login Juri</a>
    <a href="{{ route('register') }}" class="register-btn" style="background-color: #ff0000 !important; height: 50px !important; border-radius: 5px;">Daftar Lokatara</a>
</div>
</div>
</div>
</body>
</html>