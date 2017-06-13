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


		<section class="fullWidthSection" id="homeTopSection">

			<div class="fullWidthInner">
				
				<div id="newVolumnSection">

					<?php $the_query = new WP_Query( 'showposts=1' ); ?>

					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<article class="cf">
						
						<div class="volumnContent">
							
							<header>
								<p class="volNum" style="color:<?php the_field('volMainColor'); ?>">Vol.&nbsp;<?php the_field('volNum'); ?></p>
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							</header>

							<div class="summary">
								<?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 140,"...");?>
							</div>

						</div>

						<div class="feature">
							
							<?php if ( has_post_thumbnail()) : ?>

							  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							    <?php the_post_thumbnail('full'); ?>
							  </a>
							  
							<?php endif; ?>

						</div>

					</article>

					<?php endwhile;?>
					
				</div>


			</div>

		</section>


		<section class="fullWidthSection white">

			<div class="fullWidthInner">
			
				<div id="popVolumnSection">

					<header class="popVolumnTitle cf">

						<h2>
							<!-- <span class="section_icon">
								<img src="<?php bloginfo('template_url'); ?>/library/images/section_icon.png">
							</span> -->
							<a href="http://www.coletree.com/podcast/treeradio/">森林广播</a>
							<span class="section_intro">每月两期更新</span>
						</h2>

						<div id="radioSubscribe" class="cf">

							<ul class="subcribeBtns">

								<li>
									<a class="itunes" href="https://itunes.apple.com/cn/podcast/xiao-he-yi-shu-dian-tai/id785370614" target="_blank">iTunes订阅</a>
								</li>

								<li>
									<a class="rss" href="http://www.coletree.com/podcast/feed/" target="_blank">RSS订阅</a>
								</li>

								<li>
									<a class="email" href="http://eepurl.com/cTYlg" target="_blank">邮件订阅</a>
								</li>

							</ul>

						</div>

					</header>
					

					<div class="popVolumnList">
						
						<ul class="cf">

							<?php $the_query = new WP_Query(array( 'orderby' => 'rand', 'showposts' => '9',)); ?>

							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

							<li class="">

								<a href="">

									<div class="featurePic">

										<?php if ( has_post_thumbnail()) : ?>

										  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										    <?php the_post_thumbnail('medium'); ?>
										  </a>

										<?php endif; ?>

									</div>

									<div class="content" style="border-top:solid 3px <?php the_field('volMainColor'); ?>;">
										
										<p style="color:<?php the_field('volMainColor'); ?>;">Vol.<?php the_field('volNum'); ?></p>

										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

									</div>

								</a>
								
							</li>

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

		</section>


		<section class="fullWidthSection">
			
			<div class="fullWidthInner">

				<div class="home-sideBar">

					<?php get_sidebar(); ?>
					
				</div>

			</div>

		</section>


	</div>

<?php get_footer(); ?>
