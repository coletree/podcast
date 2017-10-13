              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('single-volume'); ?> role="article">

                <section class="article-featurePic">
                  
                  <?php if ( has_post_thumbnail()) : ?>
                    <div class="feature-image" >
                      <?php the_post_thumbnail('full'); ?>
                    </div>
                  <?php endif; ?>

                  <p>
                    <span style="background-color:<?php the_field('volMainColor'); ?>">
                      Vol.&nbsp;<?php the_field('volNum'); ?>
                    </span>
                  </p>

                </section>

                <section class="volume-content cf" itemprop="articleBody">

                  <header class="article-header">

                    <h2 class="volume-title"><?php the_title(); ?></h2>

                    <h1 class="volume-subTitle">
                      <span class="line">———————————</span>
                      <span><?php the_field('volSubTitle'); ?></span>
                      <span class="line">———————————</span>
                    </h1>

                  </header>


                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     * 使用<!--nextpage-->标签来把文章分页
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>

                </section>

                <section class="volume-playlist cf">

                  <div id="mp3Player">
                    
                  </div>

                  <?php if( have_rows('volSongList') ): ?>
 
                    <ul class="volSongList">

                      <?php while( have_rows('volSongList') ): the_row(); 

                        // vars
                        $number = get_sub_field('songOrder');
                        $name = get_sub_field('songName');
                        $author = get_sub_field('songAuthor');

                        ?>

                        <li class="songItem">

                          <a href="#mp3Player">
                            <span class="no"><?php echo $number; ?></span>
                            <span><?php echo $name; ?></span>
                            &nbsp;—&nbsp;
                            <span><?php echo $author; ?></span>
                          </a>

                        </li>

                      <?php endwhile; ?>

                    </ul>

                  <?php endif; ?>
                  
                </section>


                <!-- 单篇文章最后/阅读数 -->
                <div class="post_view_count">阅读 <?php post_views('10', '1'); ?></div>


                <!-- 单篇文章最后 -->
                <footer class="article-footer cf" id="single-article-footer">

                  <table>
                    <tbody>
                    <tr>
                      <td width="50%" valign="top">
                        <p>
                          <img src="<?php echo get_template_directory_uri(); ?>/library/images/qcode_weixin.png">
                        </p>
                      </td>
                      <td width="50%" valign="top">
                        <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/qcode_dashang.png">
                        </p>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                    
                </footer> <?php // end article footer ?>


              </article> <?php // end article ?>


              <div class="single-volume-comment">
                <?php comments_template(); ?>
              </div>


              <div id="related_volume" class="clearfix">

                  <!-- 获取同标签的相关文章 -->
                    <ul id="tags_related">

                      <?php
                      global $post;
                      $post_tags = wp_get_post_tags($post->ID);
                      if ($post_tags) {
                        foreach ($post_tags as $tag) {
                        // 获取标签列表
                          $tag_list[] .= $tag->term_id;
                        }
                        // 随机获取标签列表中的一个标签
                        $post_tag = $tag_list[ mt_rand(0, count($tag_list) - 1) ];

                        // 该方法使用 query_posts() 函数来调用相关文章，以下是参数列表
                        $args = array(
                              'tag__in' => array($post_tag),
                              'category__not_in' => array(NULL),    // 不包括的分类ID
                              'post__not_in' => array($post->ID),
                              'showposts' => 3,                       // 显示相关文章数量
                              'caller_get_posts' => 1
                        );

                        query_posts($args);

                        if (have_posts()) {

                          echo '<h4><span>往期类似节目:</span></h4>';

                          while (have_posts()) {

                            the_post(); update_post_caches($posts); ?>

                          <li class="cf">

                            <a target="_blank" class="cf" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

                              <?php if ( has_post_thumbnail()) : ?>
                              <div class="feature-image" >
                                  <?php the_post_thumbnail('small'); ?>
                              </div>
                              <?php endif; ?>

                              <div class="info" >
                                <h5><?php the_title(); ?></h5>
                                <p class="text"><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 70,"...");?></p>
                              </div>
                              

                            </a>

                          </li>
                      
                      <?php
                          }
                        }
                        else {
                          echo '';
                        }
                        wp_reset_query();
                      }

                      else {
                        echo '';
                      }
                      ?>

                  </ul>

              </div>


              <div class="signle-showAll">
                <a href="http://www.coletree.com/podcast/treeradio/">
                  <span>查看往期全部节目</span>
                </a>
              </div>