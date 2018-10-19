<? snippet('head') ?>

	<div class="layout">

		<? snippet('header', ['section' => 'about']) ?>

	  <main class="main" role="main">

	  	<h1><?= $page->title()->html() ?></h1>

	  	<? snippet('nav', ['section' => 'about']) ?>

	    <div class="content"><?= $page->text()->kirbytext() ?></div>

	    <? snippet('tile-index', ['tiles' => $page->projects()->toStructure() ]) ?>

	  </main>
	  
	</div>

<? snippet('footer') ?>