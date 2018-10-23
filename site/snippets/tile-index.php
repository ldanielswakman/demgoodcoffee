<? $tiles = (isset($tiles)) ? $tiles : [] ?>

<div class="tile-index">

  <? foreach($tiles as $tile) : ?>

    <?
    $isLink = false;
    if (strlen($tile->url()) > 0) {
      $isLink = true;
    }
    ?>
    <?= ($isLink) ? '<a href="' . $tile->url() . '" class="tile">' : '<div class="tile">' ?>

      <?
      $descr = '';
      if($tile->description()->isNotEmpty()) { $descr = $tile->description()->html(); }
      if($tile->text()->isNotEmpty()) { $descr = $tile->text()->html(); }
      ?>

      <?
      // Impact meter stats
      if (strlen($tile->impact_value_top()) > 0) :

        $str = '<span class="top">' . $tile->impact_value_top() . '</span>';
        if (strlen($tile->impact_value_bottom()) > 0) {
          $str .= '<span class="separator">/</span><span class="bottom">' . $tile->impact_value_bottom() . '</span>';
        }
      ?>
        <div class="stats"><?= $str ?></div>
      <? endif ?>

  		<h2><?= $tile->title()->html() ?></h2>

      <? if ($tile->date()) : ?>
        <p class="meta" style="opacity: 0.5"><?= date('d M Y', $tile->date()) ?></p>
      <? endif; ?>

  		<div class="excerpt">
  			<p><?= excerpt($descr, '24', 'words') ?></p>
  		</div>

  		<div class="description">
  			<p><?= $descr ?></p>
  		</div>

  		<object class="actions">
        <? if ($isLink) : ?>
          <a href="<?= $tile->url() ?>"><?= l::get('read_more') ?></a>
        <? else : ?>
      		<a href="#" onclick="$(this).closest('.tile').toggleClass('isExpanded')">
      			<span class="read-more"><?= l::get('read_more') ?></span>
      			<span class="read-less"><?= l::get('read_less') ?></span>
    			</a>
        <? endif ?>

    		<? if ($tile->report()->isNotEmpty()) : ?>
    			<a href="#" class="report"><?= l::get('report_pdf') ?></a>
    		<? endif ?>
    	</object>

  	<?= ($isLink) ? '</a>' : '</div>' ?>
  <? endforeach ?>

</div>