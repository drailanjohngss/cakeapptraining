<?= $this->Form->create() ?>
<?= $this->Form->control('Title', ['type' => 'text', 'name' => 'title']); ?>
<?= $this->Form->control('Body', ['name' => 'body', 'type' => 'textarea', 'cols' => 10, 'rows' => 2]); ?>
<?= $this->Form->control('Save', ['type' => 'submit']); ?>
<?= $this->Form->end() ?>
