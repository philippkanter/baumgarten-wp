<?php
/**!
 * Widgets
 */

function b4st_widgets_init() {

  /*
  Footer-Menu (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'b4st' ),
    'id'              => 'footermenu-widget-area',
    'description'     => __( 'The footermenu widget area', 'b4st' ),
    // 'before_widget'   => '<span class="footer-links">',
    // 'after_widget'    => '</span>',
    // 'before_title'    => '<h2 id="sub-page">',
    // 'after_title'     => '</h2>',
  ) );

  /*
  Footer (1, 2, 3, or 4 areas)

  Flexbox `col-sm` gives the correct the column width:

  * If only 1 widget, then this will have full width ...
  * If 2 widgets, then these will each have half width ...
  * If 3 widgets, then these will each have third width ...
  * If 4 widgets, then these will each have quarter width ...
  ... above the Bootstrap `sm` breakpoint.
   */

  // register_sidebar( array(
  //   'name'            => __( 'Footer-Alt', 'b4st' ),
  //   'id'              => 'footer-widget-area',
  //   'description'     => __( 'The footer widget area', 'b4st' ),
  //   'before_widget'   => '<div class="%1$s %2$s col-sm">',
  //   'after_widget'    => '</div>',
  //   'before_title'    => '<h2 class="h4">',
  //   'after_title'     => '</h2>',
  // ) );

}
add_action( 'widgets_init', 'b4st_widgets_init' );