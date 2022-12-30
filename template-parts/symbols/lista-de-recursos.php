<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>
<div class="cms-wrapper w-dyn-list" sym="true" udy-collection="campanas">
          <?php if ( $query->have_posts() ) : ?><div role="list" class="cms-list w-dyn-items">
            <?php while ($query->have_posts()) : $query->the_post(); global $post; ?><div role="listitem" class="cms-horizontal-preview w-dyn-item">
              <h3 class="cms-preview_h3"><?php the_title() ?></h3>
              <a href="#" class="no-underline">Lee más-&gt;</a>
            </div><?php endwhile; ?>
          </div>
          <?php else : ?><div class="w-dyn-empty">
            <div>No items found.</div>
          </div><?php endif; ?>
        </div>
 