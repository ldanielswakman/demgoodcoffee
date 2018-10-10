<? if (isset($section)) : ?>
	<? $pages = $site->pages()->filterBy('section', $section); ?>

	<nav>
		<ol>
			<? foreach ($pages as $p): ?>
				<li<?= r($p->isOpen(), ' class="isActive"') ?>><a href="<?= $p->url() ?>"><?= $p->title() ?></a></li>
				<? endforeach ?>
		</ol>
	</nav>
<? endif ?>
