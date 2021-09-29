<?php get_header(); ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col">
                    <h3><?php the_title() ?></h3>
                    <i><?php the_time('j F Y'); ?> <span><?php the_time(); ?></span></i>
                    <br>
                    <a href="<?php the_permalink()?>">Узнать больше</a>

                </div>

            <?php endwhile; ?>
        </div>
<?php get_footer(); ?>

