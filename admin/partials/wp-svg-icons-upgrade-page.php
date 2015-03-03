<?php 
	// enqueue our upgrade page script
	wp_register_script( 'upgrade-page-script' , plugin_dir_url(__FILE__).'../js/upgrade-page-script.js' , array( 'jquery' ), 'all'  );
	wp_enqueue_script( 'upgrade-page-script' );
?>

<style>
::selection { background: #FF8000; }	

.upgrade-button {
  border: 0 none;
  border-radius: 2px 2px 2px 2px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-size: 16px;
  font-weight: 200;
  line-height: 20px;
  margin-bottom: 0;
  margin-top: 10px;
  padding: 9px 12px;
  text-transform: none;
  transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -webkit-transition: all 0.3s ease 0s;
  width: 12.795%;
  text-align: center; 
  min-width: 168px;
}

.green {
    background: none repeat scroll 0 0 #46b98a;
    color: #ffffff;
}
.green:hover {
	cursor: pointer;
    background: none repeat scroll 0 0 #3AAC7D;
    color: #ffffff;
}
</style>

<div id="wp-svg-icons-support-page-wrap" class="svg-custom-upload-wrap wrap" >

	<section id="wp-svg-icons-support-page-header">
		
		<section class="support-subhead">
			<h1 class="wp-svg-title"><span style="color:#FF8000;">WP SVG Icons</span> | <?php _e( 'Upgrade' , 'wp-svg-icons' ); ?></h2>
				<!-- review us container -->
				<div id="review-wp-svg-icons" style="position:absolute;right:15em;top:0;margin:0 3em 0 0;text-align:center;">
					<p><?php _e( 'Leave Us A Review!' , 'wp-svg-icons' ); ?></p>
					<p style="margin-top:-8px;"><a href="https://wordpress.org/support/view/plugin-reviews/svg-vector-icon-plugin" target="_blank" style="text-decoration:none;"><b class="wp-svg-happy" style="font-size:2.5em;"></b></a></p>
				</div>
				<!-- social media icons -->
				<div id="social-icons" style="position:absolute;right:0;top:0;margin:0 3em 0 0;text-align:center;">
					<p><?php _e( 'Follow me elsewhere' , 'wp-svg-icons' ); ?></p>
						<a href="https://profiles.wordpress.org/eherman24#content-plugins"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/wordpress-icon.png"></a>
						<a href="http://twitter.com/evanmherman"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/twitter.png"></a>
						<a href="https://www.linkedin.com/profile/view?id=46246110"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/linkedin.png"></a>
						<a href="http://www.evan-herman.com/feed/"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/rss_icon.png"></a><br />
						<a href="http://www.evan-herman.com" target="_blank" title="Evan Herman Professional WordPress Development"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/evan_herman_logo.png" alt="Evan Herman Logo" style="margin-right:0 auto;"></a>
				</div>
				<p><?php _e( 'Enjoying the free version? Consider upgrading to the pro version for added features, and premium support.' , 'wp-svg-icons' ); ?></p>		
		</section>
		
	</section>
	
	<h2 class="nav-tab-wrapper">
		<a href="#" class="nav-tab nav-tab-active" data-attr="icon_customizer"><?php _e( 'Icon Customizer' , 'wp-svg-icons' ); ?></a>
		<a href="#" class="nav-tab" data-attr="menu_icons"><?php _e( 'Menu Icons' , 'wp-svg-icons' ); ?></a>
		<a href="#" class="nav-tab" data-attr="premium_support"><?php _e( 'Premium Support' , 'wp-svg-icons' ); ?></a>
	</h2>

	<div id="icon_customizer" class="tab_content">
			
		<h2 style="display:block;text-align:center;"><?php _e( 'Icon Customizer' , 'wp-svg-icons' ); ?></h2>
		<p class="description" style="max-width:80%;display:block;margin: 0 auto;margin-top:5px;margin-bottom:15px;"><?php _e( 'The pro version comes with an easy to use icon customizer. Easily add additional parameters to your icons, adjust the icon size and color, add additional class names or convert the icon into a link all without writing a single line of code.' , 'wp-svg-icons' ); ?></p>
		<img src="<?php echo plugin_dir_url( __FILE__ ) . '../images/svg-icons-customizer.png'; ?>" title="WP SVG Icon Customizer" style="width:80%;max-width:1200px;display:block;margin:0 auto;">
		
	</div>
	
	<div id="menu_icons" style="display:none;" class="tab_content">
		<h2 style="display:block;text-align:center;"><?php _e( 'Menu Icons' , 'wp-svg-icons' ); ?></h2>
		<p class="description" style="max-width:80%;display:block;margin: 0 auto;margin-top:5px;margin-bottom:15px;">
			<?php _e( 'You can also easily add icons to any of your menus using the provided dropdown. Select icons from the default pack, or select icons from a custom pack that you have uploaded yourself. Everything is done without ever writing any code at all!' , 'wp-svg-icons' ); ?>
		</p>
		<div style="text-align:center;">
			<img src="<?php echo plugin_dir_url( __FILE__ ) . '../images/svg-icons-front-end-menu.png'; ?>" title="WP SVG Icons Menu Icons" style="width:80%;max-width:650px;">
			<img src="<?php echo plugin_dir_url( __FILE__ ) . '../images/svg-icons-menu-icons.png'; ?>" title="WP SVG Icons Menu Icons" style="width:35%;max-width:350px;vertical-align:top;margin-top:7%;">
		</div>
	</div>
	
	
	<div id="premium_support" style="display:none;" class="tab_content">
		<h2 style="display:block;text-align:center;"><?php _e( 'Premium Support' , 'wp-svg-icons' ); ?></h2>
		<p class="description" style="max-width:80%;display:block;margin: 0 auto;margin-top:5px;margin-bottom:15px;">
			<?php _e( "With the purchase of WP SVG Icons Pro, you'll also receive 1 year of premium support and updates to WP SVG Icons. This will ensure you remain up to date with all of the latest updates, security and bug fixes. You'll also have 24 hour access to a professional WordPress developer. Whatever your issue may be, simply submit a ticket and we'll fix things up for you in no time!", "wp-svg-icons" ); ?>
		</p>
	</div>
	
	<br />
		
	<br />
	
	<br />
	
	<a href="http://www.evan-herman.com/wordpress-plugins/wp-svg-icons" target="_blank" style="display:block;width:200px;margin:0 auto;">
		<div class="upgrade-button green center"><i class="wp-svg-box-remove"></i>&nbsp; Go Pro Now!</div>
	</a>
	<section id="eh-logos" style="display:block;width:100%;text-align:right;">
		<img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/evan-herman-mascot.png" alt="Evan Herman Mascot" style="width:300px;margin-top:1em;" >
	</section>
	
</div>