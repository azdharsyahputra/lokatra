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
    <h1 style="text-align: center;">Young Dunant</h1>
    <section class="section">
        <h2>Peserta Babak Penyisihan</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=50; $i++)
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
                    @for($i=1; $i<=50; $i++)
                    <tr><td>{{ $i }}</td><td>SMP {{ $i }}</td></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>

    <section class="section">
        <h2>Lolos Babak Penyisihan</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th><th>Score</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=25; $i++)
                    <tr><td>{{ $i }}</td><td>SMA {{ $i }}</td><th></th></tr>
                    @endfor
                </tbody>
            </table>
            <!-- Madya -->
            <table class="styled-table table-madya">
                <thead style="background-color: blue;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th><th>Score</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=25; $i++)
                    <tr><td>{{ $i }}</td><td>SMP {{ $i }}</td><th></th></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>
    <section class="section">
        <h2>Lolos Babak Benar Salah</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th><th>Score</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=9; $i++)
                    <tr><td>{{ $i }}</td><td>SMA {{ $i }}</td><th></th></tr>
                    @endfor
                </tbody>
            </table>
            <!-- Madya -->
            <table class="styled-table table-madya">
                <thead style="background-color: blue;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th><th>Score</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=9; $i++)
                    <tr><td>{{ $i }}</td><td>SMP {{ $i }}</td><th></th></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>
    <section class="section">
        <h2>Juara Young Dunant</h2>
        <div class="tables-row">
            <!-- Wira -->
            <table class="styled-table table-wira">
                <thead style="background-color: yellow;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th><th>Score</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=9; $i++)
                    <tr><td>{{ $i }}</td><td>SMA {{ $i }}</td><th></th></tr>
                    @endfor
                </tbody>
            </table>
            <!-- Madya -->
            <table class="styled-table table-madya">
                <thead style="background-color: blue;">
                    <tr><th class="col-no">No</th><th>Asal Sekolah</th><th>Score</th></tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=9; $i++)
                    <tr><td>{{ $i }}</td><td>SMP {{ $i }}</td><th></th></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </section>

</div>

@include('partials.footer')

</body>
</html>
