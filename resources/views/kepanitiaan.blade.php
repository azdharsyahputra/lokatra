<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDM - Lokatara</title>
    <link rel="stylesheet" href="{{ asset('css/sdm.css') }}">
</head>
<body>
    @include('partials.navbar')

    <section class="hero">
        <div class="container">
            <h1>Struktur Kepanitiaan</h1>
            <p>Berikut adalah susunan panitia kegiatan Lokatara yang berperan penting dalam menyukseskan acara.</p>
        </div>
    </section>

    <section class="team-section container">
        <h2>Panitia Inti</h2>
        <div class="team-grid">
            <div class="team-card">
                <img src="{{ asset('images/bagas.jpg') }}" alt="Penanggung Jawab Teknis">
                <h3>Bagas Adji P</h3>
                <p>Penanggung Jawab Teknis</p>
            </div>
        </div>
        <div class="team-grid" style="margin-top: 20px;">
            <div class="team-card">
                <img src="{{ asset('images/bagas.jpg') }}" alt="Penanggung Jawab Teknis">
                <h3>Lorem ipsum dolor sit.</h3>
                <p>Ketua Pelaksana</p>
            </div>
            <div class="team-card">
                <img src="{{ asset('images/bagas.jpg') }}" alt="Penanggung Jawab Teknis">
                <h3>Lorem, ipsum dolor.</h3>
                <p>Wakil Ketua Pelaksana</p>
            </div>
        </div>
        <div class="team-grid" style="margin-top: 20px;">
            <div class="team-card">
                <img src="{{ asset('images/bagas.jpg') }}" alt="Penanggung Jawab Teknis">
                <h3>Lorem, ipsum dolor.
                </h3>
                <p>Wakil Sekretaris I</p>
            </div>
            <div class="team-card">
                <img src="{{ asset('images/bagas.jpg') }}" alt="Penanggung Jawab Teknis">
                <h3>Lorem, ipsum dolor.</h3>
                <p>Sekretaris</p>
            </div>
                        <div class="team-card">
                <img src="{{ asset('images/bagas.jpg') }}" alt="Penanggung Jawab Teknis">
                <h3>Lorem, ipsum dolor.</h3>
                <p>Wakil Sekretaris II</p>
            </div>
        </div>

        <h2>Koordinator Divisi</h2>
        <div class="team-grid">
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=5" alt="Koordinator Acara">
                <h3>Nurcholis Winarso</h3>
                <p>Koordiv. Lapangan</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=6" alt="Koordinator Dokumentasi">
                <h3>Isma Turrosidah</h3>
                <p>Koordiv. Rekapitulasi</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=7" alt="Koordinator Konsumsi">
                <h3>Ambar Syilfi</h3>
                <p>Koordiv. Administrasi</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=8" alt="Koordinator Perlengkapan">
                <h3>Nurmalasari</h3>
                <p>Koordiv. Logistik & Sapras</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=7" alt="Koordinator Konsumsi">
                <h3>Lorem, ipsum dolor.</h3>
                <p>Koordiv. Humas</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=8" alt="Koordinator Perlengkapan">
                <h3>Inayah Nur Azizah</h3>
                <p>Koordiv. Konsumsi</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=7" alt="Koordinator Konsumsi">
                <h3>Dhea Sapana</h3>
                <p>Koordiv. Mata Lomba</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=8" alt="Koordinator Perlengkapan">
                <h3>Lorem, ipsum dolor.</h3>
                <p>Koordiv. Keamanan & Kebersihan</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=7" alt="Koordinator Konsumsi">
                <h3>Lorem, ipsum dolor.</h3>
                <p>Koordiv. PubDekDok</p>
            </div>
            <div class="team-card">
                <img src="{{ asset('images/ajar.jpg') }}" alt="Koordinator Perlengkapan">
                <h3>Muhammad Azdhar S</h3>
                <p>Koordiv. ICT</p>
            </div>
        </div>
    </section>
    @include('partials.footer')
</body>
</html>
