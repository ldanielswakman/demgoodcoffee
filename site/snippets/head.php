<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <? snippet('head-meta') ?>

  <?= css('assets/css/style.css') ?>

  <? if (c::get('env') === 'DEV') : ?>
  	<?= js('assets/js/jquery-3.3.1.min.js') ?>
	<? else : ?>
		<?= js('https://code.jquery.com/jquery-3.3.1.min.js') ?>
  <? endif ?>

</head>
<body class="page--<?= $page->template() ?>">
