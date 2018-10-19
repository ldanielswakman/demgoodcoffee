<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('debug', true);



/*

---------------------------------------
Languages
---------------------------------------

*/
c::set('languages', array(
  array(
    'code'    => 'tr',
    'name'    => 'Türkçe',
    'default' => true,
    'locale'  => 'tr_TR',
    'url'     => '/',
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_UK',
    'url'     => '/en',
  ),
));



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
  'pages2'    => true,
  'site'     => false,
));