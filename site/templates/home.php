<?php snippet('header') ?>
<main>
    <div class="container main">
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
    <?php snippet('showcase', ['limit' => 3]) ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="<?= page('projects')->url() ?>" class="btn btn-default pull-right">show all projects &hellip;</a>
        </div>
      </div>
    </div>
</main>
<?php snippet('footer') ?>