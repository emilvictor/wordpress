<?php get_header(); ?>

    <?php if (have_posts()): ?>

        <div class="row">
                <div class="col-sm">
                    <?php while (have_posts()): the_post(); ?>

                        <p><?php the_date()?></p>

                        <h1><?php the_title(); ?></h1>


                        <?php the_content(); ?>

                    <?php endwhile; ?>
                </div>
            
            </div>

    <?php endif; ?>

<?php get_footer(); ?>