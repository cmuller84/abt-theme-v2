<?php
/**
 * Template Name: Our Services
 * Version: 2.3.0
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>Our ABA Therapy Services</h1>
    <p>Personalized, evidence-based programs in the setting that works best for your family.</p>
</section>

<!-- Home-Based -->
<section id="home" style="padding: 80px 0; background-image: linear-gradient(rgba(255,255,255,0.78), rgba(255,255,255,0.78)), url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div>
            <span style="display: inline-block; background: var(--primary-blue); color: #fff; font-size: 13px; font-weight: 700; padding: 6px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px;">Home-Based</span>
            <h2 style="font-size: 34px; color: var(--accent-red); margin-bottom: 16px;">Home-Based ABA Therapy</h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">One-on-one therapy in the comfort and familiarity of your own home. For many families, this is the ideal setting &mdash; children learn best in environments they already feel safe in.</p>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 24px;">Your child's BCBA will design a customized treatment plan, and a dedicated RBT will deliver therapy sessions focused on communication, social skills, daily living skills, and reducing challenging behaviors.</p>
            <p style="font-size: 18px; color: var(--text-dark); font-weight: 600;">Available in: Ohio (statewide) &amp; New Jersey (Toms River area)</p>
        </div>
        <div><img src="<?php echo esc_url(abt_img('service_home', 'service-home-based.jpg')); ?>" alt="Home-based ABA therapy" style="width: 100%; border-radius: 24px; box-shadow: 0 16px 40px rgba(27,75,138,0.15);"></div>
    </div>
</section>

<!-- Center-Based -->
<section id="center" style="padding: 80px 0; background: var(--bg-cream);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div><img src="<?php echo esc_url($img . 'reynoldsburg-wide-gym.jpg'); ?>" alt="ABT Center — gym with slide, climbing wall, and mural" style="width: 100%; border-radius: 24px; box-shadow: 0 16px 40px rgba(27,75,138,0.15);"></div>
        <div>
            <span style="display: inline-block; background: var(--accent-red); color: #fff; font-size: 13px; font-weight: 700; padding: 6px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px;">Center-Based</span>
            <h2 style="font-size: 34px; color: var(--primary-blue); margin-bottom: 16px;">Center-Based ABA Therapy</h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">Our state-of-the-art centers provide structured learning environments with built-in opportunities for socialization and group activities. Centers are designed specifically for children with autism &mdash; sensory-friendly spaces, therapy rooms, and play areas.</p>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 24px;">Center-based programs offer peer interaction, which is critical for developing social skills in a supported, supervised setting.</p>
            <p style="font-size: 18px; color: var(--text-dark); font-weight: 600;">Centers in: Beachwood, Powell, &amp; Reynoldsburg, Ohio</p>
        </div>
    </div>
</section>

<!-- Early Learning Centers -->
<section id="elc" style="padding: 80px 0; background-image: linear-gradient(rgba(255,255,255,0.78), rgba(255,255,255,0.78)), url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div>
            <span style="display: inline-block; background: #2e7d32; color: #fff; font-size: 13px; font-weight: 700; padding: 6px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px;">Early Learning Centers</span>
            <h2 style="font-size: 34px; color: var(--accent-yellow); margin-bottom: 16px;">ABA in Daycare &amp; Learning Centers</h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">For children ages 2-6, we bring ABA therapy directly into daycare and early learning settings. This allows your child to receive therapy while participating alongside their peers in a natural learning environment.</p>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 24px;">Our therapists collaborate with daycare staff to embed behavioral strategies throughout the day, supporting your child's development during critical early years.</p>
            <p style="font-size: 18px; color: var(--text-dark); font-weight: 600;">Ages 2-6 &bull; Available in Ohio</p>
        </div>
        <div><img src="<?php echo esc_url($img . 'powell-art-room.jpg'); ?>" alt="ABT early learning — art room with kids tables" style="width: 100%; border-radius: 24px; box-shadow: 0 16px 40px rgba(27,75,138,0.15);"></div>
    </div>
</section>

<!-- School Support -->
<section id="school" style="padding: 80px 0; background: var(--bg-cream);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div><img src="<?php echo esc_url($img . 'powell-reading-nook.jpg'); ?>" alt="ABT reading nook with stuffed animals and alphabet poster" style="width: 100%; border-radius: 24px; box-shadow: 0 16px 40px rgba(27,75,138,0.15);"></div>
        <div>
            <span style="display: inline-block; background: var(--accent-yellow); color: var(--text-dark); font-size: 13px; font-weight: 700; padding: 6px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px;">School Support</span>
            <h2 style="font-size: 34px; color: var(--accent-red); margin-bottom: 16px;">School-Based Support</h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">We provide support in educational settings through IEP collaboration, positive behavioral interventions, and direct therapy during the school day. Our team works alongside teachers and school staff to create a consistent approach.</p>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9;">School-based services help children generalize skills learned in therapy into academic and social environments.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
