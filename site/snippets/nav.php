<? if (isset($section)) : ?>
	<? $pages = $site->pages()->filterBy('section', $section); ?>

	<nav>
		<ul>
			<? foreach ($pages as $p): ?>
				<li><a href="<?= $p->url() ?>"><?= $p->title() ?></a></li>
				<? endforeach ?>
		</ul>
	</nav>
<? endif ?>
