<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="{{ asset('css/tandu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/tunggal.css') }}">
  <title>Document</title>
</head>
<body>

@include('partials.navbar')

<div class="main">
  <h1 class="wira-title">Tandu Darurat Tunggal Tercepat Wira</h1>
  <div class="top-peserta">
    @for ($i = 1; $i <= 9; $i++)
      <div class="card">
        <h3>Peserta Wira {{ $i }}</h3>
        @php
        $minutes = rand(1, 9);
        $seconds = rand(0, 59);
        $milliseconds = rand(0, 99);
        @endphp
        <p>Waktu: {{ sprintf('%02d:%02d.%02d', $minutes, $seconds, $milliseconds) }}</p>
      </div>
    @endfor
  </div>

  <h1 class="madya-title">Tandu Darurat Tunggal Tercepat Madya</h1>
  <div class="top-peserta">
    @for ($i = 1; $i <= 9; $i++)
      <div class="card">
        <h3>Peserta Madya {{ $i }}</h3>
        @php
        $minutes = rand(1, 9);
        $seconds = rand(0, 59);
        $milliseconds = rand(0, 99);
        @endphp
        <p>Waktu: {{ sprintf('%02d:%02d.%02d', $minutes, $seconds, $milliseconds) }}</p>

      </div>
    @endfor
  </div>
</div>
<h2 class="sesi-title">Sesi Wira & Sesi Madya</h2>
<div class="sesi-grid">
  <!-- Sesi Wira -->
  <div class="sesi-card">
    <h3 class="wira-title">Sesi Wira</h3>
    <table class="sesi-table wira-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Asal Sekolah</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 1; $i <= 30; $i++)
          <tr>
            <td>{{ $i }}</td>
            <td>Sekolah Wira {{ $i }}</td>
          </tr>
        @endfor
      </tbody>
    </table>
  </div>

  <!-- Sesi Madya -->
  <div class="sesi-card">
    <h3 class="madya-title">Sesi Madya</h3>
    <table class="sesi-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Asal Sekolah</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 1; $i <= 30; $i++)
          <tr>
            <td>{{ $i }}</td>
            <td>Sekolah Madya {{ $i }}</td>
          </tr>
        @endfor
      </tbody>
    </table>
  </div>
  @include('partials.footer')
</div>

</body>
</html>
