<?php snippet('header',['showclose' => true, 'theme' => 'dark']) ?>
<div class="container dark">
  <div class="row">
    <div class="col-md-12">
      <h1>About</h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-0">
      <h1>Contact</h1>
      <?php if(get('thank-you')): ?>
        <h2>Thank you for your request!</h2>
      <?php else: ?>
        <form method="get" class="">
          <?php if($alert): ?>
          <div class="alert">
            <ul>
              <?php foreach($alert as $message): ?>
              <li><?php echo html($message) ?></li>
              <?php endforeach ?>
            </ul>
          </div>
          <?php endif ?>
          <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">E-Mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="text" class="control-label">Comment</label>
            <textarea class="form-control" rows="10" name="text" id="text" placeholder="Comment"></textarea>
          </div>
          <div class="form-group">
            <input type="hidden" name="submit" value="true" />
            <button type="submit" class="btn btn-dark">Submit</button>
          </div>
        </form>
      <?php endif ?>
    </div>
  </div>
</div>
<?php snippet('footer') ?>