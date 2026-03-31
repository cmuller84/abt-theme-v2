<?php
/**
 * Template Name: Homepage
 * Front page template — updated 3/18 per Rachel/Avigail/Joseph meeting feedback
 */
get_header();

$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<!-- Hero -->
<section class="hero" style="background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div class="hero-inner">
        <div class="hero-content">
            <h1><?php echo wp_kses_post(get_option('abt_hero_headline', 'Where Your Child Can <span class="advance">Advance</span> <span class="blue">Beyond Your Expectations</span>')); ?></h1>
            <p><?php echo esc_html(get_option('abt_hero_subtext', 'BCBA-owned and operated ABA therapy services for children with autism. Home-based, center-based, and early learning center programs in Ohio and New Jersey.')); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-cta">Start ABA Therapy &rarr;</a>
                <a href="<?php echo esc_url(home_url('/our-services/')); ?>" class="btn-secondary">Learn About ABA</a>
            </div>
            <div class="hero-badge">
                <div class="hero-badge-icon">&#10004;</div>
                <div class="hero-badge-text">
                    <strong>BCBA Owned</strong>
                    <span>&amp; Operated</span>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo esc_url(abt_img('hero', 'hero-balloon-kid-v5.png')); ?>" alt="Child with ABT balloons and rocket pack">
        </div>
    </div>
</section>

<!-- Value Props — plain white bg -->
<section class="value-props">
    <div class="value-props-inner">
        <div class="value-prop">
            <div class="value-prop-icon" style="font-size: 16px;">&#10084;&#65039;</div>
            <h4 style="font-size: 22px;">Most Major Insurances Accepted</h4>
            <p style="font-size: 18px;">We handle the paperwork so you can focus on your child</p>
        </div>
        <div class="value-prop">
            <div class="value-prop-icon" style="font-size: 16px;">&#127968;</div>
            <h4 style="font-size: 22px;">At Home, School, or Our Centers</h4>
            <p style="font-size: 18px;">Flexible service locations to fit your family's needs</p>
        </div>
        <div class="value-prop">
            <div class="value-prop-icon" style="font-size: 16px;">&#128118;</div>
            <h4 style="font-size: 22px;">For Children Ages 1-12</h4>
            <p style="font-size: 18px;">Early intervention through school-age support</p>
        </div>
    </div>
</section>

<!-- Services — pattern bg -->
<section class="services" style="background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div class="services-inner">
        <div class="section-header">
            <h2>Our ABA Therapy Services</h2>
            <p>Personalized treatment plans designed to help your child develop essential life skills and reach their goals.</p>
        </div>
        <div class="services-grid">
            <div class="service-card"><div class="service-card-image">&#127968;</div><div class="service-card-content"><h3>Home-Based ABA</h3><p>One-on-one therapy in the comfort of your home, where children learn best in familiar surroundings.</p><a href="<?php echo esc_url(home_url('/our-services/#home')); ?>">Learn More &rarr;</a></div></div>
            <div class="service-card"><div class="service-card-image">&#127979;</div><div class="service-card-content"><h3>Center-Based ABA</h3><p>Structured learning at our state-of-the-art centers with social skill building opportunities.</p><a href="<?php echo esc_url(home_url('/our-services/#center')); ?>">Learn More &rarr;</a></div></div>
            <div class="service-card"><div class="service-card-image">&#128218;</div><div class="service-card-content"><h3>Early Learning Centers</h3><p>ABA therapy in daycare settings for children ages 2-6, supporting development alongside peers.</p><a href="<?php echo esc_url(home_url('/our-services/#elc')); ?>">Learn More &rarr;</a></div></div>
            <div class="service-card"><div class="service-card-image">&#127891;</div><div class="service-card-content"><h3>School Support</h3><p>Support in educational settings through IEP collaboration and positive behavioral interventions.</p><a href="<?php echo esc_url(home_url('/our-services/#school')); ?>">Learn More &rarr;</a></div></div>
        </div>
    </div>
</section>

