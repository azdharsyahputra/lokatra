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
        <h1>Lokatara</h1>
        <p class="description">In the Harmony of Nature, the Spirit of Humanity Grows.</p>
    </div>
      <div class="slides">
        <img src="{{ asset('images/lktr2.jpg') }}" alt="Slide 1">
        <img src="{{ asset('images/lktr1.jpg') }}" alt="Slide 2">
        <img src="{{ asset('images/lktr3.jpg') }}" alt="Slide 3">
      </div>
    <button class="prev" onclick="plusSlides(-1)">❮</button>
    <button class="next" onclick="plusSlides(1)">❯</button>
    </div>
    <div class="content-section">
    <img src="{{ asset('images/lktr5.jpg') }}" alt="Deskripsi gambar" class="content-image">
    <div class="content-text">
        <p style="font-size: 17px">
Lomba Lokatara adalah ajang tahunan yang diselenggarakan untuk mengasah keterampilan, kepedulian sosial, dan semangat kemanusiaan generasi muda, khususnya anggota PMR. Mengusung tema “In the Harmony of Nature, the Spirit of Humanity Grows”, kegiatan ini bertujuan untuk menanamkan nilai-nilai kemanusiaan yang tumbuh selaras dengan kecintaan terhadap alam.
Peserta akan diajak mengikuti berbagai cabang lomba seperti pertolongan pertama, remaja sehat peduli sesama, young dunant, desain poster, cipta karya peduli lingkungan dan kompetisi ketangkasan tandu darurat yang semuanya dibalut dalam suasana edukatif dan kompetitif. Melalui lomba ini, diharapkan para peserta mampu menumbuhkan semangat kolaborasi, kepedulian, serta menjadi pelopor dalam menjaga keharmonisan antara manusia dan lingkungan.
        </p>
    </div>
</div>
<div class="card-container">
  <div class="card">
    <img src="{{ asset('images/pp.jpg') }}" alt="Pertolongan Pertama">
    <h3>Pertolongan Pertama</h3>
    <p>Pertolongan Segera yang dilakukan oleh orang awam / awam terlatih yang diberikan kepada penderita cacat / cedera sebelum dilakukannya tindakan medis dasar. Perlombaan Pertolongan Pertama dilakukan dengan sistem simulasi Pertolongan Pertama sebenarnya.

</p>
  </div>
  <div class="card">
    <img src="{{ asset('images/rsps.jpg') }}" alt="Remaja Sehat Peduli Sesama">
    <h3>Remaja Sehat Peduli Sesama</h3>
    <p>Remaja Sehat Peduli Sesama adalah remaja yang memiliki kesehatan fisik dan mental yang baik, serta memiliki kepedulian dan empati terhadap orang lain di sekitarnya. Mereka juga berpartisipasi aktif dalam kegiatan sosial yang bermanfaat. Perlombaan Remaja Sehat Peduli Sesama dilakukan dengan sistem simulasi Perawatan Keluarga sebenarnya.
</p>
  </div>
  <div class="card">
    <img src="{{ asset('images/yd.jpg') }}" alt="Young Dunant">
    <h3>Young Dunant</h3>
    <p>Young Dunant merupakan lomba yang terdiri dari 7 materi dasar kepalangmerahan dan materi pengetahuan umum. Tahapan peserta yang pertama adalah babak eliminasi, tahapan kedua yaitu babak semifinal berupa tes tertulis, dan tahapan ketiga yaitu babak final berupa perebutan poin dengan sistem menjawab cepat & tepat</p>
  </div>
  <div class="card">
    <img src="{{ asset('images/dp.jpg') }}" alt="Desain Poster">
    <h3>Desain Poster</h3>
    <p>Desain Poster merupakan lomba membuat poster yang bertemakan Ayo Siaga Bencana, Pentingnya Pendidikan Remaja Sebaya, Remaja Sehat Peduli Sesama dan Donor Darah Sukarela.</p>
  </div>
  <div class="card">
    <img src="{{ asset('images/ckpl.jpg') }}" alt="Cipta Karya Peduli Lingkungan">
    <h3>Cipta Karya Peduli Lingkungan</h3>
    <p>Cipta Karya Peduli Lingkungan merupakan lomba kreativitas PMR dalam berkarya menggunakan limbah rumah tangga atau daur ulang. Perlombaan CKPL akan berbentuk peragaan busana berbahan limbah organik / anorganik.</p>
  </div>
  <div class="card">
    <img src="{{ asset('images/tandu.jpg') }}" alt="Ketangkasan Tandu Darurat">
    <h3>Ketangkasan Tandu Darurat</h3>
    <p>Tandu darurat adalah alat evakuasi korban dari tempat kejadian ke tempat yang lebih aman yang dibuat secara darurat. Perlombaan Tandu Darurat dilakukan dengan sistem pembuatan Tandu Darurat</p>
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