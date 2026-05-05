<?php get_header(); ?>

  <section class="keyVisual keyVisualUnder">
    <h2 class="keyCatch">News</h2>
  </section>

  <div class="inner">
    <main class="main">
      <div class="newsList newsListUnder">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="newsLink">
          <div class="newsLinkCap">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_image.jpg" alt="">
            <?php endif; ?>
          </div>
          <div class="newsLinkInfo">
            <div class="newsLinkInner">
              <span class="newsLinkTitle"><?php the_title(); ?></span>
              <span class="newsLinkDate"><?php echo get_the_date('Y.m.d'); ?></span>
            </div>
          </div>
        </a>
        <?php endwhile; endif; ?>
      </div>

      <div class="pageNumbers">
        <?php the_posts_pagination(); ?>
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
