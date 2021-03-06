<?php get_header() ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div id="feed">
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
          // End the loop
          endwhile ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
