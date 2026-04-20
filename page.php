<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>NINJA - CAFE</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
</head>
<body>

  <header class="header">
    <div class="inner">
      <h1 class="logo"><a href="<?php echo home_url('/'); ?>">NINJA-CAFE</a></h1>
      <nav class="nav headNav">
        <a href="<?php echo home_url('/'); ?>" class="navTop">TOP</a>
        <a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="navNews">お知らせ</a>
        <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="navCompany">メニュー</a>
      </nav>
    </div>
  </header>

  <section class="keyVisual keyVisualUnder">
    <h2 class="keyCatch">Menu</h2>
  </section>

  <div class="inner">
    <main class="main">
      <?php get_template_part('menu'); ?>
    </main>

    <aside class="sidebar">
      <h3 class="sidebarTitle">Contents</h3>
      <nav class="sidebarList">
        <a href="<?php echo home_url('/'); ?>" class="navTop">TOP</a>
        <a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="navNews">お知らせ</a>
        <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="navCompany">メニュー</a>
      </nav>
    </aside>

  </div>

  <footer class="footer">
    <nav class="nav footNav">
      <a href="<?php echo home_url('/'); ?>" class="navTop">TOP</a>
      <a href="<?php echo get_permalink(get_page_by_path('news')); ?>" class="navNews">お知らせ</a>
      <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="navCompany">メニュー</a>
    </nav>
    <p class="copy">Copyright ©  All Rights Reserved.</p>
  </footer>

  <a href="#" class="pageTop"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.7.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
</body>
</html>
