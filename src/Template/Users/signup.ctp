<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create($user) ?>
  <fieldset>
    <legend>Sign up</legend>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Phone</label>
      <input type="text" name="phone" class="form-control" id="exampleInputphone"  placeholder=" Enter Phone">
    </div>

    <?= $this->Form->button(__('Signup'), ['class'=>'btn btn-primary']) ?>
  </fieldset>
  <?= $this->Form->end() ?>

</div>
