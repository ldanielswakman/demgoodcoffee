<? $categories = $pages->pluck('section', ',', true) ?>
<? foreach($categories as $category) : ?>
<h3 style="color: #999;"><?= ucfirst($category) ?></h3>
<ul class="nav nav-list sidebar-list">
  <? foreach($pages->filterBy('section', $category) as $p) : ?>
  <?php echo new Kirby\Panel\Snippet('pages/sidebar/subpage', array('subpage' => $p)) ?>
  <?php endforeach ?>
</ul>
<br>
<? endforeach ?>

<ul class="nav nav-list sidebar-list">
  <? foreach($pages->filterBy('section', '') as $p) : ?>
  <?php echo new Kirby\Panel\Snippet('pages/sidebar/subpage', array('subpage' => $p)) ?>
  <?php endforeach ?>
</ul>