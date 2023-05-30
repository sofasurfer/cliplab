<?php snippet('header',['theme' => 'dark']) ?>
<div id="fullpage" class="fullpage">
    <?php
    // $themes = pages('projects')->children()->visible();
    $themes = $pages->children();

    $isfirst = true;
    if( !empty($themes) ):
      foreach($themes as $theme): 
        ?>
        <?php if($theme->showslider()->toBool() ): ?>
          <?php if($theme->hasImages() ): ?>
          <div class="section" data-anchor="<?= $theme->slug() ?>" style="background-image:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),  url('<?= $theme->images()->sortBy('sort', 'asc')->first()->url() ?>');">
          <?php else: ?>
            <div class="section" data-anchor="<?= $theme->slug() ?>">
          <?php endif ?>      
            <div class="container">
              <a href="<?= $theme->url() ?>" class="showcase-link">
              <div class="title"><h1><?= $theme->title()->html() ?></h1></div>
              </a>
            </div>
          </div>
          <?php 
          $isfirst = false;
        endif; 
      endforeach; 
    endif;
    ?>    
</div>
<?php snippet('footer') ?>