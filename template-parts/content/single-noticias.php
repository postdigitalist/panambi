<?php global $post; ?>
    
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="main-section">
      <div class="hero-section">
        <div id="w-node-_87d91cf3-3025-2f82-00bd-8e22f1d9ef70-7248243b" class="hero_text-container">
          <div id="w-node-_87d91cf3-3025-2f82-00bd-8e22f1d9ef72-7248243b" class="hero_text alt">
            <h1><?php the_title() ?></h1>
            <div class="hero_meta">
              <p class="hero_meta-label" data-text="t409d75d"><?php echo _u('t409d75d','text'); ?></p>
              <p class="hero_meta-value"><?php the_modified_date('d/n/Y') ?></p>
            </div>
            <div class="hero_meta">
              <p class="hero_meta-label" data-text="tna143386"><?php echo _u('tna143386','text'); ?></p>
              <?php $nested_term = udesly_get_the_term('miembres-del-equipo'); ?><?php if ($nested_term && !$nested_term->errors) : ?><p class="hero_meta-value" nested-term="true"><?php echo $nested_term->name; ?></p><?php endif  ?>
            </div>
            <div class="hero_meta">
              <div class="read-time_wrapper"><img src="<?php echo udesly_get_image(_u('i926fdaa', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i926fdaa', 'img'))->alt ?>" class="read-time_icon" data-img="i926fdaa" srcset="<?php echo udesly_get_image(_u('i926fdaa', 'img'))->srcset ?>">
                <p class="hero_meta-value" data-textarea="tan56f0e64a"><?php echo _u('tan56f0e64a', 'textarea'); ?></p>
              </div>
            </div>
            <p class="noticia_hero-p"><?php the_excerpt() ?></p>
          </div>
        </div>
        <div id="w-node-_87d91cf3-3025-2f82-00bd-8e22f1d9ef79-7248243b" class="hero_img" style="<?php echo "background-image: url('" . udesly_get_image()->src . "')" ?>"><img src="<?php echo udesly_get_image(_u('i71185fac', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i71185fac', 'img'))->alt ?>" class="hero_sun" data-img="i71185fac" srcset="<?php echo udesly_get_image(_u('i71185fac', 'img'))->srcset ?>"></div>
      </div>
    </div>
    <div id="article" class="main-section">
      <div class="rich-text w-richtext"><?php the_content() ?></div>
    </div>
    <div class="main-section noticia_share">
      <div class="p-semibold" data-text="tn360ac03d"><?php echo _u('tn360ac03d','text'); ?></div>
      <div id="w-node-_2d9197d1-5538-33b9-ba8a-9702e48c0616-7248243b" class="social-icons">
        <a href="<?php echo _u('a23','link'); ?>" class="social-icon w-inline-block" data-link="a23"><img src="<?php echo udesly_get_image(_u('i63d3600f', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i63d3600f', 'img'))->alt ?>" data-img="i63d3600f" srcset="<?php echo udesly_get_image(_u('i63d3600f', 'img'))->srcset ?>"></a>
        <a href="<?php echo _u('a23','link'); ?>" class="social-icon w-inline-block" data-link="a23"><img src="<?php echo udesly_get_image(_u('i36c5e456', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i36c5e456', 'img'))->alt ?>" data-img="i36c5e456" srcset="<?php echo udesly_get_image(_u('i36c5e456', 'img'))->srcset ?>"></a>
        <a href="<?php echo _u('a23','link'); ?>" class="social-icon w-inline-block" data-link="a23"><img src="<?php echo udesly_get_image(_u('i2dcab44e', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i2dcab44e', 'img'))->alt ?>" data-img="i2dcab44e" srcset="<?php echo udesly_get_image(_u('i2dcab44e', 'img'))->srcset ?>"></a>
      </div>
    </div>
    <div class="main-section">
      <h2 data-text="t2ef97e01"><?php echo _u('t2ef97e01','text'); ?></h2>
      <?php get_template_part('template-parts/query/noticias-max-3-where-id-ne-current') ?>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  