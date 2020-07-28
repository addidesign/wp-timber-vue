<?php
add_action('init', function () {

    register_extended_post_type('articles', [

        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,
        'menu_icon' => 'dashicons-location',
        'featured_image' => 'Article image',
        'enter_title_here' => 'Add the Article name...',
        # Show all posts on the post type archive:
        'archive' => [
        'nopaging' => true,
        ],
        # Add some custom columns to the admin screen:
        'admin_cols' => [
        'featured_image' => [
            'title'          => 'Featured Image',
            'featured_image' => 'thumbnail',
            'width'          => 60,
            'height'         => 60
        ],
        'title' => [
            'title' => 'Title'
            ],
        # Add a taxonomy column
        'type' => [
        'title' => 'Article type',
        'taxonomy' => 'article-type'
        ],
        'date'
        ],
        # Add a dropdown filter to the admin screen:
        'admin_filters' => [
        'article_types' => [
        'taxonomy' => 'article-type'
        ],
        ],

        'supports'  =>  ['title', 'excerpt', 'thumbnail'],

        ], [

        # Override the base names used for labels:
        'singular' => 'Article',
        'plural'   => 'Articles',
        'slug'     => 'articles',

    ]);
});