<?php 

namespace MyProject\Clone\Web\Middleware;

interface Middleware 
{
  function before() :void;
}