<input type="checkbox" id="op" />
<div class="lower pull-right">
  <label for="op"></label>
</div>
<div class="container overlay overlay-hugeinc">
    
    <div class="container">
      <div class="row">
        <div class="col-md-6"> 
            <a href="<?= url() ?>" rel="home" class="logo pull-left"><img width="80" src="/assets/images/logo-dark.svg" class="logo"/></a>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <label for="op"></label>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">    
            <nav>
                <?php
                $projects = page('projects')->children();
                ?>
                <ul>
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
