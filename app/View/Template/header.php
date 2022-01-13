<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dinas Kesehatan Kota Sukabumi</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/img/Lambang_Kota_Sukabumi.png" />
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="<?= $model["css"] ?? "" ?>" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="/fontawesome/css/all.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  </head>
  <body>
    <i class="fas fa-angle-up scroll-button"></i>
    <!-- header start -->
    <header>
      <div class="container">
        <div class="fixed-bar">
          <p>Sudah melakukan vaksinasi COVID-19? Cek sertifikat anda</p>
          <a href="https://pedulilindungi.id/login?redirect=periksa-sertifikat" target="_blank" class="btn">Peduli Lindungi</a>
        </div>
        <div class="navbar">
          <a href="/"><img src="/img/logo.png" alt="" /></a>
          <div class="menu">
            <a href="/" class="active" ><i class="fas fa-home"></i> Home</a>
            <a href="javascript:;" class="profilBtn">Profil <i class="fas fa-angle-down"></i></a>
              <div class="carousel-1">
                <ul>
                  <li><a href="/berita/selayang">Selayang Pandang Kota Sukabumi</a></li>
                  <li><a href="/berita/visi-misi">Visi dan Misi Kota Sukabumi</a></li>
                  <li><a href="/berita/organisasi-dinkes">Struktur Organisasi Dinkes Kota Sukabumi</a></li>
                </ul>
              </div>
            <a href="javascript:;" class="informBtn" >Informasi <i class="fas fa-angle-down"></i></a>
              <div class="carousel-2">
                <ul>
                  <li><a href="">Hotline & Informasi</a></li>
                  <li><a href="">Berita Umur</a></li>
                  <li><a href="">Berita Kesehatan</a></li>
                  <li><a href="">Promkes</a></li>
                  <li><a href="">Jadwal Vaksinasi</a></li>
                  <li><a href="">Pengumuman</a></li></li>
                </ul>
              </div>
            <a href="/layanan-publik">Layanan Publik</a>
            <a href="javascript:;" class="mediaBtn">Media <i class="fas fa-angle-down"></i></a>
              <div class="carousel-3">
                <ul>
                  <li><a href="/galeri">Galeri</a></li>
                  <li><a href="/video">Video</a></li>
                </ul>
              </div>
            <a href="/download">Download</a>
            <a href="/kontak">Kontak</a>
          </div>
        </div>
        <div class="responsive-navbar">
          <a href="/"><img src="/img/logo-remove.png" alt=""></a>
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </header>
    <div id="profil">
      <ul>
        <li>
          <a href="/berita/selayang"><span>Selayang Pandang Kota Sukabumi</span></a>
        </li>
        <li><a href="/berita/visi-misi">Visi dan Misi Kota Sukabumi</a></li>
        <li><a href="/berita/organisasi-dinkes">Struktur Organisasi Dinkes Kota Sukabumi</a></li>
      </ul>
    </div>
    <div id="informasi">
      <ul>
        <li><a href="">Hotline & Informasi</a></li>
        <li><a href="">Berita Umur</a></li>
        <li><a href="">Berita Kesehatan</a></li>
        <li><a href="">Promkes</a></li>
        <li><a href="">Jadwal Vaksinasi</a></li>
        <li><a href="">Pengumuman</a></li>
      </ul>
    </div>
    <div id="media">
      <ul>
        <li><a href="/galeri">Galeri</a></li>
        <li><a href="/video">Video</a></li>
      </ul>
    </div>
    <!-- header end -->