<?php get_header(); ?>

<div id="rotatorcontainer">
  <div class="dot-repeat"></div>
  <div id="rotator">
  
  <div id="rotator-title">
Dream Destinations  </div>
 
 
 
 <?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
  </div>
</div>
<div id="page-content">
<div id="graycontainer">
  <div id="glow">
    <div class="container">
      <div id="tagline"><span style="font-size: 150%;">Authentic travel for the particular woman.</span></div>
      
      
      
   <span class="mob-social"><a href="tel:1 864 377 9711">1 864 377 9711</a><a href="https://www.facebook.com/herdreamvacation?ref=stream" target="_blank" ><img style="margin-left: 2px;" src="<?php bloginfo('template_directory'); ?>/images/fb.png"/>  </a><a href="mailto:info@herdreamvacation.com"><img src="<?php bloginfo('template_directory'); ?>/images/mail.png"/></a></span>

      

<div class="column1">

         <p>Travel authentically, live life
abundantly...follow your dreams. Cobblestones
and Pomegranates... Her Dream Vacation.</p>

   <p>The Dream Maker: Planting seeds along your
path, catching you when you stumble... helping
you embrace a dream vacation with new friends.</p>

</div>

<div class="column2">


   <p>Fascinating destinations, personalized
concierge service, handcrafted customized
itineraries... authentic, luxury small group travel
for the particular woman.</p>

        
        
        <p>Contact <a href="mailto:info@herdreamvacation.com">info@herdreamvacation.com</a> or visit us on <a href="https://www.facebook.com/herdreamvacation?ref=stream" target="_blank">Facebook</a> for more information.</p>
        
        </div>

<div style="Clear:both;"></div>

 <div id="tagline"> This is your time.  Your dream vacation.</div>
  <div class="moreinfo"><a href="<?php bloginfo('url'); ?>/inspiration/">
Read On</a></div>

    </div>

    </div>
  </div>
  <!--glow--> 
</div>
<div id="white">
  <div class="container"><h2> Upcoming Dream Vacations</h2>
    <div id="featured_post">
      <ul>
        <?php $thepost = new WP_Query(array( 'post_type' => 'vacation' ,'cat' => '4', 'showposts' => '3', 'orderby' => 'desc', )); while($thepost->have_posts()) : $thepost->the_post(); ?>
        <li> <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail('medium'); ?>
          </a>
          <h4><a href="<?php the_permalink();?>">
            <?php the_title() ?>
            </a></h4>
    <p class="lightgray" style="text-transform: uppercase; text-align: center;"><?php echo(types_render_field( "vacation-date", array( "arg1" => "val1", "arg2" => "val2" ) )); ?> - <?php echo(types_render_field( "vacation-return", array( "arg1" => "val1", "arg2" => "val2" ) )); ?></p>
          <div class="details">
            <?php echo(types_render_field( "vacation-details", array( "arg1" => "val1", "arg2" => "val2" ) )); ?> </div>
          <div style="clear: both;"></div>
          <div class="moreinfo"><a href="<?php the_permalink();?>">More Info</a></div>
        </li>
        <?php endwhile; wp_reset_query(); ?> 
      </ul>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--white--->
<div style="clear:both;"></div>
<div id="cobblestonecontainer">
  <div class="container">
    <h2>From the Travel Blog</h2>
    <div id="blog_post">
      <ul>
        <?php $thepost = new WP_Query(array( 'post_type' => 'post' ,'cat' => '5', 'showposts' => '3', 'orderby' => 'desc', )); while($thepost->have_posts()) : $thepost->the_post(); ?>
        <li> <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail('medium'); ?>
         
          <div class="blog_post_content">
            <h5>
              <?php the_title() ?>
            </h5>
            <p class="lightgray">Written by
              <?php the_author(); ?>
              on
              <?php the_date('F d, Y', '', ''); ?>
            </p>
            <?php the_excerpt(); ?>
          </div>
           </a>
        </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
    <div style="clear: both;"></div>
    <div class="moreinfo"><a href=<?php bloginfo('url'); ?>/blog/">View Blog</a></div>
  </div>
  <!--end container--> 
</div>
<!--end bordercontainer-->


  <div class="container">

  <div id="footer-box1">

    <h5>About the Pom Queen</h5>
    <p>   <img class="stamie" src="<?php bloginfo('template_url'); ?>/images/stamie.jpg"/>  


<?php 
$id=101; 
$post = get_page($id); 
echo substr(strip_tags($post->post_content), 0, 600);?> ... <a href="<?php bloginfo('url'); ?>/about/">Read More</a></div>




  <div id="footer-box2">

    <h5>Newsletter Sign Up</h5>
    
    <p>Sign up to receive travel tips, info and more.</p>
    
    <?php echo do_shortcode('[contact-form-7 id="33" title="Newsletter Signup"]'); ?>
    
    
    
     <div style="float:right; width: 200px;"><?php the_widget( 'Mailchimp Widget' ); ?> </div>
    
    
    
    
    
    
    
     </div>
  </div>



  </div>


<div style="clear:both;"></div>



<?php get_footer(); ?>