<!-- Locations — white bg (avoids back-to-back pattern) -->
<section class="locations" style="padding: 80px 0; background: var(--white);">
    <div style="max-width: 1360px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Our Locations</h2>
            <p>Serving families across Ohio and New Jersey with center-based and in-home services.</p>
        </div>
        <div class="locations-grid">
            <a href="<?php echo esc_url(home_url('/beachwood-ohio/')); ?>" class="location-card" style="text-decoration: none;"><div class="location-icon">&#128205;</div><h4>Beachwood, Ohio</h4><p><?php echo nl2br(esc_html(get_option('abt_addr_beachwood', '23645 Mercantile Road, Beachwood, OH 44122'))); ?></p><p style="font-weight: 600; color: var(--primary-blue); font-size: 17px;">216-508-0222</p><span class="badge">Center-Based</span></a>
            <a href="<?php echo esc_url(home_url('/powell-ohio/')); ?>" class="location-card" style="text-decoration: none;"><div class="location-icon">&#128205;</div><h4>Powell, Ohio</h4><p><?php echo nl2br(esc_html(get_option('abt_addr_powell', '10104 Brewster Ln, Suite 100, Powell, OH 43065'))); ?></p><p style="font-weight: 600; color: var(--primary-blue); font-size: 17px;">(614) 654-6912</p><span class="badge badge-green">Now Open</span><span class="badge" style="margin-left: 6px;">Center-Based</span></a>
            <a href="<?php echo esc_url(home_url('/reynoldsburg-ohio/')); ?>" class="location-card" style="text-decoration: none;"><div class="location-icon">&#128205;</div><h4>Reynoldsburg, Ohio</h4><p><?php echo nl2br(esc_html(get_option('abt_addr_reynoldsburg', '6096 E Main St, Suite 106, Columbus, OH 43213'))); ?></p><p style="font-weight: 600; color: var(--primary-blue); font-size: 17px;">614-604-9096</p><span class="badge">Center-Based</span></a>
            <a href="<?php echo esc_url(home_url('/new-jersey/')); ?>" class="location-card" style="text-decoration: none;"><div class="location-icon">&#128205;</div><h4>New Jersey</h4><p><?php echo nl2br(esc_html(get_option('abt_addr_nj', 'Home-Based Services — Toms River & Surrounding Areas'))); ?></p><p style="font-weight: 600; color: var(--primary-blue); font-size: 17px;">888-830-1672 ext 104</p><span class="badge">Home-Based</span></a>
        </div>
    </div>
</section>

<!-- Getting Started — pattern bg, circles YELLOW, titles NAVY -->
<section class="process" style="background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div class="process-inner">
        <div class="section-header">
            <h2>Getting Started Is Easy</h2>
            <p>No waitlist. No endless intake process. Just a team ready to help your child.</p>
        </div>
        <div class="process-steps">
            <div class="process-step"><div class="step-number" style="background: var(--accent-yellow); color: var(--text-dark);">1</div><h4 style="color: var(--primary-blue);">Inquire</h4><p>Fill out our enrollment form or call our intake line. A skilled professional is ready to assist you.</p></div>
            <div class="process-step"><div class="step-number" style="background: var(--accent-yellow); color: var(--text-dark);">2</div><h4 style="color: var(--primary-blue);">Insurance Check</h4><p>Provide your insurance info and our team will verify your benefits and eligibility.</p></div>
            <div class="process-step"><div class="step-number" style="background: var(--accent-yellow); color: var(--text-dark);">3</div><h4 style="color: var(--primary-blue);">Assessment</h4><p>A BCBA will conduct an initial intake assessment to determine the best services for your child.</p></div>
            <div class="process-step"><div class="step-number" style="background: var(--accent-yellow); color: var(--text-dark);">4</div><h4 style="color: var(--primary-blue);">Begin Therapy</h4><p>We match your child with a dedicated therapist and start working toward their goals.</p></div>
        </div>
    </div>
</section>

<!-- Admin Day Video — white bg -->
<section style="padding: 60px 0; background: var(--white);">
    <div style="max-width: 900px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header"><h2>Watch Our Story</h2></div>
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.12);">
            <iframe src="<?php echo esc_url(get_option('abt_canva_video_url', 'https://www.canva.com/design/DAG-VFwY7wc/fYw-27JBw2d3g9emYxxfzw/watch?embed')); ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;" allow="fullscreen" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- Testimonials — pattern bg, BIGGER -->
