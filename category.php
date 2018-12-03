<?php get_header(); ?>
<?php if(is_category('Projects')) : ?>
  <h1 id="page_title">Stuff I've Made</h1>
<?php else : ?>
  <h1 id="page_title">Stuff I've Written</h1>
<?php endif; ?>
<div id="posts_wrapper" class="skinny_wrapper">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <p class="date"><?php the_date(); ?></p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <hr>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<?php the_posts_pagination(array('screen_reader_text' => 'A')); get_footer(); ?>