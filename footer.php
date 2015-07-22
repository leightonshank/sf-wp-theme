  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav>
            <?php wp_nav_menu( array(
                    'menu_class' => 'list-inline',
                    'theme_location' => 'footer',
                    'depth' => -1
                  ) );
            ?>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <p class="copyright">&copy; <?php echo date("Y") ?> Midnight Spaghetti Productions. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- bower:js -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bower_components/jquery/dist/jquery.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bower_components/bootstrap/dist/js/bootstrap.js"></script>
  <!-- endbower -->

<?php wp_footer(); ?>
</body>
</html>
