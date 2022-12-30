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
    "paged" => $paged,
];

$args = apply_filters("udesly/posts/noticias-max-3", $args);

$query = new WP_Query($args);
?>
<div class="cms-wrapper w-dyn-list" sym="true" udy-collection="noticias">
          <?php if ( $query->have_posts() ) : ?><div role="list" class="cms-columns w-dyn-items">
            <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div id="w-node-a20ef7cd-7ab5-303a-f9b9-3fe9929dee96-929dee94" role="listitem" class="cms-single w-dyn-item">
              <a href="#" class="link-block_no-underline w-inline-block">
                <div class="cms-preview_img" style="<?php echo "background-image: url('" . udesly_get_image()->src . "')" ?>"></div>
                <h3 class="cms-preview_h3"><?php the_title() ?></h3>
                <p class="cms-preview_p paragraph-2 paragraph-3 paragraph-4 paragraph-5 paragraph-6 paragraph-7 paragraph-8 paragraph-9"><?php the_excerpt() ?></p>
              </a>
            </div><?php endwhile; ?>
          </div>
          <?php else : ?><div class="empty-state w-dyn-empty">
            <div sym-bind="{&quot;children&quot;:{&quot;type&quot;:&quot;Select&quot;,&quot;val&quot;:{&quot;from&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:&quot;data&quot;},&quot;prop&quot;:&quot;bfd9b9f7-9582-ac36-5be6-719cf995a59a&quot;}}}" class="error-message error">No hay nada por aquí todavía... </div>
          </div><?php endif; ?>
        </div>
<?php wp_reset_postdata(); ?>
 