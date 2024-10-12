<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terrarium.qu</title>
    <link rel="icon" type="image/png" href="{{ asset('profil/img/logo.png')}}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0')}}" />
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css')}}">
</head>
<body>
  <!-- Navbar Start -->
  <nav class="navbar1">
    <a href="#">
    <img src="{{asset('profil/img/logo.png')}}" class="navbar-logo"> </a>

    <div class="navbar1-nav">
      <a href="{{route('welcome')}}">HOME</a>
      <a href="{{route('about')}}">TENTANG KAMI</a>
      <a href="{{route('item')}}">PRODUK</a>
      <a href="{{route('foto')}}">GALERI</a>
      <a href="{{route('panduan')}}">PANDUAN</a>
      <a href="{{route('kontak')}}">KONTAK</a>
  </div>

    <div class="navbar1-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
        <p>TERRARIUM.QU</p>
        <h1>Membawa Hutan Kedalam Ruangan</h1>
    </main>
  </section>
  <!-- Hero Section End -->

 <!-- Guide Section Start -->
 <section id="panduan" class="panduan">
  <h2><span>PANDUAN</span></h2>
  <h4>Cara merawat terarium Anda</h4><br>
  <div class="grid-container">
    <div class="grid-item">
      <h5>Pemeliharaan</h5>
      <ul>
        <li>Pangkas dan pangkas tanaman Anda saat mereka tumbuh untuk mempertahankan bentuk yang diinginkan dan mencegah kepadatan.</li>
        <li>Buanglah daun-daun yang mati atau menguning untuk menjaga kesehatan terarium Anda secara keseluruhan.</li>
      </ul>
    </div>
    <div class="grid-item">
      <h5>Pemecahan masalah</h5>
      <ul>
        <li>Jika terjadi jamur atau pengembunan yang berlebihan, buka tutupnya dan biarkan terarium diangin-anginkan selama beberapa jam.</li>
        <li>Sesuaikan frekuensi penyiraman jika Anda melihat tanda-tanda kelebihan air atau kekurangan air pada tanaman Anda.</li>
      </ul>
    </div>
    <div class="grid-item">
      <h5>Pembersihan</h5>
      <ul>
        <li>Jaga kebersihan kaca atau wadah plastik dengan menyeka kondensasi atau kotoran dari bagian dalam.</li>
      </ul>
    </div>
    <div class="grid-item">
      <h5>Penyiraman</h5>
      <ul>
        <li>Siram secukupnya. Penyiraman yang berlebihan dapat menyebabkan jamur dan busuk akar.</li>
        <li>Gunakan botol semprot untuk menyiram tanaman dengan sedikit kabut atau siram dengan sedikit air setiap 2-3 minggu sekali, tergantung kebutuhan tanaman. Selalu periksa panduan perawatan khusus untuk tanaman yang Anda pilih.</li>
        <li>Jika terarium Anda memiliki penutup, bukalah secara berkala untuk memungkinkan sirkulasi udara dan mencegah penumpukan kelembapan yang berlebihan.</li>
      </ul>
    </div>
    <div class="grid-item">
      <h5>Cahaya</h5>
      <ul>
        <li>Posisikan terarium asam di bawah sinar matahari tidak langsung. Hindari sinar matahari langsung, karena dapat membuat tanaman menjadi terlalu panas dan merusak tanaman.</li>
        <li>Jika Anda mengamati tanaman Anda menjulur ke arah cahaya, mereka mungkin membutuhkan peningkatan paparan cahaya.</li>
      </ul>
    </div>
    <div class="grid-item">
      <h5>Penanaman</h5>
      <ul>
        <li>Tanamlah tanaman hijau pilihan Anda di dalam tanah dengan menggunakan alat kecil atau sumpit untuk membuat lubang untuk akar.</li>
        <li>Berhati-hatilah agar tanaman tidak terlalu padat. Sisakan ruang yang cukup untuk pertumbuhan.</li>
      </ul>
    </div>
  </div>
  <br>
  <a href="{{route('item')}}" class="add-to-cart">Beli Sekarang <i class="fas fa-arrow-right"></i></a>
</section>
<!-- Guide Section End -->

  <!-- Footer Start -->
  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <img src="{{ asset('profil/img/logo.png') }}" alt="Terrarium.qu Logo" class="footer-logo">
      </div>
      <div class="footer-center">
        <h3>TERRARIUM.QU</h3>
        <p>Membawa Hutan Kedalam Ruangan</p><br>
        <p>© Created and Copyright by Tech Titans. 2024.</p>
      </div>
      <div class="footer-right">
        <div class="social-icons">
            <a href="https://www.instagram.com/terrarium.qu?igsh=MW50ZHpjNTYyb2YxNQ=="><i class="fab fa-instagram"></i></i></a>
            <a href="https://www.tiktok.com/@terrarium.qu?_t=8mamJWuB8St&_r=1"><i class="fab fa-tiktok"></i></a>
            <a href="089608543320"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- My JavaScript -->
  <script src="{{ asset('profil/javascript/nav.js') }}"></script>
  <script src="{{ asset('profil/javascript/index.js') }}"></script>


</body>
</html>