<footer class="bg-light">

  <div class="container">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

    <div class="row pt-3">
      <div class="col">
        <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> | <a href="./impressum">Impressum</a></p>
      </div>
    </div>

  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
