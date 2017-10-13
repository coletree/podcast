<?php
/*
 Template Name: HomePage
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>


	<div id="content">

		<div id="homepage-content">

			<div class="popVolumnList">
				
				<ul class="cf">
					<?php $the_query = new WP_Query(array( 'orderby' => 'rand', 'showposts' => '9',)); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<!-- 引言形式 -->
					<?php if ( has_post_format( 'quote' )) { ?>
						<li <?php post_class('postListItem'); ?>>

							<a href="<?php the_permalink() ?>">

								<div class="content" style="">
									<span style="color:<?php the_field('volMainColor'); ?>;">Vol.<?php the_field('volNum'); ?></span>
									<h3><?php the_title(); ?></h3>
									<p class="listItemSummary">
										<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 100,"...");?>
									</p>
									<div class="home-post-time"><?php the_time('Y-m-d'); ?></div>
								</div>

							</a>
							
						</li>
					<?php 
					}

					// 单图形式
					else if (has_post_format('image')) { ?>
						<li <?php post_class('postListItem'); ?>>

							<a href="<?php the_permalink() ?>">

								<div class="featurePic">
									<?php if ( has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('medium'); ?>
									<?php endif; ?>
								</div>

								<div class="content" style="">
									<span style="color:<?php the_field('volMainColor'); ?>;">Vol.<?php the_field('volNum'); ?></span>
									<h3><?php the_title(); ?></h3>
									<p class="listItemSummary">
										<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 100,"...");?>
									</p>
									<div class="home-post-time"><?php the_time('Y-m-d'); ?></div>
								</div>

							</a>
							
						</li>
						<?php 
					}

					else { ?>
						<li <?php post_class('postListItem'); ?>>
							<a href="<?php the_permalink() ?>">

								<div class="featurePic">
									<?php if ( has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('medium'); ?>
									<?php endif; ?>
								</div>

								<div class="content" style="">
									<span style="color:<?php the_field('volMainColor'); ?>;">Vol.<?php the_field('volNum'); ?></span>
									<h3><?php the_title(); ?></h3>
									<p class="listItemSummary">
										<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 100,"...");?>
									</p>
									<div class="home-post-time"><?php the_time('Y-m-d'); ?></div>
								</div>

							</a>
						</li>
						<?php 
					} ?>




					<?php endwhile;?>
				</ul>

				<div class="showAll">
					<a href="http://www.coletree.com/podcast/treeradio/">
						<span>查看全部节目&nbsp;<?php echo get_category(1)->count; ?></span>
					</a>
				</div>

			</div>

		</div>

	</div>


<?php get_footer(); ?>
