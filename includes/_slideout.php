<!-- Begin mobile menu -->
	<div class="mobile_menu_wrapper">
	    <div class="menu-side-mobile-menu-container">
	    <ul class="closeRow">
	   		<li><a id="close_mobile_menu" href="javascript:;"><i class="fa fa-times fa-3"></i></a></li>
	   		<li class="sliderTitle">Ash Writes TV</li>
	   	</ul>
	    <div class="card effect__click">
	    	
		     <div class="card__front">
		     	<div class="row shareWrapper" style="display: inline; width: 100%; padding: 0px;">
	  				<ul>
					<li><a href="https://twitter.com/comedy_girl"><i class="fa fa-twitter "></i></a></li>
					<li><a href="http://instagram.com/tgs_clem/"><i class="fa fa-instagram "></i></a></li>
					<li><a href="https://github.com/comedy0girl"><i class="fa fa-github" aria-hidden="true"></i></a></li>	
					</ul>
				</div> 

		    	<ul id="mobile_main_menu">
		    		 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			    </ul>
			</div>

			  	<div id="text-2" class="widget widget_text" style="padding: 1em;"">
			   		<?php dynamic_sidebar('mobileMenu_sidebar'); ?>
				</div>
			        	
			</div>
		</div><!-- card effect end -->
		    
	</div><!-- menu end -->
	