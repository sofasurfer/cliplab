<?php
if(!empty($videourl)){
    $videourl = $videourl;
}else{
    $videourl = $page->videolink();
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">    
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?= $videourl ?>?rel=0"></iframe>
        </div>
    </div>
  </div>
</div>
