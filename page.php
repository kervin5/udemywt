<?php
get_header();
while (have_posts()){
	the_post();
	?>
	<!-- Page Title
	============================================= -->
	<section id="page-title">

		<div class="container clearfix">
			<h1><?php the_title();?></h1>

            <?php if(function_exists(the_subtitle())):?>
			    <span><?php the_subtitle();?></span>
            <?php endif;?>
		</div>

	</section><!-- #page-title end -->
	<?php
}

//rewind the loop
rewind_posts();
?>

	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">


			<div class="container clearfix">

				<!-- Post Content
				============================================= -->
				<div class="postcontent nobottommargin clearfix">
					<?php
					while(have_posts()){
					the_post();
					$author_ID  = get_the_author_meta('ID');
					$author_url = get_author_posts_url($author_ID);
					?>
					<div class="single-post nobottommargin">

						<!-- Single Post
						============================================= -->
						<div class="entry clearfix">



							<!-- Entry Image
							============================================= -->
							<?php if(has_post_thumbnail())  {?>
							<div class="entry-image">
								<a href="<?php the_permalink(); ?>" data-lightbox="image">
									<?php the_post_thumbnail('full'); ?>
								</a>
							</div>
							<?php } ?><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">

								<?php
								the_content();
								wp_link_pages(array(
									'before'           => '<p class="text-center">' . __( 'Pages:', 'udemy' ),
									'after'            => '</p>',
								));//To be used with <!--nextpage--> to paginate content
								?>
								<!-- Post Single - Content End -->


								<div class="clear"></div>

							</div>
						</div><!-- .entry end -->


						<?php
						if(comments_open() || get_comments_number())
						{
							comments_template();
						}

						?>

					</div>

				</div><!-- .postcontent end -->

				<?php
				}
				 ?>

				<?php get_sidebar(); ?>
			</div><!-- .postcontent end -->



		</div>

		</div>

	</section><!-- #content end -->
<?php get_footer(); ?>