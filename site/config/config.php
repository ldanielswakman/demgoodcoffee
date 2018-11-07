<?php

/*

---------------------------------------
Languages
---------------------------------------

*/

$locale_tr = array(
  LC_COLLATE  => 'tr_TR.utf8',
  LC_MONETARY => 'tr_TR.utf8',
  LC_NUMERIC  => 'tr_TR.utf8',
  LC_TIME     => 'tr_TR.utf8',
  LC_MESSAGES => 'tr_TR.utf8',
  LC_CTYPE    => 'en_US.utf8'
);

c::set('languages', array(
  array(
    'code'    => 'tr',
    'name'    => 'Türkçe',
    'default' => true,
    'locale'  => $locale_tr,
    'url'     => '/',
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_UK.UTF-8',
    'url'     => '/en',
  ),
));


c::set('debug', true);


/*

---------------------------------------
Routes
---------------------------------------

*/
c::set('routes', [
  [
    'pattern' => 'about',
    'action' => function () {
      $first = site()->pages()->filterBy('section', 'about')->first();
      // TODO: Make this language-specific
      go($first);
    }
  ],
  [
    'pattern' => 'provoke',
    'action' => function () {
      $first = site()->pages()->filterBy('section', 'provoke')->first();
      // TODO: Make this language-specific
      go($first);
    }
  ],
]);



/*

---------------------------------------
Widgets (on Panel Dashboard)
---------------------------------------

*/
c::set('panel.widgets', array(
  'account'  => true,
  'history'  => true,
  'pages'    => false,
  'pages2'   => true,
  'live'     => true,
  'help_docs'=> true,
  'site'     => false,
));