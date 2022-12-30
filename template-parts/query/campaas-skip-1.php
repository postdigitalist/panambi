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
    "post_type" => "campanas",
    "offset" => 1,
    "paged" => $paged,
];

$args = apply_filters("udesly/posts/campaas-skip-1", $args);

$query = new WP_Query($args);
?>
<div class="cms-wrapper w-dyn-list" udy-collection="campanas">
        <?php if ( $query->have_posts() ) : ?><div role="list" class="cms-list w-dyn-items">
          <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="cms-horizontal-preview w-dyn-item">
            <h3 class="cms-preview_h3"><?php the_title() ?></h3>
            <a href="<?php the_permalink() ?>" class="no-underline">Lee más -&gt;</a>
          </div><?php endwhile; ?>
        </div>
        <?php else : ?><div class="w-dyn-empty">
          <div>No items found.</div>
        </div><?php endif; ?>
      </div>
<?php wp_reset_postdata(); ?>
 