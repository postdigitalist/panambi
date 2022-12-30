<?php


$args = [
    'wfPage' => '638cfb281f96ab4a46630e98',
    'body' => 'body _w-bg roseta',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-contacto');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-contacto' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-contacto');
}

get_footer('', $args);
