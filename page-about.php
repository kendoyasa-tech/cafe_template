<?php get_header(); ?>

  <section class="keyVisual keyVisualUnder">
    <h2 class="keyCatch">About</h2>
  </section>

  <div class="inner">
    <main class="main">
      <h2 class="newsTitle"><?php the_title(); ?></h2>
      <div class="newsText">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </main>

    <aside class="sidebar">
      <h3 class="sidebarTitle">Contents</h3>
      <nav class="sidebarList">
        <a href="<?php echo home_url('/'); ?>">TOP</a>
        <a href="<?php echo home_url('/'); ?>news">お知らせ</a>
        <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>">メニュー</a>
      </nav>
    </aside>
  </div>

<?php get_footer(); ?>
