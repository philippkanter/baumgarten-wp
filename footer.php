<footer class="bg-light">

  <div class="container-fluid">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

    <div class="row py-3">
      <div class="col text-center">
        &copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'footer-navbar',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '__return_false',
            'items_wrap'      => '<span id="%1$s" class="footer-links %2$s">%3$s</span>',
            'depth'           => 2,
            'walker'          => new Nav_Footer_Walker()
          ) );
        ?>
      </div>
    </div>

  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
