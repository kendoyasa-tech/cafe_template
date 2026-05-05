<?php get_header(); ?>

  <section class="keyVisual keyVisualUnder">
    <h2 class="keyCatch">Contact</h2>
  </section>

  <div class="inner">
    <main class="main">
      <h2 class="newsTitle"><?php the_title(); ?></h2>
      <div class="newsText">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>

      <div class="mapArea" style="margin-top: 30px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12961.947584801825!2d139.6921007!3d35.6896342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1665c37f38661e8!2z5p2x5Lqs6YO95bqB!5e0!3m2!1sja!2sjp!4v1533620309022" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
