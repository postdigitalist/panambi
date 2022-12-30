<?php global $post; ?>
    
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="main-section">
      <div class="hero-section">
        <div id="w-node-eace8c64-2bc5-8ecb-313a-52a548cccb1f-789514b2" class="hero_text-container"><img src="<?php echo udesly_get_image(_u('i37b2416', 'img'))->src ?>" loading="lazy" id="w-node-eace8c64-2bc5-8ecb-313a-52a548cccb20-789514b2" alt="<?php echo udesly_get_image(_u('i37b2416', 'img'))->alt ?>" class="hero_text-bg" data-img="i37b2416" srcset="<?php echo udesly_get_image(_u('i37b2416', 'img'))->srcset ?>">
          <div id="w-node-eace8c64-2bc5-8ecb-313a-52a548cccb21-789514b2" class="hero_text">
            <h1><?php the_title() ?></h1>
            <p class="paragraph"><?php the_excerpt() ?></p>
            <a href="<?php echo wp_get_attachment_url( udesly_get_custom_post_field( get_queried_object_id(), "reporte", "FileRef" ) ) ?>" class="button w-button" data-text="tnfb73d24"><?php echo _u('tnfb73d24','text'); ?></a>
          </div>
        </div>
        <div id="w-node-eace8c64-2bc5-8ecb-313a-52a548cccb26-789514b2" class="hero_img" style="<?php echo "background-image: url('" . udesly_get_image()->src . "')" ?>"><img src="<?php echo udesly_get_image(_u('i71185fac', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i71185fac', 'img'))->alt ?>" class="hero_sun" data-img="i71185fac" srcset="<?php echo udesly_get_image(_u('i71185fac', 'img'))->srcset ?>"></div>
      </div>
    </div>
    <div class="main-section">
      <h2 data-text="tn7feb21ed"><?php echo _u('tn7feb21ed','text'); ?></h2>
      <?php get_template_part('template-parts/query/campaas-skip-1-where-id-ne-current') ?>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  