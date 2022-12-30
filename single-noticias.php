<?php


$args = [
    'wfPage' => '638cf28495fb43437248243b',
    'body' => 'body',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('single-noticias');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'single-noticias' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/single-noticias',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('single-noticias');
}

get_footer('', $args);
