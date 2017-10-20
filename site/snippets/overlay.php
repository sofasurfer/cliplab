<input type="checkbox" id="op" />
<div class="lower pull-right">
  <label for="op"></label>
</div>
<div class="container overlay overlay-hugeinc">
    
    <div class="container">
      <div class="row">
        <div class="col-md-2">
            <div class="logo black">
            <a href="<?= url() ?>" rel="home" class="pull-left"><?php snippet('logo') ?></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="search">
                <span class="fa fa-search"></span>
                <input type="text" id="search_field" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="oclose">
                <label for="op"></label>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">    
            <nav>
                <?php
                $projects = page('projects')->children();
                ?>
                <ul id="search_results">
                    <?php foreach($projects as $project): ?>
                        <li>
                            <a href="<?= $project->url() ?>" class="showcase-link">
                            <div><?= date('d.m.Y',$project->modified()) ?></div>
                            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
                            <div><?= $project->intro()->kirbytext() ?></div>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </div>
      </div>
    </div>
</div>
