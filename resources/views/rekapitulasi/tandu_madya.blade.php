<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Peserta</title>
  <link rel="stylesheet" href="{{ asset('css/rekapitulasi.css') }}">
</head>
<style>
  /* Judul kategori Putra, Putri, Campuran */
  .leaderboard-card h3 {
    background-color: blue !important;
    color: white;
    background-color: transparent;
    text-align: center;
    padding: 10px 0;
  }

  /* Header kolom tabel leaderboard */
  .table-leaderboard thead th {
    background-color: white !important;
    color: black !important;
  }

  /* Judul tabel Now Playing & Warming Up */
  .table-ongoing thead th,
  .table-waiting thead th {
    background-color: blue !important;
    color: white !important;
    text-align: center;
    padding: 10px;
  }
</style>
<body>
  <div class="main">
    @include('partials.navbar')
    <h1 style="margin-top: 70px; text-align: center;">Leaderboard Babak Penyisihan</h1>
    <div class="leaderboard-container">
  @foreach (['Putra', 'Putri', 'Campuran'] as $kategori)
    <div class="leaderboard-card">
      <h3>{{ $kategori }}</h3>
      <table class="table-leaderboard">
        <thead>
            <tr>
                <th class="col-urutan">Urutan</th>
                <th class="col-nama">Nama Sekolah</th>
                <th class="col-skor">Skor</th>
            </tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <= 30; $i++)
            <tr>
              <td>{{ $i }}</td>
              <td>Tim {{ $kategori }} {{ $i }}</td>
              <td>{{ rand(50, 100) }}</td>
            </tr>
          @endfor
        </tbody>
      </table>
    </div>
  @endforeach
</div>


    <!-- Tabel On Going -->
    <h2>Now Playing</h2>
    <table class="table-ongoing">
      <thead>
        <tr><th>Kompetisi Ketangkasan Tandu Darurat</th></tr>
      </thead>
      <tbody>
        <tr><td>Sesi 1</td></tr>
      </tbody>
    </table>

    <!-- Tabel Waiting -->
    <h2>Warming Up</h2>
    <table class="table-waiting">
      <thead>
        <tr><th>Kompetisi Ketangkasan Tandu Darurat</th></tr>
      </thead>
      <tbody>
        <tr><td>Sesi 2</td></tr>
      </tbody>
    </table>

<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Putra Madya</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 4' => '09:45 - 10:00',
      'Sesi 5' => '10:00 - 10:15',
      'Sesi 6' => '10:15 - 10:30',
    ];
  @endphp

  @foreach ($jamSesi as $judulSesi => $jam)
    <div class="sesi-card">
      <h3>{{ $judulSesi }}</h3>
      <p class="jam-sesi">{{ $jam }}</p>
      <table>
        <thead>
          <tr><th>Peserta</th></tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <= 10; $i++)
            <tr><td>Peserta {{ $judulSesi }} - {{ $i }}</td></tr>
          @endfor
        </tbody>
      </table>
    </div>
  @endforeach
</div>

<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Putri Madya</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 10' => '11:15 - 11:30',
      'Sesi 11' => '11:30 - 11:45',
      'Sesi 12' => '11:45 - 12:00',
    ];
  @endphp

  @foreach ($jamSesi as $judulSesi => $jam)
    <div class="sesi-card">
      <h3>{{ $judulSesi }}</h3>
      <p class="jam-sesi">{{ $jam }}</p>
      <table>
        <thead>
          <tr><th>Peserta</th></tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <= 10; $i++)
            <tr><td>Peserta {{ $judulSesi }} - {{ $i }}</td></tr>
          @endfor
        </tbody>
      </table>
    </div>
  @endforeach
</div>

<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Campuran Madya</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 16' => '13:45 - 14:00',
      'Sesi 17' => '14:00 - 14:15',
      'Sesi 18' => '14:15 - 14:30',
    ];
  @endphp

  @foreach ($jamSesi as $judulSesi => $jam)
    <div class="sesi-card">
      <h3>{{ $judulSesi }}</h3>
      <p class="jam-sesi">{{ $jam }}</p>
      <table>
        <thead>
          <tr><th>Peserta</th></tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <= 10; $i++)
            <tr><td>Peserta {{ $judulSesi }} - {{ $i }}</td></tr>
          @endfor
        </tbody>
      </table>
    </div>
  @endforeach
</div>

  <h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Final Madya</h1>
  <div class="sesi-container">
    @php
      $jamSesi = [
        'Sesi 20 Final Putra' => '14:45 - 15:00',
        'Sesi 22 Final Putri' => '15:15 - 15:30',
        'Sesi 24 Final Campuran' => '15:45 - 16:00',
      ];
    @endphp

    @foreach ($jamSesi as $judulSesi => $jam)
      <div class="sesi-card">
        <h3>{{ $judulSesi }}</h3>
        <p class="jam-sesi">{{ $jam }}</p>
        <table>
          <thead>
            <tr><th>Peserta</th></tr>
          </thead>
          <tbody>
            @for ($i = 1; $i <= 10; $i++)
              <tr><td>Peserta {{ $judulSesi }} - {{ $i }}</td></tr>
            @endfor
          </tbody>
        </table>
      </div>
    @endforeach
  </div>
</div>
@include('partials.footer')
</body>
</html>
