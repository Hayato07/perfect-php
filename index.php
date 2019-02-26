<?php
// チャプター1, 2
// echo rand();

// hello=helloとURLパラーメータをつけた場合、helloを受け取れる
// echo $_GET['hello'];
// parse error
// var_dump(rand();

// fatal error
// var_dump(commpu());


// チャプター3
// $age = 32;
// echo $age . "はおじさんか？";

//  $a = 12;
//  echo $a++; // 12
//  echo $a; // 13
//  echo ++$a; // 14

//  class SuperClass {
//  }
//  $a = new SuperClass;
//  if ($a instanceof SuperClass) {  // インスタンスが継承したあるクラス、インターフェースを継承したものかもわかる。
//    echo "{$a}はSuperClassのインスタンス！！";
//  }

//  $greet = $hello_flg ? $hello_flg : "bye";
//  $greet = $hello_flg ?: "bye"; // 上と同じ結果になる

//  $flag1 = true;
//  $flag2 = false;
//  echo $flag1 ? 1 : $flag2 ? 2 : 0; // 2  (($flag1 ? 1 :$flag2) ? 2 : 0)


 // チャプター4
 function outer(){
    $x = 1;
    return function () use (&$x){
              echo $x;
              $x = $x + 1;
            };
  }
  $f =  outer(); 
$f();  // 1
$f();  // 2
$f();  // 3