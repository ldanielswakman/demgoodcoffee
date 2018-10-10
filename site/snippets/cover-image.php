<? if($page->coverimage()->isNotEmpty()): ?>

	<? $img = image($page->coverimage()) ?>
	<figure class="cover-image">
		<img src="<?= $img->url() ?>" alt="<?= $img->alt() ?>" title="<?= $img->alt() ?>" />
	</figure>
	
<? endif ?>
