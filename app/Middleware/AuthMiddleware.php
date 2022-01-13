<?php

namespace MyProject\Clone\Web\Middleware;

use MyProject\Clone\Web\Middleware\Middleware;

class AuthMiddleware implements Middleware
{
  function before(): void
  {
    session_start();

    if (!isset($_SESSION["user"])) {
      header("Location: /login");
      exit();
    }
  }
}