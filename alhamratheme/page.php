<?php get_header(); ?>

			<div class="row" id="content">

				<?php while(have_posts()):the_post() ?>
					<h3 class="title"><?php the_title(); ?></h3>
					<p class="sitepara">
					<?php the_content(); ?>

					</p>
				<?php endwhile; ?>
				

			</div>

		</div><!-- end of container -->
<?php get_footer(); ?>