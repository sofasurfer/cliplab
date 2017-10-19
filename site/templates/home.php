<?php snippet('header',['theme' => 'dark']) ?>
<div id="fullpage">
    <?php
    $themes = page('projects')->children();

    $isfirst = true;
    foreach($themes as $theme): 
      ?>
      <div class="section" style="background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),  url('<?= $theme->images()->sortBy('sort', 'asc')->first()->url() ?>');">
        <div class="container">
          <a href="<?= $theme->url() ?>" class="showcase-link">
          <div class="title"><h1><?= $theme->title()->html() ?></h1></div>
          </a>
        </div>
      </div>
      <?php 
      $isfirst = false;
    endforeach; 
    ?>    
</div>
<?php snippet('footer') ?>