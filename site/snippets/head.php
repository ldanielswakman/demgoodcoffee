<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <? snippet('head-meta') ?>

  <?= css('assets/css/style.css') ?>

  <?= js('https://code.jquery.com/jquery-3.3.1.min.js') ?>

</head>
<body class="page--<?= $page->template() ?>">