<section class="testimonials" style="background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1360px; margin: 0 auto; padding: 80px 24px;">
        <div class="section-header">
            <h2>What Parents Are Saying</h2>
            <p>Real stories from real families who have experienced the ABT difference.</p>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
            <div style="background: var(--white); border-radius: 20px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                <p style="font-size: 20px; line-height: 1.8; color: var(--text-dark); margin-bottom: 24px;"><?php echo esc_html(get_option('abt_testimonial_1_text', 'Advanced Behavioral Therapy has been incredible for our family. From day one, the team was professional, caring, and truly dedicated to helping our son. The BCBA created a detailed plan tailored specifically to his needs, and we\'ve seen amazing progress in just a few months.')); ?></p>
                <div style="display: flex; align-items: center; gap: 16px;"><div style="width: 56px; height: 56px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 20px;"><?php echo esc_html(get_option('abt_testimonial_1_initials', 'JK')); ?></div><div><strong style="font-size: 18px;"><?php echo esc_html(get_option('abt_testimonial_1_name', 'J.K.')); ?></strong><br><span style="font-size: 15px; color: var(--text-light);">Google Review &bull; &#11088;&#11088;&#11088;&#11088;&#11088;</span></div></div>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                <p style="font-size: 20px; line-height: 1.8; color: var(--text-dark); margin-bottom: 24px;"><?php echo esc_html(get_option('abt_testimonial_2_text', 'We are so grateful for ABT. They got us approved quickly with our insurance and a therapist was in our home within days. The care and professionalism from every single person on the team has been outstanding. We couldn\'t ask for a better experience for our child.')); ?></p>
                <div style="display: flex; align-items: center; gap: 16px;"><div style="width: 56px; height: 56px; background: var(--accent-red); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 20px;"><?php echo esc_html(get_option('abt_testimonial_2_initials', 'KB')); ?></div><div><strong style="font-size: 18px;"><?php echo esc_html(get_option('abt_testimonial_2_name', 'K.B.')); ?></strong><br><span style="font-size: 15px; color: var(--text-light);">Google Review &bull; &#11088;&#11088;&#11088;&#11088;&#11088;</span></div></div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance — bigger logos, color on hover, full list -->
<section style="padding: 70px 0; background: var(--white);">
    <div style="max-width: 1360px; margin: 0 auto; padding: 0 24px; text-align: center;">
        <div class="section-header"><h2>Insurance Accepted</h2><p>We work with most major insurance plans so you can focus on your child, not paperwork.</p></div>
        <div style="display: flex; justify-content: center; align-items: center; gap: 52px; flex-wrap: wrap; margin-bottom: 28px;">
            <img src="<?php echo esc_url($img . 'aetna_lightgray.png'); ?>" alt="Aetna" class="insurance-logo-lg">
            <img src="<?php echo esc_url($img . 'anthem_bcbs_lightgray.png'); ?>" alt="Anthem BCBS" class="insurance-logo-lg">
            <img src="<?php echo esc_url($img . 'uhc_lightgray.png'); ?>" alt="United Healthcare" class="insurance-logo-lg">
            <img src="<?php echo esc_url($img . 'cigna_lightgray.png'); ?>" alt="Cigna" class="insurance-logo-lg">
            <img src="<?php echo esc_url($img . 'buckeye_lightgray.png'); ?>" alt="Buckeye Health Plan" class="insurance-logo-lg">
        </div>
        <p style="font-size: 18px; color: var(--text-medium); margin-bottom: 24px;"><strong style="font-size: 20px; color: var(--text-dark);">Also accepted:</strong> CareSource &bull; Medical Mutual &bull; OSU Health Plan &bull; AmeriHealth Caritas &bull; Paramount &bull; Humana Healthy Horizons &bull; Ohio Autism Scholarship Program (ASP)</p>
        <a href="<?php echo esc_url(home_url('/insurance/')); ?>" style="font-size: 18px; color: var(--primary-blue); font-weight: 600; text-decoration: underline;">View All Accepted Plans &rarr;</a>
    </div>
</section>

<!-- CTA — RED per Rachel "Ready to help your child thrive" -->
<section style="padding: 80px 0; background: linear-gradient(135deg, var(--accent-red) 0%, #B71C1C 100%); text-align: center;">
    <div style="max-width: 700px; margin: 0 auto; padding: 0 24px;">
        <h2 style="font-size: 42px; color: #fff; margin-bottom: 20px; font-family: 'Sour Gummy', sans-serif;">Ready to Help Your Child Thrive?</h2>
        <p style="font-size: 20px; color: rgba(255,255,255,0.9); margin-bottom: 32px; line-height: 1.7;">Take the first step today. Our team is ready to answer your questions and get your child started on the path to progress.</p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-cta-lg" style="background: var(--accent-yellow); color: var(--text-dark);">Enroll Today &rarr;</a>
            <a href="tel:8888301672" class="btn-outline-white">Call 888-830-1672</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
