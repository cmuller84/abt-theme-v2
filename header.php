<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $gtm = get_option('abt_gtm_id');
    if ($gtm): ?>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php echo esc_attr($gtm); ?>');</script>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ($gtm): ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr($gtm); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php endif; ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="top-bar-inner">
        <div class="top-bar-left">
            <span><?php echo wp_kses_post(get_option('abt_announcement', '&#127881; Now Open: Powell, Ohio Center!')); ?></span>
        </div>
        <div class="top-bar-right">
            <?php $email = get_option('abt_email', 'coordinations@advancedabatherapy.com'); ?>
            <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
            <div class="social-links">
                <?php $fb = get_option('abt_facebook', 'https://facebook.com/advancedbehavioraltherapy/'); if ($fb): ?>
                    <a href="<?php echo esc_url($fb); ?>" title="Facebook" target="_blank" rel="noopener">f</a>
                <?php endif; ?>
                <?php $li = get_option('abt_linkedin', 'https://linkedin.com/company/advanced-behavioral-therapy'); if ($li): ?>
                    <a href="<?php echo esc_url($li); ?>" title="LinkedIn" target="_blank" rel="noopener">in</a>
                <?php endif; ?>
                <?php $ig = get_option('abt_instagram', 'https://instagram.com/advancedbehavioraltherapy/'); if ($ig): ?>
                    <a href="<?php echo esc_url($ig); ?>" title="Instagram" target="_blank" rel="noopener">&#128247;</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header class="site-header">
    <div class="header-inner">
        <div class="logo-wrap">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <div class="logo-fallback">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url(ABT_THEME_URI . '/assets/images/ABT_Home_Logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <nav class="main-nav" id="mainNav">
            <div class="nav-item has-dropdown">
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About</a>
                <div class="dropdown-menu">
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>">Our Story</a>
                    <a href="<?php echo esc_url(home_url('/about-us/#team')); ?>">Our Team</a>
                </div>
            </div>
            <div class="nav-item has-dropdown">
                <a href="<?php echo esc_url(home_url('/our-services/')); ?>">Services</a>
                <div class="dropdown-menu">
                    <a href="<?php echo esc_url(home_url('/our-services/#home')); ?>">Home-Based ABA</a>
                    <a href="<?php echo esc_url(home_url('/our-services/#center')); ?>">Center-Based ABA</a>
                    <a href="<?php echo esc_url(home_url('/our-services/#elc')); ?>">Early Learning Centers</a>
                    <a href="<?php echo esc_url(home_url('/our-services/#school')); ?>">School Support</a>
                </div>
            </div>
            <div class="nav-item has-dropdown">
                <a href="<?php echo esc_url(home_url('/our-locations/')); ?>">Locations</a>
                <div class="dropdown-menu">
                    <a href="<?php echo esc_url(home_url('/beachwood-ohio/')); ?>">Beachwood, OH</a>
                    <a href="<?php echo esc_url(home_url('/powell-ohio/')); ?>">Powell, OH</a>
                    <a href="<?php echo esc_url(home_url('/reynoldsburg-ohio/')); ?>">Reynoldsburg, OH</a>
                    <a href="<?php echo esc_url(home_url('/new-jersey/')); ?>">New Jersey</a>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ</a>
            <div class="nav-item has-dropdown">
                <a href="<?php echo esc_url(home_url('/careers/')); ?>">Careers</a>
                <div class="dropdown-menu">
                    <a href="<?php echo esc_url(home_url('/careers/')); ?>">Open Positions</a>
                    <a href="<?php echo esc_url(home_url('/university-partnerships/')); ?>">University Partnerships</a>
                    <a href="<?php echo esc_url(home_url('/careers/#mentorship')); ?>">Free BCBA Supervision</a>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-cta">Enroll Today</a>
        </nav>
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
