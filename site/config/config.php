<?php

/*

---------------------------------------
Languages
---------------------------------------

*/

$locale_tr = array(
  LC_COLLATE  => 'tr_TR.UTF-8',
  LC_MONETARY => 'tr_TR.UTF-8',
  LC_NUMERIC  => 'tr_TR.UTF-8',
  LC_TIME     => 'tr_TR.UTF-8',
  LC_MESSAGES => 'tr_TR.UTF-8',
  LC_CTYPE    => 'en_US.UTF-8'
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



// Configure date handling
c::set('date.handler','strftime');
c::set('locale','tr_TR.utf-8');



/*

---------------------------------------
Routes
---------------------------------------

*/
c::set('routes', [
  [
    'pattern' => 'about',
    'action' => function () {
      // Retrieve first page in section
      $first = site()->pages()->filterBy('section', 'about')->first();
      // Set correct language
      site()->visit($first, 'tr');
      // Visit page
      go($first);
    }
  ],
  [
    'pattern' => 'en/about',
    'action' => function () {
      // Retrieve first page in section
      $first = site()->pages()->filterBy('section', 'about')->first();
      // Set correct language
      site()->visit($first, 'en');
      // Visit page
      go($first);
    }
  ],
  [
    'pattern' => 'provoke',
    'action' => function () {
      // Retrieve first page in section
      $first = site()->pages()->filterBy('section', 'provoke')->first();
      // Set correct language
      site()->visit($first, 'tr');
      // Visit page
      go($first);
    }
  ],
  [
    'pattern' => 'en/provoke',
    'action' => function () {
      // Retrieve first page in section
      $first = site()->pages()->filterBy('section', 'provoke')->first();
      // Set correct language
      site()->visit($first, 'en');
      // Visit page
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