<header>

	<? // Logo ?>
	<? $colour = (isset($section) && $section == 'provoke') ? 'orange' : 'teal'; ?>
  <a class="logo" href="<?= $site->homepage()->url() ?>">
    <span class="text"><?= $site->title()->html() ?></span>
    <? snippet('logo', ['colour' => $colour]) ?>
  </a>

	<? snippet('lang-switcher') ?>

  <? // Action button ?>
	<? if(isset($section) && $section == 'provoke'): ?>
		<a class="button button--about" href="<?= url('about') ?>"><?= l::get('about_us') ?></a>
	<? else: ?>
		<a class="button button--provoke" href="<?= url('provoke') ?>"><?= l::get('provoke_action') ?></a>
	<? endif ?>

</header>

<? // Menu ?>
<? snippet('nav', ['section' => isset($section) ? $section : 'about']) ?>
