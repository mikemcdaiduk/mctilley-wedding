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

	<div class="container" id="homepage-content">
		<div class="row">

			<div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<main id="main" class="site-main" role="main">

					<div id="timeline">
                        <h2 class="h2">Timeline - <i>How we got here...</i></h2>
                        <div class="timeline-row">
                            <div class="year">
                                <img src="<?php the_field('circle_1'); ?>">
                                <h3>2007 - We met</h3>
                                <p class="claire">I don't know what I saw in him...</p>
                                <p class="mike">Hey, there was a queue of ladies. It was the first year of uni, and we lived next door to each other. Convenient,</p>
                            </div>
                            <div class="year">
                                <img src="<?php the_field('circle_2'); ?>">
                                <h3>2010 - We got jobs</h3>
                                <p class="mike">We got job which allowed us to not drive round in old cars any more</p>
                                <p class="claire">....oh wait</p>
                                <p class="mike"> hey, the Audi's a classic!</p>
                            </div>
                            <div class="year">
                                <img src="<?php the_field('circle_3'); ?>">
                                <h3>2013 - We bought our first home</h3>
                                <p class="claire">Our biggest commitment to each other, till now I guess...</p>
                            </div>
                        </div>
                        <div class="timeline-row">
                            <div class="year">
                                <img src="<?php the_field('circle_4'); ?>">                
                                <h3>August 2016 - We got engaged!</h3>
                                <p class="mike">I don't like to brag, but it was a pretty <i>sweet</i> engagement</p>
                                <p class="claire">You're so lame.</p>
                            </div>
                            <div class="year">
                                <img src="<?php the_field('circle_5'); ?>">                
                                <h3>August 2017 - We get married</h3>
                                <p class="claire">11 months of organising for this one day</p>
                                <p class="mike">So I just have to turn up yeah?</p>
                            </div>
                            <div class="year">
                                <img src="<?php the_field('circle_6'); ?>">                
                                <h3>2018 - We honeymoon'd</h3>
                                <p class="claire">I that even a word?! Well yeah, we're going to roadtrip down the west coast of America</p>
                                <p class="mike">Unbeliveably excited to be heading to america to drive a muscle car and eat loads of food</p>
                            </div>
                        </div>
                    </div>
                    <div id="details" class="centre">
                        <h2  class="h2">Details</h2>
                        <p>Join us on Friday 18th August at 1:00pm:</p>
                            <p>Crabbs Barn
                            <br>Cranes Lane
                            <br>Kelvedon
                            <br>Essex
                            <br>CO5 9AX
                            </p>
                        <div class="map">
                            <h3><a class="cta" href:"http://localhost/map/">Map</a></h3>
                        </div>
                        <div class="hotels">
                            <h3><a class="cta" href:"http://localhost/hotels/">Hotels</a></h3>
                        </div>
                        <div class="RSVP">
                            <h3><a class="cta" href:"http://localhost/rsvp/">RSVP</a></h3>
                        </div>
                    </div>

				</main><!-- #main -->
			</div><!-- #primary -->

			

		</div><!-- .row -->
	</div><!-- .container -->

</div><!-- #content -->

<?php get_footer(); ?>
