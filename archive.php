<?php get_header(); ?>

<div id="page-content">




<div class="container">
 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua wedding, commercial and lifestyle photography. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.


</div>


<div id="graycontainer2">

<div id="container">	
    
     <div id="featured_resources">
    <ul>
      <?php $thepost = new WP_Query(array( 'post_type' => array("portfolio"),  'showposts' => '1000', 'orderby' => 'rand', 'order' => 'desc' )); while($thepost->have_posts()) : $thepost->the_post(); ?>
      <li>
       <a class="image" href="<?php the_permalink();?>"> <span class="rollover" ></span>
          <?php the_post_thumbnail('medium'); ?>
          </a>
        <h2><a href="<?php the_permalink();?>">
          <?php the_title() ?>
          </a></h2>
          
          
          <span style="text-align:left;"> <?php the_excerpt(); ?> </span>
           
           
           <p class="readmore"><a href="<?php the_permalink();?>">
          View Shoot
          </a></p>
          
      </li>
      <?php endwhile; wp_reset_query(); ?>
    </ul>
    <div class="clear"></div>
  </div>
		
</div>
</div>
</div>
<?php get_footer(); ?>
