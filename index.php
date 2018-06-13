<?php get_header(); ?>

<main class="container-fluid px-0">
  <div class="row">

    <div class="col">
      <div id="content" role="main">

        <?php get_template_part('loops/index-loop'); ?>

      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container-responsive -->

<?php get_footer(); ?>
