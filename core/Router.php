<?php 
namespace app\core;
class Router 
{
  protected array $routes = [];
  public function get(string $path, callable $callback) 
  {
    $this->routes['get'][$path] = $callback;
  }
  public function resolve() 
  {

  }
}