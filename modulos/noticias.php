                        <?php 
                            $news = array (
                                'category_name'  => 'noticias',
                                'posts_per_page' => 3
                            );
                            $new = new WP_Query( $news );
                            if ( $new->have_posts() ) {
                                while ( $new->have_posts() ) : $new->the_post();
                                    $excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $new->ID));
                                    echo '<div class="noticia clearfix">';
                                        echo '<div class="col-md-4 hidden-sm hidden-xs img-noticia">';
                                            echo '<a href="'.get_the_permalink().'">';
                                                if(has_post_thumbnail()){
                                                    echo get_the_post_thumbnail($post->ID, 'news-home', array('class' => 'img-responsive'));
                                                } else {
                                                    echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Colegio Santa María de Lo Cañas" />';
                                                }
                                            echo '</a>';
                                        echo '</div>';
                                        echo '<div class="col-md-8 col-xs-12">';
                                            echo '<div class="texto">';
                                                echo '<h4><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>';
                                                if($excerpt) {
                                                    echo '<p class="hidden-xs">'.$excerpt.'</p>';
                                                } else {
                                                    echo '<p class="hidden-xs">'.content(20).'</p>';
                                                }
                                                echo '<h5>'.get_the_date().'</h5>';
                                                echo '<a class="ver-mas" href="'.get_the_permalink().'"><span class="caret"></span></a>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                endwhile;
                                wp_reset_postdata();
                            }
                        ?>