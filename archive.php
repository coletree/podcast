<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf">

			<div id="main" class="volume-archive-list m-all cf" role="main">

				<?php if (is_category()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '分类:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
					</h1>

				<?php } elseif (is_tag()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '标签:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
					</h1>

				<?php } elseif (is_author()) {
					global $post;
					$author_id = $post->post_author;
				?>
					<h1 class="archive-title h2">

						<span><?php _e( '主播:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

					</h1>
				<?php } elseif (is_day()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '时间:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
					</h1>

				<?php } elseif (is_month()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '月份:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
					</h1>

				<?php } elseif (is_year()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( '年:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
					</h1>
				<?php } ?>


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
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
