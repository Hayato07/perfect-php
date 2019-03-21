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
//  function outer(){
//     $x = 1;
//     return function () use (&$x){
//               echo $x;
//               $x = $x + 1;
//             };
//   }
//   $f =  outer(); 
// $f();  // 1
// $f();  // 2
// $f();  // 3

// チャプター5 
// class Test {
//     private $name;

//   public function __construct($name)
//     {
//       $this->name = $name;
//     }
//     public function getName() {
//       return $this->name;
//     }
//     public function setName(string $name) {
//       $this->name = $name;
//     }
//   }
//   $test = new Test('hayato');

//   // echo $test->name; // error
//   echo $test->getName();  // hayato
//   $test->setName('haya');
//   echo $test->getName(); // haya

//   class MiniTest extends Test {
//     private $type;
//     public function __construct($name, $type) {
//       parent::__construct($name);
//       $this->type = $type;
//     }

//     public function getType (){
//       return $this->type;
//     }
//   }

//   $mini_test = new MiniTest('haya', 'math');
//   echo $mini_test->getType();
  // function div (int $a,int $b) {
  //   if ($b === 0) {
  //     throw new Exception ("$b is zero.");
  //   }
  //   return $a / $b;
  // }

  // try {
  //   echo div(3, 4);
  //   echo div(2,3);
  //   echo div(2,0);
  //   echo div(4, 2);
  // } catch (Exception $e) {
  //   echo $e->getMessage();
  // };
  // $a = 10;
  // $b = $a;
  // $c = &$a;

  // $b += 2;  
  // echo $a;
  // $c += 2; 
  // echo $a;

  // function array_pass_ref (&$array) {
  //   foreach ($array as $key => $value) {
  //     $array[$key]  = $value * 2;
  //   }
  // }

  // $a = 10;
  // $b = 2;

  // $array = [$a, $b];
  // array_pass_ref($array); 
  // echo $a . $b;
  // var_dump($array);

  // echo gc_enabled();


// お遊び　３つの演算子の違い
// null合体演算子はnullかどうかが重要
// 三項演算子、エルビスは、true,falseが重要
// $x = null;
// $y = 0;
// $z = 1;

// // 三項演算子
// $a = $x ? 'true' : 'false'; // 'false'
// $b = $y ? 'true' : 'false'; // 'false'
// $c = $z ? 'true' : 'false'; // 'true'
// // $abc = $xyz ? 'true' : 'false';
// echo $a . $b . $c  . '<br>';
// // null合体演算子
// $a = $x ?? 'false'; // 'false'
// $b = $y ?? 'false'; // 'false'
// $c = $z ?? 'false'; // 1
// $abc = $xyz ?? 'false';
// echo $a . $b . $c . $abc . '<br>';
// // エルビス演算子
// $a = $x ?: 'false'; // 
// $b = $y ?: 'false'; // 'false'
// $c = $z ?: 'false'; // 1
// // $abc = $xyz ?: 'false';
// echo $a . $b . $c . '<br>';

require 'bootstrap.php';