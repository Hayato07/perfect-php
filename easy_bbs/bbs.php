<?php
  // DB接続
  $conn = mysqli_connect('localhost', 'root', '');
  if (!$conn) {
    die('DBに接続できません！！！' . mysqli_error());
  }

  // DB選択
  mysqli_select_db($conn, 'easy_bbs');

  $errors = [];

  // POST methodなら保存処理
  // $name, $comment 初期化
  $name = null;
  $comment = null;

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
      $sql = " INSERT INTO `post` (`name`, `comment`, `created_at`) VALUES (' " .
              mysqli_real_escape_string($conn, $name) . " ',' " .
              mysqli_real_escape_string($conn, $comment) . " ',' " .
              date('y-m-d H:i:s') . " '); ";
      // 実行する
      mysqli_query($conn, $sql);

      // 投稿後リダイレクト
      header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    }
  }

    $sql = ' SELECT * FROM `post` ORDER BY `created_at` DESC ';
    $result = mysqli_query($conn, $sql);
    $posts = [];
   if ($result != false) {
     while ( $row = mysqli_fetch_assoc($result)): 
      $posts[] = $row;
     endwhile; 
   }
    mysqli_free_result($result);
    mysqli_close($conn);

    include 'views/bbs_view.php';