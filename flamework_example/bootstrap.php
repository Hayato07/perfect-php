<?php
// bootstrapには立ち上げる前準備という意味があり、アプリケーションを立ち上げる
// 前準備としてオートローダを設定する記述をしている。そのため、他にも前準備のコードがあれば
// bootstrapに書くのが望ましい。
require 'core/ClassLoader.php';

$loader = new ClassLoader();
// coreディレクトリとmodelsディレクトリをオートローダの対象ディレクトリに設定
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/models');
$loader->register();