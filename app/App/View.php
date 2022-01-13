<?php 

namespace MyProject\Clone\Web\App;

class View 
{
  public static function render($view, $model = [])
  {
    require __DIR__ . "/../View/Template/header.php";
    require __DIR__ . "/../View/" . $view . ".php";
    require __DIR__ . "/../View/Template/footer.php";
  }

}