<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Peserta Madya - Lokatara</title>
    <link rel="stylesheet" href="{{ asset('css/daftar_lomba.css') }}">
</head>
<body>
    @include('partials.navbar')
    <div class="main-container" style="padding-top: 100px;">
        <h2 style="text-align: center;">Pendaftaran Perlombaan Kategori Wira</h2>
        <div class="card-container">

            <a href="#" class="card daftar-btn" data-lomba="Pertolongan Pertama Putra">
                <h2>Pertolongan Pertama Putra</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Pertolongan Pertama Putri">
                <h2>Pertolongan Pertama Putri</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Remaja Sehat Peduli Sesama Putra">
                <h2>Remaja Sehat Peduli Sesama Putra</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Remaja Sehat Peduli Sesama Putri">
                <h2>Remaja Sehat Peduli Sesama Putri</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Young Dunant">
                <h2>Young Dunant</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Desain Poster">
                <h2>Desain Poster</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Cipta Karya Peduli Lingkungan">
                <h2>Cipta Karya Peduli Lingkungan</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Ketangkasan Tandu Darurat Putra">
                <h2>Ketangkasan Tandu Darurat Putra</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Ketangkasan Tandu Darurat Putri">
                <h2>Ketangkasan Tandu Darurat Putri</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Ketangkasan Tandu Darurat Campuran">
                <h2>Ketangkasan Tandu Darurat Campuran</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

            <a href="#" class="card daftar-btn" data-lomba="Tandu Darurat Tunggal">
                <h2>Tandu Darurat Tunggal</h2>
                <span style="background-color: #fff000; color: black;">Daftar Sekarang</span>
            </a>

        </div>
    </div>

    @include('partials.footer')
<!-- FORM DI DALAM MODAL (DIPERBARUI DENGAN STYLING DAN PREVIEW FOTO) -->
<div id="daftarModal" style="
    display:none; position:fixed; top:0; left:0; width:100vw; height:100vh;
    background:rgba(0,0,0,0.6); justify-content:center; align-items:center;
    z-index:9999; overflow:auto; padding:40px 0;
    box-sizing:border-box;
">
    <div style="
        background:#fff; padding:30px; border-radius:12px; width:90%; max-width:520px;
        position:relative; box-shadow:0 10px 25px rgba(0,0,0,0.2); font-family:sans-serif;
        animation: fadeIn 0.3s ease; max-height:95vh; overflow-y:auto;
    ">
        <button id="closeModal" style="
            position:absolute; top:12px; right:12px; background:#eee; border:none;
            border-radius:50%; width:32px; height:32px; font-size:20px;
            cursor:pointer; color:#333; transition:background 0.2s;">
            &times;
        </button>

        <h3 id="modalTitle" style="margin-bottom:20px; color:#333; text-align:center;">Daftar Lomba</h3>

        <form id="daftarForm" action="{{ route('submit.daftar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="lomba" id="lombaInput" value="">

            <div style="margin-bottom:15px;">
                <label for="namaSekolah" style="font-weight:600;">Nama Sekolah</label><br/>
                <input type="text" id="namaSekolah" name="nama_sekolah" style="
                    width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
            </div>

            <div style="margin-bottom:15px;">
                <label for="namaTim" style="font-weight:600;">Nama Tim</label><br/>
                <select id="namaTim" name="nama_tim" style="
                    width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                    <option value="" disabled selected>Pilih Nama Tim</option>
                    <option value="Tim A">Tim A</option>
                    <option value="Tim B">Tim B</option>
                    <option value="Tim C">Tim C</option>
                    <option value="Tim D">Tim D</option>
                    <option value="Tim E">Tim E</option>
                </select>
            </div>
            <div style="margin-bottom:15px; text-align:center;">
                <p style="font-weight:600; margin-bottom:8px;">Contoh Foto Peserta:</p>
                <img src="{{ asset('images/foto_wira.jpg') }}" alt="Contoh Foto" style="
                    max-width:100%; border:1px solid #ccc; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
            </div>
            <div id="pesertaFields" style="margin-bottom:15px;"></div>
            <p style="color: red;">*Pastikan Data Sudah Benar!</p>
            <button type="submit" style="
                background:#f39c12; color:#fff; border:none; padding:12px 20px;
                border-radius:6px; cursor:pointer; font-weight:bold; width:100%;
                transition:background 0.3s;">
                Kirim
            </button>
        </form>
    </div>
