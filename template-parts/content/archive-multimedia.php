<?php global $post; ?>
    
  <?php get_template_part("template-parts/symbols/site-nav"); ?>
  <div class="main wf-section">
    <div class="main-section">
      <div class="title-container">
        <h1 class="h1-contained" data-text="t270a53e5"><?php echo _u('t270a53e5','text'); ?></h1>
      </div>
      <div data-current="Videos" data-easing="ease" data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="cms-filter_wrapper w-tab-menu">
          <a data-w-tab="Videos" class="cms-filter_tab w-inline-block w-tab-link w--current" data-link="a3fbe8166" href="<?php echo _u('a3fbe8166','link'); ?>">
            <div data-text="tn67489888"><?php echo _u('tn67489888','text'); ?></div>
          </a>
          <a data-w-tab="Imágenes" class="cms-filter_tab w-inline-block w-tab-link" data-link="a3fbe8166" href="<?php echo _u('a3fbe8166','link'); ?>">
            <div data-text="tn54f58dff"><?php echo _u('tn54f58dff','text'); ?></div>
          </a>
          <a data-w-tab="Audio" class="cms-filter_tab w-inline-block w-tab-link" data-link="a3fbe8166" href="<?php echo _u('a3fbe8166','link'); ?>">
            <div data-text="t3caabb6"><?php echo _u('t3caabb6','text'); ?></div>
          </a>
        </div>
        <div class="w-tab-content">
          <div data-w-tab="Videos" class="cms-filter_container w-tab-pane w--tab-active">
            <?php get_template_part('template-parts/query/multimedia-where-categoria-eq-videos') ?>
          </div>
          <div data-w-tab="Imágenes" class="w-tab-pane">
            <?php get_template_part('template-parts/query/multimedia-where-categoria-eq-imgenes') ?>
          </div>
          <div data-w-tab="Audio" class="w-tab-pane">
            <?php get_template_part('template-parts/query/multimedia-where-categoria-eq-audio') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part("template-parts/symbols/site-footer"); ?>
  
  