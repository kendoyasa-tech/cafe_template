  <footer class="footer">
    <nav class="nav footNav">
      <a href="<?php echo home_url('/'); ?>" class="navTop">TOP</a>
      <a href="<?php echo home_url('/'); ?>news" class="navNews">お知らせ</a>
      <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="navCompany">メニュー</a>
    </nav>
    <p class="copy">Copyright ©  All Rights Reserved.</p>
  </footer>

  <a href="#" class="pageTop"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.7.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
