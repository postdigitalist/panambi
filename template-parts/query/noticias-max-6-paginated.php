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
    "posts_per_page" => 6,
    "paged" => $paged,
];

$args = apply_filters("udesly/posts/noticias-max-6-paginated", $args);

$query = new WP_Query($args);
?>
<div class="cms-wrapper w-dyn-list" udy-collection="noticias">
        <?php if ( $query->have_posts() ) : ?><div role="list" class="cms-columns w-dyn-items">
          <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div id="w-node-_1aeae543-16ac-f346-8f32-5829fff1213b-df630c62" role="listitem" class="cms-single w-dyn-item">
            <div class="cms-preview_img" style="<?php echo "background-image: url('" . udesly_get_image()->src . "')" ?>"></div>
            <h3 class="cms-preview_h3"><?php the_title() ?></h3>
            <p class="cms-preview_p"><?php the_excerpt() ?></p>
          </div><?php endwhile; ?>
        </div>
        <?php else : ?><div class="w-dyn-empty">
          <div>No items found.</div>
        </div><?php endif; ?>
        <?php if ($query->max_num_pages > 0) : ?><div role="navigation" aria-label="List" class="w-pagination-wrapper" data-query="noticias-max-6-paginated" data-paged="<?php echo $paged; ?>">
          <a href="#" aria-label="Previous Page" class="w-pagination-previous button secondary" <?php echo $paged == 1 ? "style=\"display: none;\"": "" ?>><svg class="w-pagination-previous-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
              <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
            </svg>
            <div class="w-inline-block">Ver entradas más recientes</div>
          </a>
          <a href="#" aria-label="Next Page" class="w-pagination-next button secondary" <?php echo $paged == $query->max_num_pages ? "style=\"display: none;\"": "" ?>>
            <div class="w-inline-block">Ver entradas anteriores</div><svg class="w-pagination-next-icon" height="12px" width="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" transform="translate(0, 1)">
              <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
            </svg>
          </a>
        </div><?php endif  ?>
      </div>
<?php wp_reset_postdata(); ?>
 