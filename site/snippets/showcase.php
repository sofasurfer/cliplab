<?php

$showparent = false;

if( !empty($subpages) && $subpages){
  if( !empty($page->children()) && $page->children() != ""){
    $projects = $page->children();    
  }else{
    $showparent = true;
    $projects = $page->siblings($self=false);
  }
}else{
  $projects = page('projects')->children()->visible();
}

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>
<div class="container">
  <div class="row">
    <?php if($showparent): $parent = $page->parent(); ?>
      <div class="col-md-4">
          <a href="<?= $parent->url() ?>" class="showcase-link">
            <?php if($image = $parent->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $parent->title()->html() ?>" class="img-responsive" />
            <?php endif ?>
            <div class="showcase-caption">
              <h3 class="showcase-title"><?= $parent->title()->html() ?></h3>
            </div>
          </a>
      </div>
    <?php endif ?>
    <?php foreach($projects as $project): ?>
      <div class="col-md-4">
          <a href="<?= $project->url() ?>" class="showcase-link">
            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="img-responsive" />
            <?php endif ?>
            <div class="showcase-caption">
              <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
            </div>
          </a>
      </div>
    <?php endforeach ?>
  </div>
</div>
