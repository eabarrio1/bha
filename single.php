<?php get_header(); ?>

<div id="subpage-container">
  <div id="pagecontent">
    <?php the_breadcrumbs(); ?>
    <h1>
      <?php the_title(); ?>
    </h1>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <p style="font-weight: bold;">
      <?php the_date('F d, Y', '', ''); ?>
    </p>
    <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <?php get_sidebar(); ?>
  <div class="clear"></div>
</div>
<?php get_footer(); ?>
