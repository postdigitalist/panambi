<?php global $post; ?>
    
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="main-section collection">
      <div class="title-container">
        <h1 class="h1-contained" data-text="t6257c02e"><?php echo _u('t6257c02e','text'); ?></h1>
      </div>
      <?php get_template_part('template-parts/query/noticias-max-6-paginated') ?>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  