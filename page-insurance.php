<?php
/**
 * Template Name: Insurance Page
 * Updated per Operations Manual (4/23/2025)
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

    <!-- Ohio Section -->
    <h2 style="font-size: 32px; color: var(--accent-red); margin-bottom: 8px; font-family: 'Sour Gummy', sans-serif;">Ohio Insurance Plans</h2>
    <p style="font-size: 16px; color: var(--text-light); margin-bottom: 28px;">Serving Beachwood, Powell, Reynoldsburg, and surrounding areas</p>

    <!-- Ohio Commercial (In-Network) -->
    <h3 style="font-size: 22px; color: var(--primary-blue); margin-bottom: 20px;">Commercial Plans (In-Network)</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 16px; margin-bottom: 40px;">
        <?php
        $oh_commercial = array(
            array('name' => 'Anthem BCBS', 'file' => 'anthem_bcbs_lightgray.png'),
            array('name' => 'Aetna', 'file' => 'aetna_lightgray.png'),
            array('name' => 'Cigna / Evernorth', 'file' => 'cigna_lightgray.png'),
            array('name' => 'CareSource', 'file' => ''),
            array('name' => 'Medical Mutual', 'file' => ''),
            array('name' => 'OSU Health Plan', 'file' => ''),
        );
        foreach ($oh_commercial as $ins): ?>
        <div style="background: var(--bg-light); border-radius: 14px; padding: 24px 16px; text-align: center; border: 2px solid var(--border-light); transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-3px)'" onmouseout="this.style.borderColor='var(--border-light)';this.style.transform=''">
            <?php if ($ins['file']): ?>
                <img src="<?php echo esc_url($img . $ins['file']); ?>" alt="<?php echo esc_attr($ins['name']); ?>" style="height: 48px; width: auto; margin-bottom: 10px; display: block; margin-left: auto; margin-right: auto;">
            <?php else: ?>
                <div style="height: 48px; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                    <span style="font-size: 28px; color: var(--primary-blue);">&#10004;</span>
                </div>
            <?php endif; ?>
            <p style="font-weight: 600; font-size: 16px; color: var(--text-dark); margin: 0;"><?php echo esc_html($ins['name']); ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- UHC/UMR Note -->
    <div style="background: #FFF8E1; border-radius: 14px; padding: 24px 28px; margin-bottom: 40px; border-left: 4px solid var(--accent-yellow);">
        <p style="font-size: 16px; color: var(--text-dark); margin: 0; line-height: 1.7;">
            <strong>UnitedHealthcare / UMR:</strong> While we are not currently in-network with UHC or UMR commercial plans, we can often work with families who have out-of-network benefits or request a single case agreement. Contact us and we'll check your coverage.
        </p>
    </div>

    <!-- Ohio Managed Care Medicaid -->
    <h3 style="font-size: 22px; color: var(--primary-blue); margin-bottom: 20px;">Managed Care Medicaid Plans (Ohio)</h3>
    <p style="font-size: 15px; color: var(--text-medium); margin-bottom: 16px;">We cannot accept traditional/straight Medicaid, but we accept these managed care Medicaid plans:</p>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px; margin-bottom: 48px;">
        <?php
        $oh_medicaid = array(
            'CareSource',
            'Anthem BCBS',
            'Buckeye Health Plan',
            'UHC Community Plan',
            'Aetna Better Health of Ohio',
            'AmeriHealth Caritas',
            'Paramount',
            'Humana Healthy Horizons',
        );
        foreach ($oh_medicaid as $plan): ?>
        <div style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; background: var(--bg-light); border-radius: 10px;">
            <span style="color: #2e7d32; font-size: 18px; flex-shrink: 0;">&#10004;</span>
            <span style="font-size: 16px; color: var(--text-dark); font-weight: 500;"><?php echo esc_html($plan); ?></span>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Divider -->
    <hr style="border: none; border-top: 2px solid var(--border-light); margin-bottom: 48px;">

    <!-- NJ Section -->
    <h2 style="font-size: 32px; color: var(--accent-red); margin-bottom: 8px; font-family: 'Sour Gummy', sans-serif;">New Jersey Insurance Plans</h2>
    <p style="font-size: 16px; color: var(--text-light); margin-bottom: 28px;">Serving Toms River, Lakewood, Brick, Jackson, and surrounding Ocean County communities</p>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 48px;">
        <!-- NJ Commercial -->
        <div style="background: var(--bg-light); border-radius: 16px; padding: 28px;">
            <h3 style="font-size: 18px; color: var(--primary-blue); margin-bottom: 16px;">Commercial Plans</h3>
            <?php
            $nj_commercial = array('Aetna', 'Horizon BCBS');
            foreach ($nj_commercial as $plan): ?>
            <div style="display: flex; align-items: center; gap: 10px; padding: 10px 0;">
                <span style="color: #2e7d32; font-size: 18px;">&#10004;</span>
                <span style="font-size: 16px; color: var(--text-dark); font-weight: 500;"><?php echo esc_html($plan); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- NJ Medicaid -->
        <div style="background: var(--bg-light); border-radius: 16px; padding: 28px;">
            <h3 style="font-size: 18px; color: var(--primary-blue); margin-bottom: 16px;">Medicaid Plans</h3>
            <?php
            $nj_medicaid = array('Aetna Better Health NJ', 'Wellpoint', 'Horizon NJ Health');
            foreach ($nj_medicaid as $plan): ?>
            <div style="display: flex; align-items: center; gap: 10px; padding: 10px 0;">
                <span style="color: #2e7d32; font-size: 18px;">&#10004;</span>
                <span style="font-size: 16px; color: var(--text-dark); font-weight: 500;"><?php echo esc_html($plan); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ASP Section -->
    <div style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); border-radius: 20px; padding: 40px; color: #fff; margin-bottom: 48px;">
        <h2 style="font-size: 32px; margin-bottom: 12px; color: #fff;">Ohio Autism Scholarship Program (ASP)</h2>
        <p style="font-size: 20px; line-height: 1.8; opacity: 0.9;">We are a proud provider of the Ohio Autism Scholarship Program. If your child qualifies, this program can help cover additional therapy hours not paid by insurance and integrates academics into ABA. Contact us to learn more about eligibility and enrollment.</p>
    </div>

    <!-- CTA -->
    <div style="text-align: center; padding: 20px 0 40px;">
        <h3 style="font-size: 32px; color: var(--text-dark); margin-bottom: 12px; font-family: 'Sour Gummy', sans-serif;">Not sure if your insurance is accepted?</h3>
        <p style="font-size: 20px; color: var(--text-medium); margin-bottom: 24px;">Call us and we'll verify your benefits for free. No obligation.</p>
        <a href="tel:<?php echo esc_attr(str_replace(array(' ','-','.'), '', get_option('abt_phone', '8888301672'))); ?>" class="btn-cta-lg">Call <?php echo esc_html(get_option('abt_phone', '888-830-1672')); ?></a>
    </div>

</div>

<?php get_footer(); ?>
