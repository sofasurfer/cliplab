<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"  />   
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <?= css('assets/css/index.css') ?>

</head>
<body class="<?= $page->intendedTemplate(); ?>">

  <div class="container header">
    <div class="row">
      <div class="col-md-6">
        <?php 
          if(!empty($theme) && $theme == 'dark'){
            $logoimage = '/assets/images/logo-bright.svg';
          }else{
            $logoimage = '/assets/images/logo-dark.svg';            
          }
        ?>
        <a href="<?= url() ?>" rel="home" class="logo"><img width="80" src="<?= $logoimage ?>" class="logo"/></a>
      </div>
      <div class="col-md-6">
        <div class="pull-right">
        <?php if(isset($showclose)): ?>
          <a href="<?= url() ?>" rel="home" class="close"></a>
        <?php else: ?>
          <?php snippet('overlay') ?>
        <?php endif ?>
        </div>
      </div>
    </div>
  </div>
