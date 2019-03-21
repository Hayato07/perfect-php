<?php

// このクラスをオートロードに設定すると、クラスファイルを自動で読み込んでくれる。
class ClassLoader 
{
  protected $dirs;

  // オートローダを登録する
  public function register()
  {
    spl_autoload_register([$this, 'loadClass']);
  }

  // ディレクトリを登録
  public function registerDir($dir)
  {
    $this->dirs[] = $dir;
  }

  // クラスファイルがあれば読み込み
  public function loadClass($class)
  {
    foreach ($this->dirs as $dir) {
      $file = $dir . '/' . $class . '.php';
      if (is_readable($file)) {
        require $file;
        return;
      }
    }
  }
}