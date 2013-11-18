<?php get_header(); ?>

<div id="subpage-container">
  <div id="pagecontent">
    <?php the_breadcrumbs(); ?>
    <?php   global $wp_query;
$args = array_merge( $wp_query->query, array( 'post_type' => 'any' ) );
query_posts( $args ); ?>
    <h1> <?php printf( __( '%s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
    <?php echo category_description(); /* displays the category's description from the Wordpress admin */ ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post-single">
      <?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="alignleft"><a href="<?php the_permalink();?>"> '; the_post_thumbnail('thumbnail'); echo '</a></div>'; } ?>
      <h5> <a href="<?php the_permalink();?>">
        <?php the_title(); ?>
        </a> </h5>
      <p style="font-weight: bold;">
        <?php the_date('F d, Y', '', ''); ?>
      </p>
      <div class="post-excerpt">
        <?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
      </div>
      <div style="clear:both;"></div>
    </div>
    <!--.post-single-->
    <?php endwhile; else: ?>
  
    <!--noResults-->
    <?php endif; ?>
    <div class="oldernewer">
      <p class="older">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </p>
      <p class="newer">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </p>
    </div>
  </div>
<?php get_sidebar(); ?>
<div class="clear"></div>
</div>
<?php get_footer(); ?>
