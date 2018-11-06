<? if($page->coverimage()->isNotEmpty()): ?>

	<? $img = image($page->coverimage()) ?>
	<figure class="cover-image">
		<div class="bg" style="background: url('<?= $img->thumb(['width' => 1200])->url() ?>')"></div>
		<img src="<?= $img->thumb(['width' => 1200])->url() ?>" alt="<?= $img->alt() ?>" title="<?= $img->alt() ?>" />
	</figure>
	
<? endif ?>
