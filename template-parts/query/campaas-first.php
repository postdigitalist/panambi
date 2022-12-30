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
    "posts_per_page" => 1,
    "paged" => $paged,
];

$args = apply_filters("udesly/posts/campaas-first", $args);

$query = new WP_Query($args);
?>
<div class="featured-campaign_wrapper w-dyn-list" udy-collection="campanas">
        <?php if ( $query->have_posts() ) : ?><div role="list" class="w-dyn-items">
          <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="featured-campaign w-dyn-item">
            <div class="hero-section">
              <div id="w-node-_46a8b171-5031-5b9e-ea11-59db6f0424b8-e7630af1" class="hero_text-container"><img src="<?php echo udesly_get_image(_u('i37b2416', 'img'))->src ?>" loading="lazy" id="w-node-_46a8b171-5031-5b9e-ea11-59db6f0424b9-e7630af1" alt="<?php echo udesly_get_image(_u('i37b2416', 'img'))->alt ?>" class="hero_text-bg" data-img="i37b2416" srcset="<?php echo udesly_get_image(_u('i37b2416', 'img'))->srcset ?>">
                <div id="w-node-_46a8b171-5031-5b9e-ea11-59db6f0424ba-e7630af1" class="hero_text">
                  <h2 class="heading-5"><?php the_title() ?></h2>
                  <p class="paragraph"><?php the_excerpt() ?></p>
                  <a href="<?php echo wp_get_attachment_url( udesly_get_custom_post_field( $post->ID, "reporte", "FileRef" ) ) ?>" class="button w-button">Descarga el reporte</a>
                </div>
              </div>
              <div id="w-node-_46a8b171-5031-5b9e-ea11-59db6f0424c1-e7630af1" class="hero_img" style="<?php echo "background-image: url('" . udesly_get_image()->src . "')" ?>"><img src="<?php echo udesly_get_image(_u('i71185fac', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i71185fac', 'img'))->alt ?>" class="hero_sun" data-img="i71185fac" srcset="<?php echo udesly_get_image(_u('i71185fac', 'img'))->srcset ?>"></div>
            </div>
          </div><?php endwhile; ?>
        </div>
        <?php else : ?><div class="w-dyn-empty">
          <div>No items found.</div>
        </div><?php endif; ?>
      </div>
<?php wp_reset_postdata(); ?>
 