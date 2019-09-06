<?php if(false): ?>
<div class="lang-switcher">
	<? foreach($site->languages() as $lang): ?>
		<? if($site->language() !== $lang) : ?>
		  <a<? e($site->language() == $lang, ' class="active"') ?> href="<?= $page->url($lang->code()) ?>">
		    <?= html($lang->name()) ?>
		  </a>
		<? endif ?>
	<? endforeach ?>
</div>
<? endif ?>