</div>


<style>
    @keyframes fadeIn {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }

    #closeModal:hover {
        background: #ddd;
    }

    input:focus {
        border-color: #f39c12;
        outline: none;
    }

    @media (max-width: 600px) {
        #daftarModal form {
            font-size: 14px;
        }
    }
</style>

<script>
    const modal = document.getElementById('daftarModal');
    const closeModalBtn = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const lombaInput = document.getElementById('lombaInput');
    const pesertaFields = document.getElementById('pesertaFields');

    const jumlahPesertaMap = {
        "Pertolongan Pertama Putra": 2,
        "Pertolongan Pertama Putri": 2,
        "Remaja Sehat Peduli Sesama Putra": 2,
        "Remaja Sehat Peduli Sesama Putri": 2,
        "Young Dunant": 1,
        "Desain Poster": 1,
        "Cipta Karya Peduli Lingkungan": 5,
        "Ketangkasan Tandu Darurat Putra": 2,
        "Ketangkasan Tandu Darurat Putri": 2,
        "Ketangkasan Tandu Darurat Campuran": 2,
        "Tandu Darurat Tunggal": 1,
    };

    function renderPesertaFields(jumlah) {
        pesertaFields.innerHTML = "";
        for (let i = 1; i <= jumlah; i++) {
            pesertaFields.innerHTML += `
                <div style="margin-bottom:10px;">
                    <label for="namaPeserta${i}">Nama Peserta ${i}</label><br/>
                    <input type="text" id="namaPeserta${i}" name="nama_peserta[]" style="width:100%; padding:8px;">
                </div>
            `;
        }
    }

    document.querySelectorAll('.daftar-btn').forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault();
            const lomba = link.getAttribute('data-lomba');
            modalTitle.textContent = `Daftar Lomba: ${lomba}`;
            lombaInput.value = lomba;

            const jumlahPeserta = jumlahPesertaMap[lomba] || 1;
            renderPesertaFields(jumlahPeserta);

            modal.style.display = 'flex';
        });
    });

    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', e => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
function renderPesertaFields(jumlah) {
    pesertaFields.innerHTML = "";
    for (let i = 1; i <= jumlah; i++) {
        pesertaFields.innerHTML += `
            <div style="margin-bottom:15px;">
                <label for="namaPeserta${i}" style="font-weight:600;">Nama Peserta ${i}</label><br/>
                <input type="text" id="namaPeserta${i}" name="nama_peserta[]"
                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
            </div>
            <div style="margin-bottom:15px;">
                <label for="fotoPeserta${i}" style="font-weight:600;">Upload Foto Peserta ${i}</label><br/>
                <input type="file" id="fotoPeserta${i}" name="foto_peserta[]" accept="image/*"
                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
                <div id="previewContainer${i}" style="margin-top:10px; text-align:center;">
                    <img id="previewImage${i}" src="" alt="Preview Foto Peserta ${i}" style="display:none; max-width:100%; border-radius:8px; margin-top:10px;">
                </div>
            </div>
        `;
    }

    // Pasang event listener preview untuk tiap input foto peserta
    for (let i = 1; i <= jumlah; i++) {
        const inputFile = document.getElementById(`fotoPeserta${i}`);
        const previewImg = document.getElementById(`previewImage${i}`);

        inputFile.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewImg.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewImg.src = '';
                previewImg.style.display = 'none';
            }
        });
    }
}

</script>

</body>
</html>
