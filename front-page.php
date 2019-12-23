<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif; ?>

				<!-- home-columns -->
				<div class="home-columns clearfix">

					<!-- one-half -->
					<div class="one-half">

						<h2>Latest Opinion</h2>

						<?php // opinion posts loop begins here
						$ourPosts = new WP_Query('cat=3&posts_per_page=2');

						if ($ourPosts->have_posts()) :

							while ($ourPosts->have_posts()) : $ourPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata(); ?>

						<span class="horiz-center"><a href="<?php echo get_category_link(3); ?>" class="btn-a">View all Opinion Posts</a></span>

					</div><!-- /one-half -->

					<!-- one-half -->
					<div class="one-half last">

						<h2>Latest News</h2>

						<?php // news posts loop begins here
						$ourPosts = new WP_Query('cat=4&posts_per_page=2');

						if ($ourPosts->have_posts()) :

							while ($ourPosts->have_posts()) : $ourPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>

						<span class="horiz-center"><a href="<?php echo get_category_link(4); ?>" class="btn-a">View all News Posts</a></span>

					</div><!-- /one-half -->

				</div><!-- /home-columns -->

	</div><!-- /site-content -->

	<?php get_footer();

?>
