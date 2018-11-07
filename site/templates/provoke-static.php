<? snippet('head') ?>

	<div class="layout">

		<? snippet('header', ['section' => 'provoke']) ?>

		<? snippet('cover-image') ?>

	  <main class="main" role="main">

	  	<h1><?= $page->title()->html() ?></h1>

	    <div class="content"><?= $page->text()->kirbytext() ?></div>

	  </main>
	  
	</div>

<? snippet('footer') ?>