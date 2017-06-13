<?php get_header(); ?>

	<div id="content" class="wrap">

		<div id="inner-content" class="cf">

				<div id="main" class="volume-archive-list cf" role="main">

					<h1>森林电台节目列表</h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> >

						<section class="volume-image-wrap">
							
							<!-- check if the post has a Post Thumbnail assigned to it. -->
							<?php if ( has_post_thumbnail()) : ?>

							<div class="feature-image" >
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('small'); ?>
							</a>
							</div>

							<?php endif; ?>

						</section>

						<header class="volume-header-wrap">

							<h2 class="volume-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<em style="background:<?php the_field('volMainColor'); ?>">Vol.&nbsp;<?php the_field('volNum'); ?></em>
								<?php the_title(); ?>
								</a>
							</h2>

							<div class="volume-summary">
								<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 200,"...");?>
							</div>

							<div class="volume-meta">
								<?php the_tags( '', '', ''); ?>
							</div>

						</header>

					</article>


					<?php endwhile; ?>

						<?php bones_page_navi(); ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry cf">

							<h2>没有找到节目，回到首页浏览试试</h2>

						</article>

					<?php endif; ?>

				</div>

			<?php //get_sidebar(); ?>

		</div>

	</div>


<?php get_footer(); ?>
