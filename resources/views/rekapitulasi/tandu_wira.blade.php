<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Peserta</title>
  <link rel="stylesheet" href="{{ asset('css/rekapitulasi.css') }}">
</head>
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

<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Putra Wira</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 1' => '09:00 - 09:15',
      'Sesi 2' => '09:15 - 09:30',
      'Sesi 3' => '09:30 - 09:45',
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

<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Putri Wira</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 7' => '10:30 - 10:45',
      'Sesi 8' => '10:45 - 11:00',
      'Sesi 9' => '11:00 - 11:15',
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

<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Campuran Wira</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 13' => '13:00 - 13:15',
      'Sesi 14' => '13:15 - 13:30',
      'Sesi 15' => '13:30 - 13:45',
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
<h1 style="text-align: center;">Kompetisi Ketangkasan Tandu Darurat Final Wira</h1>
<div class="sesi-container">
  @php
    $jamSesi = [
      'Sesi 19 Final Putra' => '14:30 - 14:45',
      'Sesi 21 Final Putri' => '15:00 - 15:15',
      'Sesi 23 Final Campuran' => '15:30 - 15:45',
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
@include('partials.footer')
</div>
  
</body>
</html>
