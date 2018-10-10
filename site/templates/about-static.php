<? snippet('head') ?>

	<? snippet('header', ['section' => 'about']) ?>

  <main class="main" role="main">

  	<h1><?= $page->title()->html() ?></h1>

    <?= $page->text()->kirbytext() ?>

  </main>

<? snippet('footer') ?>