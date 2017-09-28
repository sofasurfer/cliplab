<?php snippet('header',['showclose' => true]) ?>
<div class="container dark">
  <div class="row">
    <div class="col-md-12">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>
</div>
<?php snippet('footer') ?>