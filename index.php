<?php get_header(); ?>

<section class="page-hero">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</section>

<div style="max-width: 900px; margin: 0 auto; padding: 60px 24px;">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article style="margin-bottom: 40px; padding-bottom: 40px; border-bottom: 1px solid var(--border-light);">
            <h2 style="margin-bottom: 8px;"><a href="<?php the_permalink(); ?>" style="color: var(--primary-blue); text-decoration: none;"><?php the_title(); ?></a></h2>
            <p style="font-size: 13px; color: var(--text-light); margin-bottom: 16px;"><?php the_date(); ?></p>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
