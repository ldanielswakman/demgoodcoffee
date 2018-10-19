<? snippet('head') ?>

	<div class="layout">

		<? snippet('header', ['section' => 'provoke']) ?>

		<? snippet('cover-image') ?>

	  <main class="main" role="main">

	  	<h1><?= $page->title()->html() ?></h1>

	  	<? snippet('nav', ['section' => 'provoke']) ?>

	    <div class="content"><?= $page->text()->kirbytext() ?></div>

	    <? snippet('tile-index', ['tiles' => $page->children()->visible()->flip() ]) ?>

	  </main>
	  
	</div>

<? snippet('footer') ?>
