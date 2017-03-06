<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package McTilley
 */

get_header(); ?>

<div id="content" class="site-content">

	<div class="container">
		<div class="row">

			<div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<main id="main" class="site-main" role="main">
<h1>Gifts</h1>
		<p>As we've lived together for some time, we've got most things we need. However, if you are looking to give us a gift then Mike wouldn't mind a Porsche 911, and Claire want's a home gym. We'll leave it up to you if you want to buy us either of those, otherwise we would be happy to accept any contributions to our Honeymoon. 
        <br>
        <br>
        The dream is to head to America, hire a muscle car and drive down the west coast, while hopefully getting a couple of pictures like the one's below. 
        <br>
        <i>(If you look closely you'll see they're not actually real! I know, crazy!)</i>
        </p>			
        <div style=background-image class="gift-image"><img src="<?php the_field('gift-image-1'); ?>"></div>
        <div class="gift-image"><img src="<?php the_field('gift-image-2'); ?>"></div>
        <div class="gift-image"><img src="<?php the_field('gift-image-3'); ?>"></div>
				</main><!-- #main -->
			</div><!-- #primary -->

			

		</div><!-- .row -->
	</div><!-- .container -->

</div><!-- #content -->

<?php get_footer(); ?>
