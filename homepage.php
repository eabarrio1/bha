<?php
/*
Template Name: Homepage
*/

 ?>
<?php get_header(); ?>

<div id="home-container">
  <div id="rotator">
  
  <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
  
  </div>
  <div id="boxes">
  
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Left Box') ); ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Middle Box') ); ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Right Box') ); ?> 

  
   <!-- <div id="box">
      <h2 class="beacon">Target Risks <img  src="<?php bloginfo('template_url'); ?>/images/beacon-hill.png"/></h2>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Left Box') ); ?>
    </div>
    <div id="box">
      <h2 class="partner">Tools <img  src="<?php bloginfo('template_url'); ?>/images/partner-one.png"/></h2>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Middle Box') ); ?>
    </div>
    <div id="box">
      <h2 class="liability">Recent Podcast </h2>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Right Box') ); ?> 
    </div>-->
    <!--endbox-->    <div class="clear"></div>

    
    </div>
    <div class="clear"></div>
    <div id="bottomsection">
      <div id="left-box">
      <h1>      <?php the_title(); ?></h1>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <p id="learnmore" class="green"><a>Learn More</a></p>
      </div>
      <div id="right-box">
        <h4> News & Resources</h4>
        <?php if (function_exists (gopiplushome)) gopiplushome(); ?>
        <p style="text-transform: uppercase;">Subscribe to our <span id="newsletter"><a>E-Newsletter</a></span></p>
      </div>
      <div style="clear:both;"></div>
      <!--end bordercontainer--></div>
  </div>
</div>
</div>
<?php get_footer(); ?>
