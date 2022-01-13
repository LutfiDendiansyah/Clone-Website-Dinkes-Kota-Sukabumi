<?php

require __DIR__ . "/../vendor/autoload.php";

use MyProject\Clone\Web\App\Router;
use MyProject\Clone\Web\Controller\HomeController;
use MyProject\Clone\Web\Controller\ProductController;
use MyProject\Clone\Web\Middleware\AuthMiddleware;

Router::add("GET", "/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)", ProductController::class, "categories", []);

// Home
Router::add("GET", "/", HomeController::class, "index", []);
// Profil
Router::add("GET", "/berita/selayang", HomeController::class, "selayang", []);
Router::add("GET", "/berita/visi-misi", HomeController::class, "visiMisi", []);
Router::add("GET", "/berita/organisasi-dinkes", HomeController::class, "organisasiDinkes", []);
// Layanan Publik
Router::add("GET", "/layanan-publik", HomeController::class, "layanan", []);
// Media
Router::add("GET", "/galeri", HomeController::class, "galeri", []);
Router::add("GET", "/video", HomeController::class, "video", []);
// Download
Router::add("GET", "/download", HomeController::class, "download", []);
// Kontak
Router::add("GET", "/kontak", HomeController::class, "kontak", []);


Router::add("GET", "/hello", HomeController::class, "helloWorld", [AuthMiddleware::class]);

Router::run();