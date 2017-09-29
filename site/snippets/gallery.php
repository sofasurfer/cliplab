<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!--   
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php
    // Images for the "project" template are sortable. You
    // can change the display by clicking the 'edit' button
    // above the files list in the sidebar.
    if(!empty($galleypage)){
      $galleypage = $galleypage;
    }else{
      $galleypage = $page;
    }
    $isfirst = true;
    foreach($galleypage->images()->sortBy('sort', 'asc') as $image): ?>
      <div class="item <?= $isfirst ? 'active' : '' ?>">
        <img src="<?= $image->url() ?>"" class="img-responsive" alt="<?= $galleypage->title()->html() ?>" />
      </div>
    <?php 
    $isfirst = false;
    endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
