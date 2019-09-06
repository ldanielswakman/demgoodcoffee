 <? snippet('head') ?>

	<div class="layout">

		<? snippet('header', ['section' => 'about']) ?>

		<? snippet('cover-image', ['cover' => true]) ?>

	  <main class="main" role="main">

	  	<h1 class="pre-title"><?= $page->title()->html() ?></h1>

	    <div class="content"><?= $page->text()->kirbytext() ?></div>

	    <? snippet('tile-index', ['tiles' => $page->projects()->toStructure() ]) ?>

	  </main>
	  
	</div>

<? snippet('footer') ?>
