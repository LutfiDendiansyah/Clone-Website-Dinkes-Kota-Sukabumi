<?php 

namespace MyProject\Clone\Web\Controller;

use MyProject\Clone\Web\App\View;

class HomeController 
{
  function index()
  {
    View::render("index", [
      "title" => "Halaman Pertama",
      "css" => "/css/home.css"
    ]);
  }

  public function selayang()
  {
    View::render("Profil/selayang", [
      "css" => "/css/profil/selayang.css"
    ]);
  }

  public function organisasiDinkes()
  {
    View::render("Profil/organisasi-dinkes", [
      "css" => "/css/profil/selayang.css"
    ]);
  }

  public function visiMisi()
  {
    View::render("Profil/visi-misi", [
      "css" => "/css/profil/selayang.css"
    ]);
  }

  public function layanan()
  {
    View::render("layanan-publik", [
      "css" => "/css/layanan.css"
    ]);
  }

  public function galeri()
  {
    View::render("Media/Galeri", [
      "css" => "/css/media/galeri.css"
    ]);
  }

  public function video()
  {
    View::render("Media/video", [
      "css" => "/css/media/video.css"
    ]);
  }

  public function download()
  {
    View::render("download", [
      "css" => "/css/download.css"
    ]);
  }

  public function kontak()
  {
    View::render("kontak", [
      "css" => "/css/kontak.css"
    ]);
  }

  function helloWorld()
  {
    View::render("Home/helloWorld", [
      "title" => "Halaman Hello World",
      "content" => "Ini adalah halaman Hello World"
    ]);
  }
}