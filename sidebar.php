<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
  <div id="sidebar">
    <?php
    $featured = new WP_Query('category_name=archive-shows&featured=yes');
    if ($featured->have_posts()):
      while ($featured->have_posts()) : $featured->the_post(); ?>
      <h2 class="widget-title">Archive Feature</h2>
      <h4><a href="<?php get_permalink() ?>"><?php the_title() ?></a></h4>
      <p><?php the_content() ?></p>
      <?php endwhile;
    endif ?>

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
      <div id="widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div><!-- .widget-area -->
    <?php endif; ?>

  </div><!-- .secondary -->
<?php endif; ?>
