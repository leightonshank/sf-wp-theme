<?php get_header() ?>

<div id="content">
  <div class="container">
    <?php if ( is_front_page() ) : ?>
    <!-- front jumbotron -->
    <div class="row">
      <div class="col-xs-12">
        <div class="jumbotron">
          <div class="visible-xs-block visible-sm-block">
            <img class="aligncenter" alt="Midnight Spaghetti and the Chocolate G-Strings"
                 src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-xs.png" />
          </div>
          <div class="hidden-xs hidden-sm">
            <img class="aligncenter" alt="Midnight Spaghetti and the Chocolate G-Strings"
                 src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-md.png" />
          </div>
        </div>
      </div>
    </div>
    <?php endif ?>

    <!-- front content -->
    <div class="row">
      <!-- feed -->
      <div class="col-md-8">
        <div id="feed">
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
          // End the loop
          endwhile ?>
        </div>
      </div>

      <!-- sidebar -->
      <div class="col-md-4">
        <?php get_sidebar() ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
