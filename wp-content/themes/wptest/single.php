<?php get_header(); ?>
<?php
    $sidebar_id = 'sidebar-post-single';
    $is_sidebar = is_active_sidebar($sidebar_id);
    $content_class = $is_sidebar ? 'custom-class' : '';
?>
    <div class="single-post">
        <div class="single-post-content <?php echo $content_class ?>">
            <?php the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <i><?php the_date(); ?></i>
        </div>
        <?php if($sidebar_id) : ?>
            <div class="single-post-aside">
                <?php dynamic_sidebar( $sidebar_id); ?>
            </div>
        <?php endif;?>
    </div>

<?php get_footer(); ?>