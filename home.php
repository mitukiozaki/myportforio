<?php get_header();?>
<main>

                <div class="main_img">
                    <img class="garmin" src="<?php echo get_template_directory_uri(); ?>/images/my-bike.jpeg" alt="">
                </div>
                <div class="about" id="target">
                    <div class="text1-1">
                         <h1>About</h1>
                     </div>


                    <div class="my_prof">
                        <div class="my">
                            <img class="my_photo"src="<?php echo get_template_directory_uri(); ?>/images/my.png" alt="">
                        </div>
                        <div class="my_prof_text">
                            <p>Ozaki&emsp;Mitsuki</p>
                            <h2 class="my_name">尾﨑　円樹</h2>
                            <p class="my_birthday">2001年&emsp;8月30日生</p>
                            <div class="border"></div>
                            <p>2020年&emsp;高校卒業後自動車関係の会社へ就職</p>
                            <div class="border"></div>
                            <p>2022年&emsp;３月プログラミングスクールに入学</p>
                            <div class="border"></div>
                            <p>2023年&emsp;3月に卒業予定</p>
                        </div>
                    </div>
                    <div class="appeal">
                        <div class="appeal_text">
                        <p>
                           自転車大好きな21歳!<br>
                           高校卒業後自動車関係の会社へ就職もっと自由な働き方を求めてプログラミングスクールへ入学<br>
                           現在HTML、CSS、WordPressを使ったWEBサイト制作、Adobe XD、Photo Shopを使ったデザインを学習中です。
                        </p>

                        </div>
                        
                    </div>

                </div>


                <div class="works" id="target2">
                    <div class="text2-1">
                        <h1>Works</h1>
                    </div>
                    <div class="work_site">
                        <div class="work_site1-1">

                            <a href="<?php echo get_template_directory_uri();?>/images/bike_saite.png" target="_blank"><img class="bike" src="<?php echo get_template_directory_uri(); ?>/images/bike.png" alt=""></a>

                            <a href="<?php echo get_template_directory_uri();?>/images/samurai_univer.png" target="_brank"><img class="samurai" src="<?php echo get_template_directory_uri(); ?>/images/univercity.png" alt=""></a>

                            <a href="<?php echo get_template_directory_uri(); ?>/images/samurai_dou.png" target="_brank"><img class="univercity" src="<?php echo get_template_directory_uri(); ?>/images/samuraidou.png" alt=""></a>

                        </div>
                    </div>
                </div>


                <div class="blog" id="target3">
                    <div class="text3-1">
                        <h1>Blog</h1>
                    </div>
                    <div class="list_1">
                        <div class="post">
                            <?php $args = array(
                                 'post_type'      => 'post',
                                 'category_name' => 'myblog',
                                 'posts_per_page' => 3,
                                );
                                $posts = get_posts($args);
                            ?>
                            <?php foreach($posts as $post): ?>

                            <?php setup_postdata($post);  ?>

                            <div class="icatch">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>

                            <div class="blog_title">
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                            </div>
                               <?php endforeach; ?>
                              <?php wp_reset_postdata(); ?>
                        </div>
                    </div>



                </div>

            </main>

<?php get_footer(); ?>