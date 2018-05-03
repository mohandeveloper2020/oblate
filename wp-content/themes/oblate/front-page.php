<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="header gradient">
	<div class="container">
		<div class="header-main">
			<h1>Tania Rascia</h1>
			<p>I'm a developer, designer, writer, and autodidact. Everything on this website is for you, ad-free.<br> <a href="<?php echo site_url(); ?>/me">More about me</a>.</p>
			<article class="quick quick-header">
				<a href="<?php echo site_url(); ?>/developing-a-wordpress-theme-from-scratch/"><img src="<?php echo site_url(); ?>/wp-content/uploads/wp-2-150x150.png"> WordPress</a>
				<a href="<?php echo site_url(); ?>/what-is-bootstrap-and-how-do-i-use-it/"><img src="<?php echo site_url(); ?>/wp-content/uploads/bs.png"> Bootstrap</a>
				<a href="<?php echo site_url(); ?>/how-to-use-jquery-a-javascript-library/"><img src="<?php echo site_url(); ?>/wp-content/uploads/jq1-150x150.png"> jQuery</a>
				<a href="<?php echo site_url(); ?>/learn-sass-now/"><img src="<?php echo site_url(); ?>/wp-content/uploads/sass-150x150.png"> Sass</a>
				<a href="<?php echo site_url(); ?>/getting-started-with-grunt-and-sass/"><img src="<?php echo site_url(); ?>/wp-content/uploads/grunt-150x150.png"> Grunt</a>
				<a href="<?php echo site_url(); ?>/getting-started-with-gulp/"><img src="<?php echo site_url(); ?>/wp-content/uploads/gulp-150x150.png"> Gulp</a>
				<a href="<?php echo site_url(); ?>/getting-started-with-git/"><img src="<?php echo site_url(); ?>/wp-content/uploads/git-150x150.png"> Git</a>
				<a href="<?php echo site_url(); ?>/how-to-use-json-data-with-php-or-javascript/"><img src="<?php echo site_url(); ?>/wp-content/uploads/jsonimg-150x150.png"> JSON</a>
				<a href="<?php echo site_url(); ?>/make-a-static-website-with-jekyll/"><img src="<?php echo site_url(); ?>/wp-content/uploads/jekyll-2-150x150.png"> Jekyll</a>
				<a href="<?php echo site_url(); ?>/how-to-use-the-command-line-for-apple-macos-and-linux/"><img src="<?php echo site_url(); ?>/wp-content/uploads/terminal-150x150.png"> command line</a>
			</article>
		</div>
		<div class="header-email">
			<p>Get friendly updates, infrequently.</p>
			<div id="mailchimp">
				<form action="//taniarascia.us12.list-manage.com/subscribe/post?u=ec794fab6e35a491a001cc25d&amp;id=5276386071" method="post"
				  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<label for="mce-EMAIL"><span class="screen-reader-text">Email</span></label><input type="email" value="" name="EMAIL"
					  class="required email" id="mce-EMAIL" placeholder="Email address">
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ec794fab6e35a491a001cc25d_5276386071" tabindex="-1" value=""></div>
					<div class="clear"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>
				</form>
			</div>
		</div>
	</div>
</header>

<?php endwhile; endif; ?>

<section class="quote-container">
	<div class="small-container">
		<blockquote class="testimonial">"Tania writes extremely clear, concise tutorials that have the best ratio of learning to bullshit that I've encountered
			so far. It's no exaggeration to say that I wouldn't currently have a job in development without this site. So thanks for
			ruining my life, Tania."
			<cite>&mdash; <a href="http://craiglam.com/" target="_blank">Craig Lam</a>, Web Developer</cite></blockquote>
	</div>
</section>

<section class="top">
	<div class="container">
		<div class="top-title">
			<h2>Latest Tutorials</h2>
		</div>

		<div class="grid">
			<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '6',
				'category_name' => 'Tutorials',
				'category__not_in' => array( 5 ),
			);

			$latest = new WP_Query( $args );

			if ( $latest->have_posts() ) :  while ( $latest->have_posts() ) : $latest->the_post(); 

				 get_template_part( 'content', get_post_format() );

			endwhile; endif; wp_reset_postdata(); ?>

		</div>

		<div class="top-title">
			<h2>Most Popular</h2>
		</div>

		<div class="grid">
			<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '6',
				'category_name' => 'Popular',
				'category__not_in' => array( 5 ),
			);

			$popular = new WP_Query( $args );

			if ( $popular->have_posts() ) :  while ( $popular->have_posts() ) : $popular->the_post(); 

				 get_template_part( 'content', get_post_format() );

			endwhile; endif; wp_reset_postdata(); ?>

		</div>


		<div class="top-title">
			<h2>My Thoughts</h2>
		</div>

		<div class="grid">

			<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '6',
				'category_name' => 'Thoughts',
				'category__not_in' => array( 5 ),
			);

			$thoughts = new WP_Query( $args );

			if ( $thoughts->have_posts() ) :  while ( $thoughts->have_posts() ) : $thoughts->the_post(); 

				 get_template_part( 'content', get_post_format() );

			endwhile; endif; wp_reset_postdata(); ?>

		</div>
</section>

<section class="quote-container">
	<div class="small-container">
		<blockquote class="testimonial">"Hi Tania, I just wanted to say that your tutorials are by far the best I've seen. Well written and well explained. Thank
			you for all your effort."
			<cite>&mdash; <a href="https://github.com/jpggvilaca" target="_blank">João Vilaça</a>, Software Engineer</cite></blockquote>
	</div>
</section>

<?php get_footer();