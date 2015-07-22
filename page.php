<?php get_header() ?>

<?php // Start the loop.
while ( have_posts() ) : the_post(); ?>
<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="page-header"><?php the_title() ?></h1>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile ?>

<?php get_footer() ?>
