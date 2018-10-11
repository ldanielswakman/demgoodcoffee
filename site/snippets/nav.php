<? if (isset($section)) : ?>
	<? $pages = $site->pages()->filterBy('section', $section); ?>

	<nav>
		<ol>
			<? $i=1; foreach ($pages as $p): ?>
				<li<?= r($p->isOpen(), ' class="isActive"') ?>><a href="<?= $p->url() ?>">
					<div class="number"><?= $i ?></div>
					<div class="text"><?= $p->title() ?></div>
				</a></li>
				<? $i++; endforeach ?>
		</ol>
	</nav>
<? endif ?>
