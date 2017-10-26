<input type="checkbox" id="op" />
<div class="lower pull-right">
  <label for="op"></label>
</div>
<div class="overlay overlay-hugeinc">
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
            <div class="logo black">
            <a href="<?= url() ?>" rel="home" class="pull-left"><?php snippet('logo') ?></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="search hidden-xs">
                <span class="fa fa-search"></span>
                <input type="text" id="search_field" autofocus />
            </div>
        </div>
        <div class="col-md-4">
            <div class="oclose">
                <label for="op"></label>
            </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">    
                <?php
                function date_compare($a, $b)
                {
                    $t1 = strtotime($a['created']);
                    $t2 = strtotime($b['created']);
                    return $t2 - $t1;
                } 

                $projects = page('projects')->children();
                $timeline = array();
                foreach ($projects as $project) {
                    $timeline[] = array(
                        'title' => (string)$project->title(),
                        'description' => (string)$project->intro()->kirbytext(),
                        'created' => (string)$project->created('d.m.Y'),
                        'url' => $project->url(),
                    );
                    if($project->hasChildren()) {
                        $children = $project->children();                
                        foreach ($children as $child) {
                            $timeline[] = array(
                                'title' => (string)$project->title() . ' - ' . (string)$child->title(),
                                'description' => (string)$child->intro()->kirbytext(),
                                'created' => (string)$child->created('d.m.Y'),
                                'url' => $project->url() . '#' . str_replace("/", "-", $child->id()),
                            );
                        }
                    }
                }
                usort($timeline, 'date_compare');
                // echo "<pre>".print_r($timeline,true)."</pre>";

                ?>
                <ul id="search_results">
                    <?php foreach($timeline as $line): ?>
                        <li>
                            <div><?= $line['created'] ?></div>
                            <a href="<?= $line['url'] ?>" class="showcase-link">
                            <h3 class="showcase-title"><?= $line['title'] ?></h3>
                            </a>
                            <div><?= $line['description'] ?></div>
                        </li>
                    <?php endforeach ?>
                </ul>
        </div>
      </div>
    </div>
</div>
