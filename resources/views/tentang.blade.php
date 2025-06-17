<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
    <title>Document</title>
</head>
<body>
<div class="main">
@include('partials.navbar')
    <div class="jumbotron-carousel">
        <div class="overlay-text">
            <h1 style="font-size: 40px !important;">PMR SMKN 1 KARAWANG</h1>
        </div>
        <div class="jumbotron-carousel">
          <div class="slides">
            <img src="{{ asset('images/ttg1.jpg') }}" alt="Slide 1">
            <img src="{{ asset('images/ttg2.jpg') }}" alt="Slide 2">
            <img src="{{ asset('images/ttg3.jpg') }}" alt="Slide 3">
          </div>
        </div>
        <button class="prev" onclick="plusSlides(-1)">❮</button>
        <button class="next" onclick="plusSlides(1)">❯</button>
    </div>
    <div class="content-section">
      <img src="{{ asset('images/ttg7.jpg') }}" alt="Deskripsi gambar" class="content-image">
      <div class="content-text">
          <p>
            PMR SMK Negeri 1 Karawang resmi terbentuk pada tahun 2016 sebagai wadah bagi siswa yang memiliki minat di bidang kemanusiaan dan pertolongan pertama. Sejak saat itu, PMR aktif dalam berbagai kegiatan sosial, pelatihan kesehatan, serta menjadi garda terdepan dalam mendukung kegiatan sekolah yang melibatkan aspek kesehatan dan kedaruratan.
          </p>
      </div>
    </div>
        
    <div class="content-section">
    <div class="content-text">
        <p>
          Kegiatan PMR di alam terbuka dirancang untuk melatih keterampilan pertolongan pertama, ketahanan fisik, dan kerja sama tim dalam suasana yang menyenangkan dan penuh tantangan. Mulai dari simulasi evakuasi, jelajah medan, hingga pelatihan survival ringan, semua dilakukan untuk menanamkan nilai kemanusiaan, kepedulian sosial, dan kesiapsiagaan bencana. Melalui pengalaman langsung di alam, anggota PMR belajar menjadi relawan yang tangguh, peduli, dan siap menghadapi situasi darurat kapan pun diperlukan.
        </p>
    </div>
      <img src="{{ asset('images/ltn.jpg') }}" alt="Deskripsi gambar" class="content-image">
    </div>

    <div class="content-section">
      <img src="{{ asset('images/ttg4.jpg') }}" alt="Deskripsi gambar" class="content-image">
      <div class="content-text">
          <p>
            PMR SMK Negeri 1 Karawang juga aktif dalam kegiatan donasi kebencanaan, sebagai bentuk kepedulian terhadap sesama yang terdampak bencana. Kegiatan ini melibatkan penggalangan dana, pengumpulan barang bantuan, serta koordinasi penyaluran bersama PMI dan relawan lainnya. Melalui kegiatan ini, anggota PMR belajar tentang empati, solidaritas, dan pentingnya respon cepat dalam situasi darurat.
          </p>
      </div>
    </div>

    <div class="content-section">
      <div class="content-text">
          <p>
            PMR SMK Negeri 1 Karawang juga turut berpartisipasi dalam berbagai perlombaan tingkat nasional, serta ajang-ajang lomba keterampilan PMR tingkat lainnya. Dalam beberapa kesempatan, tim PMR berhasil meraih berbagai prestasi dan juara, khususnya dalam lomba pertolongan pertama, kesehatan remaja, dan kepemimpinan. Prestasi ini menjadi bukti dedikasi, kerja sama tim, dan semangat belajar yang tinggi dari para anggotanya.
          </p>
      </div>
      <img src="{{ asset('images/ttg6.jpg') }}" alt="Deskripsi gambar" class="content-image">
    </div>

    <div class="content-section">
      <img src="{{ asset('images/ttg5.jpg') }}" alt="Deskripsi gambar" class="content-image">
      <div class="content-text">
          <p>
            Diklatsar (Pendidikan dan Latihan Dasar) tahunan merupakan kegiatan wajib bagi calon anggota PMR SMKN 1 Karawang sebagai tahap awal pembentukan karakter dan penguatan dasar-dasar kepalangmerahan. Kegiatan ini dilaksanakan setiap tahun dengan metode pelatihan lapangan dan materi kelas yang mencakup pengetahuan dasar PMR, pertolongan pertama, evakuasi, serta nilai-nilai kepemimpinan dan solidaritas.
            Melalui diklatsar, peserta tidak hanya belajar teori, tetapi juga ditempa secara mental dan fisik dalam suasana kekeluargaan dan disiplin. Tujuannya adalah mencetak anggota PMR yang tangguh, bertanggung jawab, serta siap terlibat aktif dalam kegiatan kemanusiaan di lingkungan sekolah maupun masyarakat.
          </p>
      </div>
    </div>
  @include('partials.footer')
</div>
<script>
  let slideIndex = 0;

  function showSlides() {
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
  }

  function plusSlides(n) {
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    slideIndex = (slideIndex + n + totalSlides) % totalSlides;
    showSlides();
  }

  document.addEventListener('DOMContentLoaded', function () {
    showSlides();

    // Auto scroll setiap 3 detik
    setInterval(() => {
      plusSlides(1);
    }, 3000);
  });

</script>

</body>
</html>