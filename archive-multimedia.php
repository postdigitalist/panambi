<?php


$args = [
    'wfPage' => '638cfb1bc429345a5396ee4d',
    'body' => 'body',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('archive-multimedia');
}
     
get_header('', $args);

udesly_get_content_template( 'archive-multimedia' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('archive-multimedia');
}

get_footer('', $args);
