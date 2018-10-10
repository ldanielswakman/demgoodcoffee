<? snippet('head') ?>

	<? snippet('header', ['section' => 'provoke']) ?>

  <main class="main" role="main">

  	<h1><?= $page->title()->html() ?></h1>

  	<? snippet('cover-image') ?>

    <div class="content"><?= $page->text()->kirbytext() ?></div>

  </main>

<? snippet('footer') ?>