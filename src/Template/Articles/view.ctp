<?php foreach ($results as $getResults): ?>

  <div>
    <h4>
      <?php echo $this->Html->link(
        $getResults->id,
        '/articles/edit/'. $getResults->id .'' ,
        ['class' => 'button', 'target' => '_parent']
      );
      ?>
      <?= $getResults->title ?>
    </h4>

    <p style="margin-bottom: 45px;">
      <?= $getResults->body ?>
    </p>
  </div>

<?php endforeach; ?>
