<?php $this->setLayoutVar('title', 'アカウント'); ?>

<h2>あかうんと</h2>

<p>
  ユーザーID:
  <a href="<?php echo $base_url; ?>/user/<?php echo $this->escape($user['user_name']); ?>">
    <strong><?php echo $this->escape($user['user_name']); ?></strong>
  </a>
</p>

<ul>
  <li>
    <a href="<?php echo $base_url;?>/">ホームへ</a>
  </li>
  <li>
    <a href="<?php echo $base_url;?>/account/signout">ログアウト</a>
  </li>
</ul>

<h3>フォロー中</h3>

<?php if (count($followings) > 0): ?>
  <ul>
    <?php foreach ($followings as $following): ?>
      <li>
        <a href="<?= $base_url; ?>/user/<?= $this->escape($following['user_name']); ?>">
          <?=$this->escape($following['user_name']); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif;?>