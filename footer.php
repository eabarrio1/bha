<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
<!--Wigitized Footer-->
<?php endif ?>

<div id="footer">
  <div class="container">
    <div id="footer-left">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ); ?>
    </div>
    <div id="footer-right">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ); ?>
    </div>
  </div>
  
  <div class="clear"></div>
</div>
</div><!--end leaves-->
</div><!--end blue texture-->
<!--#footer-->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>


<script type="application/javascript">$(document).ready(function() {
  	  $('body').addClass('js');
	
	  var $menu = $('#menu1'),
		  	  $menulink = $('.menu-link'),
		  	  $menuTrigger = $('#mobmenu .has-subnav > a');
	
	
		$menulink.click(function(e) {
			e.preventDefault();
			$menulink.toggleClass('active');
			$menu.toggleClass('active');
		});
		
	
	
	$menuTrigger.click(function(e) {
			e.preventDefault();
			var $this = $(this);
			$this.toggleClass('active').next('ul').toggleClass('active');
		});


});
</script>


</body></html>