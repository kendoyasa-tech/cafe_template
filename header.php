<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <div class="inner">
      <h1 class="logo"><a href="<?php echo home_url('/'); ?>">NINJA-CAFE</a></h1>
      <nav class="nav headNav">
        <a href="<?php echo home_url('/'); ?>" class="navTop">TOP</a>
        <a href="<?php echo home_url('/'); ?>news" class="navNews">お知らせ</a>
        <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="navCompany">メニュー</a>
      </nav>
    </div>
  </header>
