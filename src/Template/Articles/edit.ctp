<?= $this->Form->create($articles) ?>

<?php
  echo $this->Form->control('title');
  echo $this->Form->control('body');
?>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
