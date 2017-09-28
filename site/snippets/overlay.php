<input type="checkbox" id="op"></input>
<div class="lower pull-right">
  <label for="op"></label>
</div>
<div class="overlay overlay-hugeinc">
            <label for="op"></label>
            <nav>
                <?php
                $projects = page('projects')->children()->visible();
                ?>
                <ul>
                    <?php foreach($projects as $project): ?>
                        <li>
                            <div><?= date('d.m.Y',$project->modified()) ?></div>
                            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
                            <div><?= $page->intro()->kirbytext() ?></div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
</div>
