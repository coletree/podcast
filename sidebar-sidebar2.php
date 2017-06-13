				<div id="sidebar2" class="sidebar cf" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar2' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<!-- <div class="sidebar">

							<div class="footer-links clearfix">

							    <ul>
							      <li><h4>特别的记录</h4></li>
							      <li><a href="javascript:void(0)">B－ 乐设计工作室</a></li>
							      <li><a href="javascript:void(0)">C－ 晓禾依树豆瓣小站</a></li>
							      <li><a href="javascript:void(0)">D－ 粤你老味豆瓣电台</a></li>
							      <li><a href="javascript:void(0)">E－ 白迷迪音乐制作</a></li>
							      <li><a href="javascript:void(0)">F－ 淘宝闲置小店</a></li>
							    </ul>

							    <ul>
							      <li><h4>Legal</h4></li>
							      <li><a href="javascript:void(0)">1－ 实体唱片收藏库</a></li>
							      <li><a href="javascript:void(0)">2－ 共同走过的地方</a></li>
							      <li><a href="javascript:void(0)">3－ 晓禾依树纪念站</a></li>
							    </ul>

							    <ul>
							      <li><h4>进行中的项目</h4></li>
							      <li><a href="http://localhost/localsite/blog/?page_id=16">CD库</a></li>
							      <li><a href="http://localhost/localsite/blog/?page_id=18">Place</a></li>
							      <li><a href="javascript:void(0)">Products</a></li>
							    </ul>

							</div>
							
						</div> -->

					<?php endif; ?>

				</div>
