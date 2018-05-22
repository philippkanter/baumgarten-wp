<?php
/**!
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header id="sub-page">
      <h1><?php the_title()?></h1>
    </header>
    <main class="my-5">
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </main>
  </article>
<?php
  endwhile; else:
    wp_redirect(esc_url( home_url() ) . '/404', 404);
    exit;
  endif;
?>
