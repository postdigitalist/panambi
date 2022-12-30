
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <main class="main wf-section">
    <div class="hero-section denuncias">
      <div id="w-node-_52855e0b-641b-509f-67aa-fe447b632277-15af79c5" class="hero_text-container">
        <div id="w-node-_52855e0b-641b-509f-67aa-fe447b632279-15af79c5" class="hero_text alt">
          <h1 class="main-h1"><?php the_title(); ?></h1>
        </div>
      </div>
      <div id="w-node-_52855e0b-641b-509f-67aa-fe447b63227e-15af79c5" class="hero_img default" style="background-image: url('<?php echo udesly_get_image()->src ?>');"><img src="<?php echo udesly_get_image(_u('i71185fac', 'img'))->src ?>" loading="lazy" alt="<?php echo udesly_get_image(_u('i71185fac', 'img'))->alt ?>" class="hero_sun" data-img="i71185fac" srcset="<?php echo udesly_get_image(_u('i71185fac', 'img'))->srcset ?>"></div>
    </div>
    <div class="main-section">
      <div class="rich-text w-richtext"><?php the_content(); ?></div>
    </div>
    <div class="main-section">
      <?php get_template_part("template-parts/symbols/cta-de-denuncias"); ?>
    </div>
  </main>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  