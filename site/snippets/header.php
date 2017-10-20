<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"  />   
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/jquery.fullpage.min.css') ?>
  <?= css('assets/css/index.css?v1.0') ?>

</head>
<body class="<?= $page->intendedTemplate(); ?>">
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="logo">
        <a href="<?= url() ?>" rel="home" class="pull-left"><?php snippet('logo') ?></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="timeline">
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