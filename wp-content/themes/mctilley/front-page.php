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
                        <div class="year">
                            <div class="year.image" style="background-image: url('<?php the_field('circle_1'); ?>');"> 
                            </div>
                            <div class="year.text">
                            <p>2007 - We met</p>
                            <p style="claire">I don't know what I saw in him...</p>
                            <p style="mike">Hey, there ws a queue of ladies</p></div>
                        </div>
                        <div class="year">
                            <div class="year.image">
                            </div>
                            <div class="year.text">
                            <p>2010 - We got jobs</p>
                            <p>We got job which allowed us to not drive round in old cars any more.... oh wait.</p></div>
                        </div>
                        <div class="year">
                            <div class="year.image">
                            </div>
                            <div class="year.text">
                            <p>2013 - We bought our first home</p>
                            <p>Our biggest commitment to each other, till now I guess...</p></div>
                        </div>
                        <div class="year">
                            <div class="year.image">
                            </div>
                            <div class="year.text">
                            <p>August 2016 - We got engaged!</p>
                            <p>I don't like to brag, but it was a pretty <i>sweet</i> engagement</p></div>
                        </div>
                        <div class="year">
                            <div class="year.image">
                            </div>
                            <div class="year.text">
                            <p>August 2017 - We get married</p>
                            <p>I don't know what I saw in him...</p></div>
                        </div>
                        <div class="year">
                            <div class="year.image">
                            </div>
                            <div class="year.text">
                            <p>2018 - We roadtripped the west coast of America</p>
                            <p>Unbeliveably excited to be heading to america to drive a muscle car and eat loads of food</p></div>
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
