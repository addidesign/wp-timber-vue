<?php

add_action('rest_api_init', function () {

    register_rest_route('wptimbervue/v2', '/something', [
      'methods' =>  ['GET'],
      'callback'  =>  'wptimbervue__cb'
      ]);
});

function wptimbervue__cb(WP_REST_Request $request)
{
    return $request;
}
