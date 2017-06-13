			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="cf">

					<div id="footerWidget" class="clearfix">


						<div class="footer-first-widget footer-widget" >

							<h4 class="widgetTitle">电台微信公众号</h4>

							<img src="<?php bloginfo('template_url'); ?>/library/images/weixin_160.png">

						</div>


						<div class="footer-second-widget footer-widget" >

							<h4 class="widgetTitle">关注&订阅电台</h4>

							<ul class="footer-nav cf" id="">
								<li class=""><a href="https://itunes.apple.com/cn/podcast/xiao-he-yi-shu-dian-tai/id785370614" target="_blank">iTunes 订阅电台</a></li>
								<li class=""><a href="http://eepurl.com/cTYlg" target="_blank">邮件订阅电台</a></li>
								<li class=""><a href="http://www.coletree.com/podcast/feed/" target="_blank">Rss阅读器订阅</a></li>
								<li class=""><a href="http://weibo.com/coletree/" target="_blank">关注新浪微博</a></li>
							</ul>
							
						</div>


						<div class="footer-last-widget footer-widget" >

							<h4 class="widgetTitle">按标签随便听听</h4>

							<div class="tagCloud">
								<?php wp_tag_cloud('smallest=11&largest=11&number=12&order=RAND&orderby=count'); ?>
							</div>
							
							<div class="searchForm">
								<?php get_search_form(); ?> 
							</div>
							
						</div>

						
					</div>

					

					<div class="footer-bottom clearfix">

					    <div class="other-links">
					    	<?php
							wp_nav_menu(array(
							'container' => '',                               //remove nav container
							'container_class' => 'footer-links cf',          //class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),    //nav name
							'menu_class' => 'footer-nav cf',            	 //adding custom nav class
							'theme_location' => 'footer-links',              //where it's located in the theme
							'before' => '',                                  //before the menu
							'after' => '',                                   //after the menu
							'link_before' => '-',                            //before each link
							'link_after' => '',                              //after each link
							'depth' => 0,                                    //limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'   //fallback function
							));
							?>
					    </div>

					    <div class="copyright">
					    	© 2006- <?php echo date('Y'); ?> 晓禾依树
					    </div>

					</div>


				</div>

			</footer>


		</div>

		<?php // all js scripts are loaded in library/bones.php ?>

		<?php wp_footer(); ?>


		<!--附加js代码-->
		<script src="<?php bloginfo('template_url'); ?>/library/js/jquery-1.9.0.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/library/js/init.js" type="text/javascript"></script>


		<!--google统计代码-->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-8039100-1']);
		  _gaq.push(['_setDomainName', 'coletree.com']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>

	</body>

</html> <!-- end of site. what a ride! -->
