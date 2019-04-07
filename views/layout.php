<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php if (isset($title)): echo $this->escape($title) . ' - '; endif; ?>Mini Blog</title>
</head>
<body>
  <div id="header">
    <h1><a href="<?php echo $base_url; ?>/">Mini Blog</a></h1>
  </div>

  <div id="nav">
    <p>
      <?php if ($session->isAuthenticated()): ?>
        <a href="<?php echo $base_url; ?>/">ホームへ</a>
        <a href="<?php echo $base_url; ?>/account">アカウント</a>
      <?php else: ?>
        <a href="<?= $base_url;?>/account/signin"> ろぐいん</a>
        <a href="<?= $base_url; ?>/account/signup">アカウント登録</a>
      <?php endif; ?>
    </p>
  </div>

  <div id="main">
    <?php echo $_content; ?>
  </div>
</body>
</html>