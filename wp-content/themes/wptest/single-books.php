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
            <p>Автор: <?php the_terms( get_the_ID(), 'books-authors', '', ', ', '' ); ?></p>
            <i><?php the_date(); ?></i>
        </div>
    </div>

<?php get_footer(); ?>