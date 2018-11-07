<? $p = isset($p) ? $p : $page ?>
<? if($p->coverimage()->isNotEmpty()): ?>

	<? $img = $p->image($p->coverimage()) ?>
	<figure class="cover-image">
		<div class="bg" style="background-image: url('<?= $img->thumb(['width' => 1200])->url() ?>')"></div>
		<img src="<?= $img->thumb(['width' => 1200])->url() ?>" alt="<?= $img->alt() ?>" title="<?= $img->alt() ?>" />
	</figure>
	
<? endif ?>
