<? snippet('head') ?>

	<div class="layout">

		<? snippet('cover-image') ?>

	  <main class="main" role="main">

	  	<a class="logo" href="<?= $site->homepage()->url() ?>">
		    <span class="text"><?= $site->title()->html() ?></span>
		    <? snippet('logo') ?>
		  </a>

		  <br /><br/>

	  	<h1><?= $page->intro()->html() ?></h1>

	    <div class="content"><?= $page->text()->kirbytext() ?></div>

	  </main>
	  
	</div>

<? snippet('footer') ?>