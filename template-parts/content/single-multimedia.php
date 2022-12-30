<?php global $post; ?>
    
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="main-section multimedia-single">
      <div class="multimedia-video w-video w-embed"><?php echo wp_oembed_get(udesly_get_custom_post_field( get_queried_object_id(), "video", "Video" )) ?></div><?php if (!(udesly_get_custom_post_field( $post->ID, "video", "Video" ))) : ?><img src="<?php echo udesly_get_image()->src ?>" loading="lazy" alt="<?php echo udesly_get_image()->alt ?>" class="multimedia-cover" srcset="<?php echo udesly_get_image()->srcset ?>"><?php endif  ?>
      <h1><?php the_title() ?></h1>
      <div class="rich-text multimedia w-richtext"><?php the_content() ?></div>
    </div>
    <div class="main-section noticia_share">
      <div class="p-semibold" data-text="tn71f67d50"><?php echo _u('tn71f67d50','text'); ?></div>
      <div id="w-node-_7a4fba0c-fd46-dddf-e6f9-4522e8e46b3c-2f86825b" class="social-icons">
        <a href="<?php echo _u('a23','link'); ?>" class="social-icon w-inline-block" data-link="a23"><img src="<?php echo udesly_get_image(_u('i63d3600f', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i63d3600f', 'img'))->alt ?>" data-img="i63d3600f" srcset="<?php echo udesly_get_image(_u('i63d3600f', 'img'))->srcset ?>"></a>
        <a href="<?php echo _u('a23','link'); ?>" class="social-icon w-inline-block" data-link="a23"><img src="<?php echo udesly_get_image(_u('i36c5e456', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i36c5e456', 'img'))->alt ?>" data-img="i36c5e456" srcset="<?php echo udesly_get_image(_u('i36c5e456', 'img'))->srcset ?>"></a>
        <a href="<?php echo _u('a23','link'); ?>" class="social-icon w-inline-block" data-link="a23"><img src="<?php echo udesly_get_image(_u('i2dcab44e', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i2dcab44e', 'img'))->alt ?>" data-img="i2dcab44e" srcset="<?php echo udesly_get_image(_u('i2dcab44e', 'img'))->srcset ?>"></a>
      </div>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  