<?php
if(!empty($videourl)){
    $videourl = $videourl;
}else{
    $videourl = $page->videolink();
}
?>
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?= $videourl ?>"></iframe>
</div>