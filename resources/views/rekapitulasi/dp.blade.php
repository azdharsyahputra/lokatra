<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dp.css') }}">
    <title>Document</title>
</head>
<body>

    @include('partials.navbar')

    <div class="container">
        <h2 class="table-title">Desain Poster</h2>
        <table class="school-table">
            <thead>
                <tr>
                    <th>Nama Sekolah</th>
                    <th>Waktu</th>
                    <th>Nama Sekolah</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="school">SMA Negeri 1</td>
                    <td class="time"></td>
                    <td class="school">SMA Negeri 2</td>
                    <td class="time"></td>
                </tr>
                <tr>
                    <td class="school">SMA Negeri 3</td>
                    <td class="time"></td>
                    <td class="school">SMA Negeri 4</td>
                    <td class="time"></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
