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
    "post_type" => "multimedia",
    "meta_query" => [
        "relation" => "AND",
        [
            "key" => "categoria",
            "value" => "Audio",
            "compare" => "==",
        ],
    ],
    "paged" => $paged,
];

$args = apply_filters(
    "udesly/posts/multimedia-where-categoria-eq-audio",
    $args
);

$query = new WP_Query($args);
?>
<div class="cms-wrapper w-dyn-list" udy-collection="multimedia">
              <?php if ( $query->have_posts() ) : ?><div role="list" class="cms-columns w-dyn-items">
                <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="cms-single multimedia w-dyn-item">
                  <div class="cms-multimedia_wrapper audio"><img loading="lazy" src="<?php echo udesly_get_image(_u('in3326753c', 'img'))->src ?>" alt="<?php echo udesly_get_image(_u('in3326753c', 'img'))->alt ?>" class="cms-multimedia_play" data-img="in3326753c" srcset="<?php echo udesly_get_image(_u('in3326753c', 'img'))->srcset ?>"><img loading="lazy" src="<?php echo udesly_get_image()->src ?>" alt="<?php echo udesly_get_image()->alt ?>" class="cms-multimedia_img audio" srcset="<?php echo udesly_get_image()->srcset ?>"></div>
                  <h3><?php the_title() ?></h3>
                </div><?php endwhile; ?>
              </div>
              <?php else : ?><div class="w-dyn-empty">
                <div>No items found.</div>
              </div><?php endif; ?>
            </div>
<?php wp_reset_postdata(); ?>
 