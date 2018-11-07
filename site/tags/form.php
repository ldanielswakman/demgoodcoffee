<?php

kirbytext::$tags['form'] = array(
  'attr' => array(
  ),
  'html' => function($tag) {

    if($tag->attr('form') == 'mailchimp') {
      $html = snippet('mailchimp-form', [], true);
    } else {
      $html = 'No form found...';
    }

    return $html;
  }
);
