
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="main-section">
      <h1 data-text="tn4036df46"><?php echo _u('tn4036df46','text'); ?></h1>
      <form action="<?php echo home_url(''); ?>" class="search w-form" method="get" role="search"><input type="search" class="search-input w-input" maxlength="256" name="s" placeholder="¿Qué quieres encontrar?" id="search" required=""><input type="submit" value="Buscar" class="button w-button"><?php global $wp_query; $total_results = $wp_query->found_posts; ?><?php if (is_search()) : ?><div data-node-type="search-result-wrapper" id=""><?php if ($total_results > 0) : ?><div data-node-type="search-result-list" id=""><?php while(have_posts()) : the_post(); ?><div data-node-type="search-result-item" class="search-result" id=""><h3 data-node-type="heading"><?php the_title() ?></h3><p data-node-type="paragraph" id=""><?php the_excerpt() ?></p><a data-node-type="link" id="" href="<?php the_permalink(); ?>">Text Link</a></div><?php endwhile; ?></div><?php endif  ?><?php if ($total_results == 0) : ?><div data-node-type="search-result-empty" id=""><?php if ($total_results == 0) : ?><div data-node-type="block" id="">No matching results.</div><?php endif  ?></div><?php endif  ?></div><?php endif  ?></form>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  