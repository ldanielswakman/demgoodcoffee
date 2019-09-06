<?php
$p = isset($p) ? $p : $page;
$cover = isset($cover) ? $cover : false;
if($p->coverimage_fit()->isNotEmpty() && $p->coverimage_fit() == 'cover') { $cover = true; }
?>

<?php if($p->coverimage()->isNotEmpty()): ?>

	<?php $img = $p->image($p->coverimage()) ?>
	<figure class="cover-image<?= ($cover == true) ? ' cover-image--full' : '' ?>">
		<div class="bg" style="background-image: url('<?= $img->thumb(['width' => 1200])->url() ?>')"></div>
		<img src="<?= $img->thumb(['width' => 1200])->url() ?>" alt="<?= $img->alt() ?>" title="<?= $img->alt() ?>" />
	</figure>
	
<?php endif ?>
