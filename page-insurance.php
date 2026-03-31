<?php
/**
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>Insurance We Accept</h1>
    <p>We accept most major insurance plans so your child can get the care they need.</p>
</section>

<div style="max-width: 1200px; margin: 0 auto; padding: 60px 24px;">

    <div style="text-align: center; margin-bottom: 48px;">
        <p style="font-size: 20px; color: var(--text-medium); line-height: 1.8; max-width: 700px; margin: 0 auto;">
            Advanced Behavioral Therapy works with most major insurance providers to make ABA therapy accessible for your family. Our intake team handles all insurance verification and prior authorizations so you can focus on your child.
        </p>
    </div>

    <!-- Main Insurance Logos -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 24px; margin-bottom: 60px;">
        <?php
        $insurers = array(
            array('file' => 'aetna_lightgray.png', 'name' => 'Aetna'),
            array('file' => 'anthem_bcbs_lightgray.png', 'name' => 'Anthem BCBS'),
            array('file' => 'uhc_lightgray.png', 'name' => 'UnitedHealthcare'),
            array('file' => 'cigna_lightgray.png', 'name' => 'Cigna'),
            array('file' => 'buckeye_lightgray.png', 'name' => 'Buckeye Health Plan'),
        );
        foreach ($insurers as $ins): ?>
        <div style="background: var(--bg-light); border-radius: 16px; padding: 32px 24px; text-align: center; border: 2px solid var(--border-light); transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='var(--border-light)';this.style.transform=''">
            <img src="<?php echo esc_url($img . $ins['file']); ?>" alt="<?php echo esc_attr($ins['name']); ?>" style="height: 72px; width: auto; margin-bottom: 12px; filter: none; opacity: 1;">
            <p style="font-weight: 600; font-size: 20px; color: var(--text-dark);"><?php echo esc_html($ins['name']); ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Additional Accepted Plans -->
    <div style="background: var(--bg-light); border-radius: 20px; padding: 40px; margin-bottom: 48px;">
        <h2 style="font-size: 32px; color: var(--accent-red); margin-bottom: 20px; font-family: 'Sour Gummy', sans-serif;">Additional Accepted Plans</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;">
            <?php
            $additional = array(
                'CareSource', 'AmeriHealth Caritas', 'Medical Mutual', 'UMR', 'Molina Healthcare',
                'UnitedHealthcare Community Plan', 'Paramount', 'Ohio Autism Scholarship (ASP)', 'Caresource Just4Me', 'Aultcare'
            );
            foreach ($additional as $plan): ?>
            <div style="display: flex; align-items: center; gap: 8px; padding: 10px 0;">
                <span style="color: #2e7d32; font-size: 20px;">&#10004;</span>
                <span style="font-size: 18px; color: var(--text-dark);"><?php echo esc_html($plan); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ASP Section -->
    <div style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); border-radius: 20px; padding: 40px; color: #fff; margin-bottom: 48px;">
        <h2 style="font-size: 32px; margin-bottom: 12px; color: #fff;">Ohio Autism Scholarship Program (ASP)</h2>
        <p style="font-size: 20px; line-height: 1.8; opacity: 0.9;">We are a proud provider of the Ohio Autism Scholarship Program. If your child qualifies, this program can help cover the cost of ABA therapy services. Contact us to learn more about eligibility and enrollment.</p>
    </div>

    <!-- CTA -->
    <div style="text-align: center; padding: 20px 0 40px;">
        <h3 style="font-size: 32px; color: var(--text-dark); margin-bottom: 12px; font-family: 'Sour Gummy', sans-serif;">Not sure if your insurance is accepted?</h3>
        <p style="font-size: 20px; color: var(--text-medium); margin-bottom: 24px;">Call us and we'll verify your benefits for free. No obligation.</p>
        <a href="tel:<?php echo esc_attr(str_replace(array(' ','-','.'), '', get_option('abt_phone', '8888301672'))); ?>" class="btn-cta-lg">Call <?php echo esc_html(get_option('abt_phone', '888-830-1672')); ?></a>
    </div>

</div>

<?php get_footer(); ?>
