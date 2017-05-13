<!doctype html>
<html  <?php language_attributes(); ?>>
	<head>

   	<meta charset="<?php bloginfo( 'charset' ); ?>" />
   	<meta name="viewport" content="width-device-width, initial-scale=1">
  
	<?php wp_head(); ?>

	  <!-- Basic Page Needs
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <meta charset="utf-8">
	  <title><?php if(is_home()) { echo bloginfo("name"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
	 <!--   <?php  ?>"> -->
	  <meta name="author" content="">


	 <meta name="description" content="<?php if(is_home()) { bloginfo('description'); } else { wp_title(); } ?>">

	  
	  <script src="<?php bloginfo('template_url') ?>/dist/all.min.js"></script>
	  
	  <!-- CSS
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.min.css" type="text/css" media="screen" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	  <!-- Favicon
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	  <body <?php body_class(); ?>> 

	  <?php wp_head(); ?>

	</head>
	<body>
 

	

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div id="slideout">
		<?php include (TEMPLATEPATH . '/includes/_slideout.php'); ?>	
	</div>
