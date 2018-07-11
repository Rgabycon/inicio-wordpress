
<?php get_header();?>
<div class="container">
<!--The loop-->
<?php if(have_posts()): ?>
  <?php while(have_posts()): ?>
    <?php the_post(); ?>
    <div class="post">
      <h1 class="post__title"><?php the_title(); ?></h1>
      <div class="post__content"><?php the_content(); ?></div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<!--/The loop-->
</div>
<?php get_footer();?>
