<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/font-awesome.min.css') ?>
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/jquery.fullpage.min.css') ?>
  <?= css('assets/css/index.css') ?>

</head>
<body class="<?= $page->intendedTemplate(); ?>">
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php 
          if(!empty($theme) && $theme == 'dark'){
            $logoimage = '/assets/images/logo-bright.svg';
          }else{
            $logoimage = '/assets/images/logo-dark.svg';            
          }
        ?>
        <a href="<?= url() ?>" rel="home" class="logo pull-left"><img width="80" src="<?= $logoimage ?>" class="logo"/></a>
      </div>
      <div class="col-md-6">
        <div class="timeline pull-right">
        <?php if(isset($showclose)): ?>
          <a href="<?= url() ?>" rel="home" class="close"></a>
        <?php else: ?>
          <?php snippet('overlay') ?>
        <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</header>