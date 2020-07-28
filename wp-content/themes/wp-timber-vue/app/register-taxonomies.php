<?php

register_taxonomy('article-type', 'articles', [
  'labels' => [
      'name' => 'Article Types',
      'singular' => 'Article Type',
      'plural'   => 'Article Types',
      'menu_name' => 'Article Types'

  ],
    'meta_box_cb' => 'post_categories_meta_box',
    'hierarchical'  =>  true,
    'rewrite'   =>  ['slug' => 'article-type', 'with_front' => false]
  ]);