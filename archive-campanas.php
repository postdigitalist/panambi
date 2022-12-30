<?php


$args = [
    'wfPage' => '638cfb161f96ab80e7630af1',
    'body' => 'body',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('archive-campanas');
}
     
get_header('', $args);

udesly_get_content_template( 'archive-campanas' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('archive-campanas');
}

get_footer('', $args);
