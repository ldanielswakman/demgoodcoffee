  <? snippet('head') ?>

  <main>

    <h1 class="logo">
      <a href="<?= $site->homepage()->url() ?>">
        <span class="text"><?= $site->title()->html() ?></span>
        <? snippet('logo') ?>
      </a>
    </h1>

    <div class="graphic">
      <img src="<?= url('assets/images/brand-graphic.png') ?>" alt="" />
    </div>

    <? snippet('lang-switcher') ?>

    <section class="panel panel--left">
      <a class="button button--about" href="<?= url('about') ?>"><?= l::get('about_us') ?></a>
    </section>
    
    <section class="panel panel--right">
      <a class="button button--provoke" href="<?= url('provoke') ?>"><?= l::get('provoke_action') ?></a>
    </section>

  </main>

</body>
</html>