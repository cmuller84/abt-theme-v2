<?php get_header(); ?>

<section class="page-hero">
    <h1>Page Not Found</h1>
    <p>Sorry, the page you're looking for doesn't exist or has been moved.</p>
</section>

<div style="max-width: 600px; margin: 0 auto; padding: 80px 24px; text-align: center;">
    <p style="font-size: 18px; color: var(--text-medium); margin-bottom: 32px;">The page you're looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-cta">Return Home &rarr;</a>
</div>

<?php get_footer(); ?>
