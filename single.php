<?php get_header(); ?>

<section class="page-hero">
    <h1><?php the_title(); ?></h1>
    <p><?php the_date(); ?></p>
</section>

<div style="max-width: 800px; margin: 0 auto; padding: 60px 24px;">
    <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
