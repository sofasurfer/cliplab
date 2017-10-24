<?php snippet('header') ?>

<main>
    <div class="container main">
      <div class="row">
        <div class="col-md-12">
          <h1><?= $page->title()->html() ?></h1>
          <div class="intro text">
            <?= $page->intro()->kirbytext() ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">    
          <?php 
          // echo '<pre>';
          // var_dump($page);
          // echo '<pre>';
          if ($page->videolink() != ""){
            snippet('video');
          }else if ($page->showslider() == '1'){
            snippet('gallery');
          }
          ?>
        </div>
      </div>
    </div>           
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><?= $page->created() ?></h2>
          <p><?= $page->text()->kirbytext() ?></p>
        </div>
      </div>
    </div> 
    <?php
    if( !empty($page->children()) && $page->children() != ""){
      $subpages = $page->children();
      foreach ($subpages as $subpage){
        snippet('subpages',['subpage' => $subpage]);
      }
    }
    ?>
</main>

<?php snippet('footer') ?>