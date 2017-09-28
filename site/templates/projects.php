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
    <div class="container">    
      <?php snippet('showcase') ?>
    </div>
</main>

<?php snippet('footer') ?>