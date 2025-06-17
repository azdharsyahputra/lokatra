<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertolongan Pertama</title>
    <link rel="stylesheet" href="{{ asset('css/pp.css') }}">
</head>
<body>
@include('partials.navbar')
<div class="container">
    <h1 style="text-align: center;">Pertolongan Pertama</h1>
    <!-- NOW PLAYING -->
    <section class="section">
        <h2>Now Playing</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>SMA Wira 1</td></tr>
                    <tr><td>2</td><td>SMA Wira 2</td></tr>
                </tbody>
            </table>
            <!-- Madya -->
            <table class="styled-table table-madya">
                <thead <thead style="background-color: blue;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>SMP Madya 1</td></tr>
                    <tr><td>2</td><td>SMP Madya 2</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- POS ISOLASI -->
    <section class="section">
        <h2>Pos Isolasi</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=10; $i++)
                    <tr><td>{{ $i }}</td><td>SMA {{ $i }}</td></tr>
                    @endfor
                </tbody>
            </table>
            <!-- Madya -->
            <table class="styled-table table-madya">
                <thead style="background-color: blue;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=10; $i++)
                    <tr><td>{{ $i }}</td><td>SMP {{ $i }}</td></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>

    <!-- SELESAI -->
    <section class="section">
        <h2>Selesai</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=10; $i++)
                    <tr><td>{{ $i }}</td><td>SMA {{ $i }}</td></tr>
                    @endfor
                </tbody>
            </table>
            <!-- Madya -->
            <table class="styled-table table-madya">
                <thead style="background-color: blue;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=10; $i++)
                    <tr><td>{{ $i }}</td><td>SMP {{ $i }}</td></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>

</div>

@include('partials.footer')

</body>
</html>
