<?php

class Router
{
  protected $routes;

  public function __construct($definitions)
  {
    $this->route = $this->compileRoutes($definitions);
  }

  public function compileRoutes($definitions)
  {
    $routes = array();

    foreach ($definitions as $url => $params) {
      $tokens = explode('/', ltrim($url, '/'));
      foreach ($tokens as $i => $token) {
        if (strpos($token, ':') === 0) {
          $name = substr($token, ':');
          $token = '(?P<' . $name . '>[^/]+)';
        }
        $tokens[$i] = $token;
      }

      $pattern = '/' . implode('/', $tokens);
      $routes[$pattern] = $param;
    }

    return $routes;
  }

  public function resolve($path_info)
  {
    if (substr($path_info, 0, 1) !== '/') {
      $path_info = '/' . $path_info;
    }

    foreach ($this->routes as $pattern => $params) {
      if (preg_match('#^' . $pattern . '$#', $path_info, $matches)) {
        $params = array_merge($params, $matches);
        
        return $params;
      }
    }
    
    return false;
  }
}