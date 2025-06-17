<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sekolah - Lokatara</title>
    <link rel="stylesheet" href="{{ asset('css/sdm.css') }}">
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        .lomba-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .lomba-table th, .lomba-table td {
            padding: 8px;
            border: 1px solid #ccc;
        }
        .lomba-table input {
            width: 95%;
            padding: 6px;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container" style="max-width: 700px; margin: 40px auto;">
        <h2 style="text-align:center; margin-bottom: 20px;">Form Pendaftaran Sekolah Wira</h2>
        <form action="{{ route('pendaftaran.daftar-sekolah') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama_sekolah" style="font-weight:600;">Nama Sekolah</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
            </div>

            <div class="form-group">
                <label for="nama_pendaftar" style="font-weight:600;">Nama Pendaftar</label>
                <input type="text" id="nama_pendaftar" name="nama_pendaftar" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
            </div>

            <div class="form-group">
                <label style="font-weight:600;">Perlombaan yang Diikuti (Jumlah Tim)</label>
                <table class="lomba-table">
                    <thead>
                        <tr>
                            <th>Mata Lomba</th>
                            <th>Jumlah Tim</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Pertolongan Pertama Putra</td>
                                <td><input type="number" name="jumlah_tim[pp_putra]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Pertolongan Pertama Putri</td>
                                <td><input type="number" name="jumlah_tim[pp_putri]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Remaja Sehat Peduli Sesama Putra</td>
                                <td><input type="number" name="jumlah_tim[rsps_putra]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Remaja Sehat Peduli Sesama Putri</td>
                                <td><input type="number" name="jumlah_tim[rsps_putri]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Young Dunant</td>
                                <td><input type="number" name="jumlah_tim[young_dunant]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Desain Poster</td>
                                <td><input type="number" name="jumlah_tim[desain_poster]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Cipta Karya Peduli Lingkungan</td>
                                <td><input type="number" name="jumlah_tim[cipta_karya]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Ketangkasan Tandu Darurat Putra</td>
                                <td><input type="number" name="jumlah_tim[tandu_putra]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Ketangkasan Tandu Darurat Putri.</td>
                                <td><input type="number" name="jumlah_tim[tandu_putri]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Ketangkasan Tandu Darurat Campuran</td>
                                <td><input type="number" name="jumlah_tim[tandu_campuran]" min="0" required></td>
                            </tr>
                            <tr>
                                <td>Tandu Darurat Tunggal</td>
                                <td><input type="number" name="jumlah_tim[tandu_tunggal]" min="0" required></td>
                            </tr>
                        </tbody>
                    </table>

            </div>

            <div class="form-group">
                <label for="kontak_pendaftar" style="font-weight:600;">Kontak Pendaftar (No HP/WA)</label>
                <input type="text" id="kontak_pendaftar" name="kontak_pendaftar" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
            </div>

            <div class="form-group">
                <label for="surat_tugas" style="font-weight:600;">Upload Surat Tugas Sekolah</label>
                <input type="file" id="surat_tugas" name="surat_tugas" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>

            <div class="form-group">
                <label for="bukti_pmr" style="font-weight:600;">Upload Bukti Keanggotaan PMR</label>
                <input type="file" id="bukti_pmr" name="bukti_pmr" accept=".pdf,.jpg,.jpeg,.png" required>
            </div>
            <p style="color: red;">*Pastikan Data Sudah Benar!</p>
            <button type="submit"
                style="background-color:#28a745; color:white; padding:10px 20px; border:none; border-radius:6px; cursor:pointer;">
                Daftar
            </button>
        </form>
    </div>

    @include('partials.footer')
</body>
</html>
