<?php


$args = [
    'wfPage' => '638cfb300787c70824ea0191',
    'body' => 'body',
    'head' => 'head/page-realiza-tu-denuncia',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-realiza-tu-denuncia');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-realiza-tu-denuncia' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/page-realiza-tu-denuncia',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-realiza-tu-denuncia');
}

get_footer('', $args);
