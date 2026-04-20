<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>NINJA - CAFE</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>

  <header class="header">
    <div class="inner">
      <h1 class="logo"><a href="index.html">NINJA-CAFE</a></h1>
      <nav class="nav headNav">
        <a href="index.html" class="navTop">TOP</a>
        <a href="news_index.html" class="navNews">お知らせ</a>
        <a href="menu.html" class="navCompany">メニュー</a>
      </nav>
    </div>
  </header>

  <section class="keyVisual keyVisualUnder">
    <h2 class="keyCatch">News</h2>
  </section>

  
  <<div class="inner">
    <main class="main">
      <h2 class="newsTitle"><?php the_title(); ?></h2>
      <div class="newsDate"><?php echo get_the_date(); ?></div>
      <div class="newsCap">
        <?php if( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('full'); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/no_image.jpg'; ?>" alt="">
        <?php endif; ?>
      </div>
      <div class="newsText">
        <?php the_content(); ?>
      </div>
    </main>

    <aside class="sidebar">
      <h3 class="sidebarTitle">Contents</h3>
      <nav class="sidebarList">
        <a href="<?php echo home_url(); ?>">TOP</a>
        <a href="">お知らせ</a>
        <a href="">メニュー</a>
      </nav>
    </aside>

  </div>

  <?php get_footer(); ?>
    </main>

    <aside class="sidebar">
      <h3 class="sidebarTitle">Contents</h3>
      <nav class="sidebarList">
        <a href="index.html" class="navTop">TOP</a>
        <a href="news_index.html" class="navNews">お知らせ</a>
        <a href="menu.html" class="navCompany">メニュー</a>
      </nav>
    </aside>

  </div>

  <footer class="footer">
    <nav class="nav footNav">
      <a href="index.html" class="navTop">TOP</a>
      <a href="news_index.html" class="navNews">お知らせ</a>
      <a href="menu.html" class="navCompany">メニュー</a>
    </nav>
    <p class="copy">Copyright ©  All Rights Reserved.</p>
  </footer>


  <a href="#" class="pageTop"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

 
  <script src="assets/js/jquery-1.7.2.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>