<?php
/**
 * Smart page router — checks slug and loads the correct template.
 * This is the fallback if page-{slug}.php doesn't auto-match.
 */

$slug = get_post_field('post_name', get_post());

// Map slugs (and common variations) to template files
$template_map = array(
    'about-us'          => 'page-about-us.php',
    'about'             => 'page-about-us.php',
    'our-services'      => 'page-our-services.php',
    'services'          => 'page-our-services.php',
    'our-locations'     => 'page-our-locations.php',
    'locations'         => 'page-our-locations.php',
    'contact-us'        => 'page-contact-us.php',
    'contact'           => 'page-contact-us.php',
    'faq'               => 'page-faq.php',
    'insurance'         => 'page-insurance.php',
    'careers'           => 'page-careers.php',
    'beachwood-ohio'    => 'page-beachwood-ohio.php',
    'beachwood'         => 'page-beachwood-ohio.php',
    'powell-ohio'       => 'page-powell-ohio.php',
    'powell'            => 'page-powell-ohio.php',
    'reynoldsburg-ohio' => 'page-reynoldsburg-ohio.php',
    'reynoldsburg'      => 'page-reynoldsburg-ohio.php',
    'new-jersey'        => 'page-new-jersey.php',
    'nj'                => 'page-new-jersey.php',
    'university-partnerships' => 'page-university-partnerships.php',
);

if (isset($template_map[$slug])) {
    $template_file = get_template_directory() . '/' . $template_map[$slug];
    if (file_exists($template_file)) {
        include $template_file;
        return;
    }
}

// Default fallback for pages not in the map
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<section class="page-hero">
    <h1><?php the_title(); ?></h1>
</section>

<section style="padding: 60px 0; background: var(--bg-light);">
    <div style="max-width: 900px; margin: 0 auto; padding: 0 24px;">
        <div style="background: var(--white); border-radius: 20px; padding: 48px; box-shadow: 0 4px 16px rgba(0,0,0,0.06);">
            <?php while (have_posts()): the_post(); ?>
                <div style="font-size: 17px; color: var(--text-medium); line-height: 1.9;">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer();
