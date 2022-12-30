<?php


$args = [
    'wfPage' => '638cf2f0346ec74f789514b2',
    'body' => 'body',
    'head' => 'head/front-page',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('single-campanas');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'single-campanas' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/front-page',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('single-campanas');
}

get_footer('', $args);
