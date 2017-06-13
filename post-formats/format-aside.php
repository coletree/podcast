              <?php
                /*
                 * This is the aside post format.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


                <!-- check if the post has a Post Thumbnail assigned to it. -->
                <?php if ( has_post_thumbnail()) : ?>
                  
                  <div class="feature-image" >
                    <?php the_post_thumbnail('full'); ?>
                  </div>

                <?php endif; ?>


                <header class="article-header">
                  
                  <h1 class="h2 entry-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                  </h1>

                  <div class="entry-meta-wrap cf">

                    <span class="entry-meta">
                      
                      <span>————</span>

                      <span class="entry-meta-date">
                        <a href="<?php the_permalink(); ?>" title="" rel="bookmark">
                          <?php the_date('F j, Y'); ?>
                        </a>
                      </span>

                      <span>&bull;</span>

                      <span class="entry-meta-edit">
                        <?php edit_post_link(); ?>
                      </span>

                      <span>————</span>

                    </span>

                  </div>

                </header>


                <section class="entry-content cf" itemprop="articleBody">
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
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>


                <footer class="article-footer" id="single-article-footer">

                    <!-- 单篇文章最后 -->
                    <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style">
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_douban"></a>
                    <a class="jiathis_button_twitter"></a>
                    <a class="jiathis_button_googleplus"></a>
                    <a href="http://www.jiathis.com/share?uid=1725925" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
                    </div>
                    <script type="text/javascript" >
                    var jiathis_config={
                      data_track_clickback:true,
                      summary:"",
                      ralateuid:{
                        "tsina":"coletree"
                      },
                      appkey:{
                        "tsina":"3982599182"
                      },
                      shortUrl:false,
                      hideMore:true
                    }
                    </script>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1725925" charset="utf-8"></script>
                    <!-- JiaThis Button END -->

                </footer> <?php // end article footer ?>


                <div id="related_article" class="clearfix">

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

                          echo '<h4><span>&nbsp;相关文章&nbsp;</span></h4>';

                          while (have_posts()) {

                            the_post(); update_post_caches($posts); ?>

                          <li>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                              <em>&nbsp;✣&nbsp;&nbsp;</em><?php the_title(); ?>
                              <?php the_date('Y-m-d', '<span>', '</span>'); ?>
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


                <?php comments_template(); ?>


              </article> <?php // end article ?>