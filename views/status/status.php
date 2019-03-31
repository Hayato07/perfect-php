<div class="status">
  <div class="status_content">
    name:
    <a href="<?php echo $base_url; ?>/user/<?php echo $this->escape($status['user_name']);?>">
      <?php echo $this->escape($status['user_name']); ?>
    </a>
    </br>
    ひとこと:
    <a href="<?php echo $base_url; ?>/user/<?php echo $this
    ->escape($status['user_name']); ?>/status/<?php echo $this->escape($status['id']); ?>">
        <?php echo $this->escape($status['body']); ?>
        <?php echo $this->escape($status['created_at']); ?>
      </a>
  </div>
</div>