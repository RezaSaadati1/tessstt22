<?php get_header(); ?>
<main>
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>