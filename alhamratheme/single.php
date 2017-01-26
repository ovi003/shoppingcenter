<?php get_header(); ?>

			<div class="row" id="content">
				
				<div class="col-xs-3" id="leftsidebar">
					<div class="row">
						<?php get_sidebar(); ?>
					</div>
				</div>

				<div class="col-xs-9">

				<?php while(have_posts()):the_post() ?>

					<h3 class="title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="sitepara">
					<?php the_content(); ?>

					</p>
				<?php endwhile; ?>
				</div>

			</div>

		</div><!-- end of container -->
<?php get_footer(); ?>