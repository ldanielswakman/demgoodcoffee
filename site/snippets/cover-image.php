<? if($page->coverimage()->isNotEmpty()): ?>

	<? $img = image($page->coverimage()) ?>
	<figure class="cover-image">
		<div class="bg" style="background: url('<?= $img->url() ?>')"></div>
		<img src="<?= $img->url() ?>" alt="<?= $img->alt() ?>" title="<?= $img->alt() ?>" />
	</figure>
	
<? endif ?>
