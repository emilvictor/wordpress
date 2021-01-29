<?php get_header(); ?>

    <?php if (have_posts()): ?>

        <div class="row">
                <div class="col-sm">
                    <?php while (have_posts()): the_post(); ?>

                        <h1><?php the_title(); ?></h1>


                        <?php the_content(); ?>

                    <?php endwhile; ?>
                    

                      <?php      $args = array('numberposts' => 3 );
                            $latest_posts = get_posts( $args ); ?>

                                 <?php   print_r($latest_posts); ?>
                               <
                               

                </div>
            
            </div>

    <?php endif; ?>

<?php get_footer(); ?>