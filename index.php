<?php get_header() ?>

<div id="content">
  <div class="container">
    <?php if ( is_front_page() ) : ?>
    <!-- front jumbotron -->
    <div class="row">
      <div class="col-xs-12">
        <div class="jumbotron">
          <img class="aligncenter" alt="Spaghettifest 13" height="300" width="300"
               src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apollo-13.png" />
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
