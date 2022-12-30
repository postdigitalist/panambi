<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<?php

if (isset($_GET["p_id"])) {
    $paged = $_GET["p_id"];
} else {
    $paged = isset($args["paged"]) ? $args["paged"] : 1;
}

$args = [
    "post_type" => "noticias",
    "posts_per_page" => 3,
    "post__not_in" => [get_the_ID()],
    "paged" => $paged,
];

$args = apply_filters("udesly/posts/noticias-max-3-where-id-ne-current", $args);

$query = new WP_Query($args);
?>
<div class="cms-wrapper w-dyn-list" udy-collection="noticias">
        <?php if ( $query->have_posts() ) : ?><div role="list" class="cms-columns w-dyn-items">
          <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div id="w-node-_6f252065-f169-9acd-1f73-200127360591-7248243b" role="listitem" class="cms-single w-dyn-item">
            <div class="cms-preview_img" style="<?php echo "background-image: url('" . udesly_get_image()->src . "')" ?>"></div>
            <h3 class="cms-preview_h3"><?php the_title() ?></h3>
            <p class="cms-preview_p"><?php the_excerpt() ?></p>
          </div><?php endwhile; ?>
        </div>
        <?php else : ?><div class="w-dyn-empty">
          <div>No items found.</div>
        </div><?php endif; ?>
      </div>
<?php wp_reset_postdata(); ?>
 