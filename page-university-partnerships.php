<?php
/**
 * University Partnerships page — subpage of Careers
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>University Partnerships</h1>
    <p>Significant tuition discounts for ABT staff pursuing ABA degrees.</p>
</section>

<section style="padding: 80px 0; background-image: url('<?php echo esc_url($img . 'abt-pattern-light.jpg'); ?>'); background-size: cover; background-position: center; background-color: rgba(255,255,255,0.92);">
    <div style="max-width: 1000px; margin: 0 auto; padding: 0 24px;">

        <div style="text-align: center; margin-bottom: 48px;">
            <h2 style="font-size: 36px; color: var(--accent-red); margin-bottom: 16px;">Making ABA Education More Accessible</h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.8; max-width: 700px; margin: 0 auto;">ABT is partnered with many colleges to offer our staff significant tuition discounts on ABA and related degree programs. Our goal is to make ABA schooling more accessible and affordable, empowering our team to achieve their academic and professional goals.</p>
        </div>

        <!-- How it works -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 60px;">
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06);">
                <div style="width: 56px; height: 56px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-size: 20px; font-weight: 700;">1</div>
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Join ABT</h3>
                <p style="font-size: 17px; color: var(--text-medium); line-height: 1.7;">Start your career as an RBT with ABT and complete your first 90 days of employment.</p>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06);">
                <div style="width: 56px; height: 56px; background: var(--accent-red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-size: 20px; font-weight: 700;">2</div>
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Enroll in an ABAI Program</h3>
                <p style="font-size: 17px; color: var(--text-medium); line-height: 1.7;">Enroll and start classes in an ABAI-accredited ABA program at one of our partner universities.</p>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06);">
                <div style="width: 56px; height: 56px; background: var(--accent-yellow); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: var(--text-dark); font-size: 20px; font-weight: 700;">3</div>
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Get Free Supervision</h3>
                <p style="font-size: 17px; color: var(--text-medium); line-height: 1.7;">Receive both restricted and unrestricted supervision hours completely free of charge as you pursue your BCBA.</p>
            </div>
        </div>

        <!-- What you get -->
        <div style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); border-radius: 20px; padding: 48px; color: #fff; margin-bottom: 48px;">
            <h2 style="font-size: 32px; margin-bottom: 20px; color: #fff;">What Our Mentorship Program Includes</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="display: flex; align-items: start; gap: 12px;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: var(--accent-yellow); border-radius: 50%; flex-shrink: 0; font-size: 14px; color: var(--text-dark); font-weight: 700;">&#10004;</span>
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.6;">Free restricted &amp; unrestricted supervision hours</p>
                </div>
                <div style="display: flex; align-items: start; gap: 12px;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: var(--accent-yellow); border-radius: 50%; flex-shrink: 0; font-size: 14px; color: var(--text-dark); font-weight: 700;">&#10004;</span>
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.6;">Significant tuition discounts at partner universities</p>
                </div>
                <div style="display: flex; align-items: start; gap: 12px;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: var(--accent-yellow); border-radius: 50%; flex-shrink: 0; font-size: 14px; color: var(--text-dark); font-weight: 700;">&#10004;</span>
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.6;">BCBA task list coverage &amp; hands-on learning</p>
                </div>
                <div style="display: flex; align-items: start; gap: 12px;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: var(--accent-yellow); border-radius: 50%; flex-shrink: 0; font-size: 14px; color: var(--text-dark); font-weight: 700;">&#10004;</span>
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.6;">Fieldwork across home, center, and school settings</p>
                </div>
                <div style="display: flex; align-items: start; gap: 12px;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: var(--accent-yellow); border-radius: 50%; flex-shrink: 0; font-size: 14px; color: var(--text-dark); font-weight: 700;">&#10004;</span>
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.6;">Preparation for the BCBA exam &amp; clinical practice</p>
                </div>
                <div style="display: flex; align-items: start; gap: 12px;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: var(--accent-yellow); border-radius: 50%; flex-shrink: 0; font-size: 14px; color: var(--text-dark); font-weight: 700;">&#10004;</span>
                    <p style="font-size: 18px; opacity: 0.9; line-height: 1.6;">Supportive team environment with ongoing mentorship</p>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div style="text-align: center; padding: 20px 0;">
            <h3 style="font-size: 28px; color: var(--text-dark); margin-bottom: 12px; font-family: 'Sour Gummy', sans-serif;">Interested in Our University Partnerships?</h3>
            <p style="font-size: 18px; color: var(--text-medium); margin-bottom: 24px;">Contact us to learn more about specific partner schools and discount amounts.</p>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-cta-lg">Contact Us &rarr;</a>
        </div>

    </div>
</section>

<?php get_footer(); ?>
