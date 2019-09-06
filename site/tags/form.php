<?php

kirbytext::$tags['form'] = array(
  'attr' => array(
    'url'
  ),
  'html' => function($tag) {

    if($tag->attr('form') == 'mailchimp') {
      $html = snippet('mailchimp-form', ['target_url' => $tag->attr('url')], true);
    } else {
      $html = 'No form found...';
    }

    return $html;
  }
);
