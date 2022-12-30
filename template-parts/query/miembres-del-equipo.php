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
    "taxonomy" => "miembres-del-equipo",
    "hide_empty" => 0,
    "paged" => $paged,
];

$args = apply_filters("udesly/terms/miembres-del-equipo", $args);

$query = new WP_Term_Query($args);
?>
<div class="cms-wrapper w-dyn-list" udy-collection="miembres-del-equipo">
        <?php if ( ! empty($query->terms) ) : ?><div role="list" class="cms-columns w-dyn-items">
          <?php foreach ($query->get_terms() as $term) : ?><div role="listitem" class="single-team w-dyn-item"><img src="<?php echo udesly_get_custom_term_field( $term->term_id, "fotografia", "ImageRef" )->src ?>" loading="lazy" alt="<?php echo $term->name; ?>" class="single-team_img" srcset="<?php echo udesly_get_custom_term_field( $term->term_id, "fotografia", "ImageRef" )->srcset ?>">
            <h3 class="cms-preview_h3"><?php echo $term->name; ?></h3>
            <p class="cms-preview_p"><?php echo udesly_get_custom_term_field( $term->term_id, "puesto", "PlainText" ) ?></p>
          </div><?php endforeach ?>
        </div>
        <?php else : ?><div class="w-dyn-empty">
          <div>No items found.</div>
        </div><?php endif; ?>
      </div>
 