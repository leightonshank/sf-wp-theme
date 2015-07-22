<?php get_header() ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="page-header">Archived Shows</h1>
        <?php
        $news = new WP_Query( 'category_name=archive-shows' );
        // Start the loop.
        while ( $news->have_posts() ) : $news->the_post();
          get_template_part( 'content', get_post_format() );
        // End the loop
        endwhile ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
