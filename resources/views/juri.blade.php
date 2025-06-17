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
            <h1>Daftar Juri</h1>
            <p>Berikut adalah Daftar Juri kegiatan Lokatara yang berperan penting dalam menyukseskan acara.</p>
        </div>
    </section>

    <section class="team-section container">
        <h2>Panitia Inti</h2>
        <div class="team-grid">
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=1" alt="Ketua Panitia">
                <h3>Rizky Andika</h3>
                <p>Ketua Panitia</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=2" alt="Wakil Ketua">
                <h3>Nadia Rahma</h3>
                <p>Wakil Ketua</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=3" alt="Sekretaris">
                <h3>Alif Prasetyo</h3>
                <p>Sekretaris</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=4" alt="Bendahara">
                <h3>Salsabila Putri</h3>
                <p>Bendahara</p>
            </div>
        </div>

        <h2>Koordinator Divisi</h2>
        <div class="team-grid">
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=5" alt="Koordinator Acara">
                <h3>Fajar Maulana</h3>
                <p>Koordinator Acara</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=6" alt="Koordinator Dokumentasi">
                <h3>Anisa Wulandari</h3>
                <p>Koordinator Dokumentasi</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=7" alt="Koordinator Konsumsi">
                <h3>Arif Nugroho</h3>
                <p>Koordinator Konsumsi</p>
            </div>
            <div class="team-card">
                <img src="https://i.pravatar.cc/150?img=8" alt="Koordinator Perlengkapan">
                <h3>Dina Kartika</h3>
                <p>Koordinator Perlengkapan</p>
            </div>
        </div>
    </section>
    @include('partials.footer')
</body>
</html>
