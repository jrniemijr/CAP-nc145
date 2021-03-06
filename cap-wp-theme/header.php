<!DOCTYPE html>
<!-- Version 3.3 CAP template for UTWG 30Mar17, questions send to rbowden@cap.gov  -->
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<link media="screen" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/screen.css" rel="stylesheet">
		<link media="all" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/all.css" rel="stylesheet">
		<link media="print" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/print.css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
		<link media="all" type="text/css" href="<?php print get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Google Analytics -->
<!-- End Google Analytics -->	

<!-- exit popup script -->
<script>
jQuery(function() {
function leave_now(event) {
    var choice = window.confirm( 'Note: this link will open a new browser window and leave the .GOV domain. Do you wish to continue?' ); //Change popup text to what you like
    return choice;
}

var select_external = 'a[href*="//"]:not([href*=".gov"])';
jQuery(document).on( 'click', select_external, leave_now )
});
</script>
<!-- end exit popup script -->

</head>

	<body>
		<div id="printHeader">
			<img src="<?php print get_template_directory_uri(); ?>/images/404.jpg" width="640" height="130" style="border:0px" alt="Civil Air Patrol" />
		</div>

		<div id="bodyContainer">

			<div class="page">

				<div id="header">
					<div id="logo">
						<a href="/" name="top"><img src="<?php print get_template_directory_uri(); ?>/images/logo.png"  width="362" height="127" alt="Civil Air Patrol"></a>
					</div>
					<div class="headerDivider"></div>
					<div class="nevadaWing">
					<!--<?php echo get_bloginfo ( 'title' ); ?> -->
					<span style='font-size: 28px; font-weight:bold'><center>NAME <br>Composite Squadron</center></span>
					</div>
					<div class="servings">
						<span class="servingsTitle">Citizens Serving <br/> Communities</span>
						<ul>
							<li>
								<a href="http://www.gocivilairpatrol.com"><span class="arrow"></span><span>CAP Home</span></a>
							</li>
							<li>
								<a href="http://hosted.where2getit.com/civilairpatrol/index.html?form=locator_search&addressline=+++&postalcode=&city=&state=+&search"><span class="arrow"></span><span>Find a Squadron in Michigan</span></a>
							</li>
						</ul>
					</div>
					<div id="mainNavigation">
						<ul>
							<li><a href="/join" title="Join Civil Air Patrol" class="selected">Join CAP</a></li> <!--/home url-->
							<li><a href="http://utwg.cap.gov" title="Utah Wing Website" class="selected">Wing Website</a></li> <!--/Location of desired page or link -->
							<li><a href="http://www.cap75th.com/" title="CAP75th " class="selected">75th Anniversary </a></li> <!--/Location of desired page or link -->	
							<li><a href="http://www.utwg.cap.gov/donate/" title="Donate" class="selected">Donate</a></li>  <!--/Location of desired page or link -->
						</ul>
						<div class="search">
							<form action="/" method="get">
								<input type="text" id="s" name="s" class="searchInput" placeholder="Search..." value="<?php the_search_query(); ?>" />
								<input type="submit" class="submitBt" value="" />
							</form>
						</div>
					</div>
				</div>

				<div id="pageContent">
					<div class="contentBorder"></div>
					<div id="content">
						<div class="slideshowTop"></div>
						<div class="slideshow">
							<?php echo do_shortcode("[metaslider id=4]"); ?>
						</div>
						<div class="slideshowBottom"></div>

						<div class="mainContent">
							<div class="leftColumn">
								<?php wp_nav_menu( array('menu' => 'Main Menu', 'menu_id' => 'nav_options')); ?>
							</div>

							<div class="mainColumn">
								<div class="breadcrumbs">
									<ul>

										<?php if ( ! is_front_page() ) : ?>
											<li><a href="/">Home</a></li>
											<li class="divider">/</li>
										<?php endif; ?>

										<?php if ( is_page() ) : ?>
											<?php if ( $post->post_parent ) : ?>
												<li><a href="<?php print get_the_permalink( $post->post_parent ); ?>"><?php print get_the_title( $post->post_parent ); ?></a></li>
												<li class="divider">/</li>
											<?php endif; ?>
											<li><a href="<?php print get_the_permalink( $post->ID ); ?>" class="selected"><?php print get_the_title( $post->ID ); ?></a></li>
										<? endif; ?>

										<?php if ( is_search() ) : ?>
											<li><a href="#" class="selected">Search Results</a></li>
										<?php endif; ?>

									</ul>
								</div>
								<div class="mainText">
