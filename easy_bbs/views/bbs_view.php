<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EASY BBS</title>
</head>
<body>
  <h1>ミニ掲示板</h1>
  <?php
  if (count($errors) > 0) {
    foreach ($errors as $error) {
      echo $error . '<br>';
    }
  }
  ?>
  <form action="bbs.php" method="post">
    <div>
      <label for="name">なまえ：</label>
      <input name="name">
    </div>
    <div>
      <label for="comment">ひとこと：</label>
      <input name="comment">
    </div>
    <input type="submit" value="そうしん" name="submit">
  </form>
  <hr>
  <!-- 投稿された内容を表示 -->
  
  <h1>投稿</h1>
  <ul>
    <?php foreach ($posts as $post):?>
      <li>
        <?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?>
        <?php echo htmlspecialchars($post['comment'], ENT_QUOTES, 'UTF-8') ?>
        <?php echo htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8') ?>
      </li>
    <?php endforeach;?>
  </ul>
</body>
</html>