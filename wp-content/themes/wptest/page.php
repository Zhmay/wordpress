<?php get_header(); ?>
    <?php the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <i><?php the_date(); ?></i>
<?php get_footer(); ?>
