<header>

	<? // Logo ?>
	<? $colour = (isset($section) && $section == 'provoke') ? 'orange' : 'teal'; ?>
  <a class="logo" href="<?= $site->homepage()->url() ?>">
    <span class="text"><?= $site->title()->html() ?></span>
    <? snippet('logo', ['colour' => $colour]) ?>
  </a>

	<?
	// Menu
	snippet('nav', ['section' => isset($section) ? $section : 'about']);


	// Lang switcher
	snippet('lang-switcher');

	// Action button
	if(isset($section) && $section == 'provoke'): ?>
		<a class="button button--about button--arrow-left" href="<?= $site->language()->url() . '/about' ?>"><?= l::get('about_us') ?></a>
	<? else: ?>
		<a class="button button--provoke button--arrow-right" href="<?= $site->language()->url() . '/provoke' ?>"><?= l::get('provoke_action') ?></a>
	<?
	endif;
	?>

</header>
