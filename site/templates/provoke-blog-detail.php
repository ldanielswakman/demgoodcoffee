<? snippet('head') ?>

	<div class="layout">

		<? snippet('header', ['section' => 'provoke']) ?>

		<? snippet('cover-image') ?>

	  <main class="main" role="main">

	  	<h1><?= $page->title()->html() ?></h1>

	  	<? snippet('nav', ['section' => 'provoke']) ?>

	    <div class="content"><?= $page->text()->kirbytext() ?></div>

	    <? if($page->next() && $page->next()->isVisible()): ?>

	    	<? $next = $page->next() ?>
				<a href="<?= $next->url() ?>" class="next-article">
					<? snippet('cover-image', ['p' =>$next]); ?>
					<div class="next-article__content">
						<span class="pretext"><?= l::get('next_article') ?></span>
						<h4><?= $next->title()->html() ?></h4>
						<?= excerpt($next->text(), '12', 'words') ?>
					</div>
				</a>

			<? endif ?>

	    <a href="<?= $page->parent()->url() ?>" class="button button--small button--back"><?= l::get('back_to_overview') ?></a>

	  </main>
	  
	</div>

<? snippet('footer') ?>