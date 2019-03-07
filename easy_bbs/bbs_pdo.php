<?php
  $errors = [];
  // DB接続
  $dsn = "mysql:dbname=easy_bbs;host=localhost;charset=utf8mb4";
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];
  try {
    $pdo = new PDO($dsn, 'root', '', $options);
  } catch (PDOException $e) {
    $errors[] = $e->getMessage();
    exit;
  }
  // データの保存処理
  $name = null;
  $comment = null;
  // バリデーション
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['name']) || !strlen($_POST['name'])) {
      $errors['name'] = '名前を入力してください';
    } else if (strlen($_POST['name']) > 40) {
      $errors['name'] = '名前は40字以内でお願い！';
    } else {
      $name = $_POST['name'];
    }
  
    // post ver
    if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {
      $errors['comment'] = '何か一言！！';
    } else if (strlen($_POST['comment'] > 200 )) {
      $errors['comment'] = '一言が長すぎます。もっと短かく！';
    } else {
      $comment = $_POST['comment'];
    }

    // エラーがなければ保存
    if (count($errors) === 0) {
      // 保存処理
      $stmt = $pdo->prepare(' INSERT INTO post(`name`, `comment`) VALUES(:name, :comment) ');
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
      // bindParamは変数をバインド、execute時に変数に代入されているものを評価する。
      // bindValueは値をバインド、bindValue時の値（変数の値でも）をexcute時に評価する。
      $stmt->execute();
      // 投稿後リダイレクト
      header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    }
  }

  // 表示するデータの取得
  $stmt = $pdo->query(' SELECT * FROM post ORDER BY `created_at` DESC ');
  $posts = $stmt->fetchAll();

  include 'views/bbs_view.php';