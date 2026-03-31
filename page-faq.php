<?php
/**
 * Template Name: FAQ
 * Version: 2.2.0
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>Frequently Asked Questions</h1>
    <p>Everything you need to know about ABA therapy and getting started with ABT.</p>
</section>

<div class="faq-section" style="background: var(--white);">

    <!-- About ABA -->
    <div class="faq-group">
        <h2 class="faq-group-title">About ABA Therapy</h2>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">What is ABA? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>ABA stands for Applied Behavior Analysis. It is the most widely recognized and evidence-based treatment for children with autism spectrum disorder (ASD). ABA therapy uses systematic techniques to improve social interactions, communication, daily living skills, and reduce challenging behaviors.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Who can benefit from ABA therapy? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>ABA therapy can benefit children of all ages diagnosed with autism spectrum disorder. Whether your child is verbal or nonverbal, has mild or significant challenges, ABA can be tailored to their specific needs. We serve children ages 1-12.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">What does a typical ABA session look like? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>ABA sessions involve one-on-one therapy between your child and a trained behavior therapist (RBT). Sessions include structured activities, play-based learning, and natural environment teaching. A Board Certified Behavior Analyst (BCBA) designs and oversees the individualized treatment plan.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How many hours of therapy will my child need? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>The recommended therapy hours vary based on your child's assessment. Typically, children receive between 10-40 hours per week. Your BCBA will recommend the appropriate number after a comprehensive assessment.</p></div></div>
    </div>

    <!-- Image break -->
    <div class="faq-image-break">
        <img src="<?php echo esc_url(abt_img('faq_1a', 'faq-highfive-tokens.jpg')); ?>" alt="ABA therapy playroom at ABT Beachwood">
        <img src="<?php echo esc_url(abt_img('faq_1b', 'faq-girl-painting.jpg')); ?>" alt="Beachwood center">
    </div>

    <!-- Getting Started -->
    <div class="faq-group">
        <h2 class="faq-group-title">Getting Started</h2>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How do I get the ABA therapy process started? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>Simply call us at <?php echo esc_html(get_option('abt_phone', '888-830-1672')); ?> or fill out the enrollment form on our Contact page. Our intake team will respond immediately with next steps, verify your insurance, and schedule an initial assessment.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">What insurance do you accept? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>We accept most major insurance plans including Aetna, Anthem BCBS, UnitedHealthcare, Cigna, Buckeye Health Plan, CareSource, AmeriHealth, Medical Mutual, Molina, and more. We also accept the Ohio Autism Scholarship Program (ASP). Contact us to verify your specific plan.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Is there a waitlist? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>We pride ourselves on minimal wait times. In most cases, we can begin the intake process within days and start therapy shortly after the assessment is completed.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Where can my child receive therapy? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>We offer therapy at home, at our centers in Beachwood, Powell, or Reynoldsburg Ohio, in early learning centers and daycares, and through school support programs. We also provide home-based services in the Toms River, New Jersey area.</p></div></div>
    </div>

    <!-- Image break full width -->
    <div class="faq-image-break full-width">
        <img src="<?php echo esc_url(abt_img('faq_2', 'child-reading-book.jpg')); ?>" alt="ABT therapy center">
    </div>

    <!-- Parent Involvement -->
    <div class="faq-group">
        <h2 class="faq-group-title">Parent &amp; Family Involvement</h2>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How often do parents receive training? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>Parents and caregivers receive training at 10% of the number of therapy hours their child is approved for. For example, 20 hours of therapy = 2 hours of parent training per week.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Can parents observe therapy sessions? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>Yes! Parent involvement is encouraged. For home-based therapy, you can observe and participate. For center-based therapy, we welcome parent visits and maintain open communication.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How will I know my child is making progress? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>Your BCBA provides regular progress reports and data-driven updates. Parent conferences are held regularly to discuss progress, adjust goals, and celebrate achievements.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Does ABT offer other services like speech therapy, OT, and social work? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>Yes, we collaborate with many professionals and have different kinds of therapists on our team to provide a holistic approach to your child's development.</p></div></div>
    </div>

    <!-- Image break -->
    <div class="faq-image-break">
        <img src="<?php echo esc_url(abt_img('faq_3a', 'faq-toddler-rings.jpg')); ?>" alt="Therapy room">
        <img src="<?php echo esc_url(abt_img('faq_3b', 'child-dinosaur-puzzle.jpg')); ?>" alt="Learning area">
    </div>

    <!-- About ABT -->
    <div class="faq-group">
        <h2 class="faq-group-title">About Advanced Behavioral Therapy</h2>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">What makes ABT different from other ABA providers? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>ABT is BCBA-owned and operated, meaning clinical decisions are made by Board Certified Behavior Analysts &mdash; not corporate administrators. Our founder, Avigail Kemmoun, MS BCBA, built this company with a commitment to clinical excellence and individualized care.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How are your therapists trained? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>All therapists are Registered Behavior Technicians (RBTs) who undergo extensive training and ongoing supervision by our BCBAs. We also offer a free BCBA Mentorship Program for staff pursuing their BCBA certification.</p></div></div>
        <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">What ages do you serve? <span class="faq-toggle">+</span></div><div class="faq-answer"><p>We serve children ages 1 through 12, with specialized programs for early intervention and school-age support.</p></div></div>
    </div>

</div>

<?php get_footer(); ?>
