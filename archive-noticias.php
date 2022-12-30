<?php


$args = [
    'wfPage' => '638cfb231f96ab19df630c62',
    'body' => 'body _w-bg',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('archive-noticias');
}
     
get_header('', $args);

udesly_get_content_template( 'archive-noticias' );

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('archive-noticias');
}

get_footer('', $args);
