<?php
/**
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
$phone = get_option('abt_phone', '888-830-1672');
$email = get_option('abt_email', 'coordinations@advancedabatherapy.com');
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>Contact Us</h1>
    <p>Ready to get started? Reach out and our team will respond right away.</p>
</section>

<section style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; background-color: rgba(248,250,252,0.96);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">

        <!-- Contact Form -->
        <div>
            <h2 style="font-size: 28px; color: var(--accent-red); margin-bottom: 8px;">Enroll Your Child Today</h2>
            <p style="font-size: 17px; color: var(--text-medium); margin-bottom: 32px; line-height: 1.7;">Fill out the form below and a member of our intake team will reach out to you within one business day.</p>

            <form id="abtContactForm" class="contact-form">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div>
                        <label for="cf-first">First Name *</label>
                        <input type="text" id="cf-first" name="first_name" required placeholder="First name">
                    </div>
                    <div>
                        <label for="cf-last">Last Name *</label>
                        <input type="text" id="cf-last" name="last_name" required placeholder="Last name">
                    </div>
                </div>

                <label for="cf-phone">Phone *</label>
                <input type="tel" id="cf-phone" name="phone" required placeholder="(555) 555-5555">

                <label for="cf-email">Email *</label>
                <input type="email" id="cf-email" name="email" required placeholder="you@email.com">

                <label for="cf-location">Location *</label>
                <select id="cf-location" name="location" required style="background: var(--white);">
                    <option value="" disabled selected>Select a location...</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="Cleveland, OH Home Based">Cleveland, OH Home Based</option>
                    <option value="Beachwood, OH Center Based">Beachwood, OH Center Based</option>
                    <option value="Columbus, OH Home Based">Columbus, OH Home Based</option>
                    <option value="Columbus, OH Center Based">Columbus, OH Center Based</option>
                    <option value="Reynoldsburg, OH">Reynoldsburg, OH</option>
                    <option value="Employment">Employment</option>
                </select>

                <label for="cf-message">How Can We Help?</label>
                <textarea id="cf-message" name="message" rows="4" placeholder="Tell us about your child and what you're looking for..."></textarea>

                <label for="cf-time">Best Time to Reach You</label>
                <select id="cf-time" name="best_time" style="background: var(--white);">
                    <option value="" disabled selected>Select...</option>
                    <option value="Morning (8-12)">Morning (8-12)</option>
                    <option value="Afternoon (12-3)">Afternoon (12-3)</option>
                    <option value="Evening (3-6)">Evening (3-6)</option>
                </select>

                <button type="submit" class="btn-cta" style="width: 100%; justify-content: center; padding: 16px; font-size: 17px; margin-top: 8px;">Submit &rarr;</button>
                <div id="formStatus" class="form-status"></div>
            </form>
        </div>

        <!-- Contact Info Sidebar -->
        <div>
            <div style="background: var(--white); border-radius: 20px; padding: 36px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); margin-bottom: 24px;">
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 20px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Get In Touch</h3>
                <div style="margin-bottom: 20px;">
                    <p style="font-weight: 600; font-size: 16px; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Phone</p>
                    <a href="tel:<?php echo esc_attr(str_replace(array(' ','-','.','(',')'), '', $phone)); ?>" style="font-size: 16px; color: var(--primary-blue); font-weight: 700; text-decoration: none;"><?php echo esc_html($phone); ?></a>
                </div>
                <div style="margin-bottom: 20px;">
                    <p style="font-weight: 600; font-size: 16px; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Email</p>
                    <a href="mailto:<?php echo esc_attr($email); ?>" style="font-size: 16px; color: var(--primary-blue); text-decoration: none;"><?php echo esc_html($email); ?></a>
                </div>
                <div>
                    <p style="font-weight: 600; font-size: 16px; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Hours</p>
                    <p style="font-size: 16px; color: var(--text-dark);">Monday &ndash; Friday: 9:00 AM &ndash; 5:00 PM</p>
                </div>
            </div>

            <!-- Location Cards -->
            <?php
            $locations = array(
                array('name' => 'Beachwood, Ohio', 'addr' => get_option('abt_addr_beachwood', '23645 Mercantile Road, Beachwood, OH 44122'), 'type' => 'Center &amp; Home-Based', 'phone' => '216-508-0222'),
                array('name' => 'Powell, Ohio', 'addr' => get_option('abt_addr_powell', '10104 Brewster Ln, Suite 100, Powell, OH 43065'), 'type' => 'Center &amp; Home-Based', 'phone' => '(614) 654-6912'),
                array('name' => 'Reynoldsburg, Ohio', 'addr' => get_option('abt_addr_reynoldsburg', '6096 E Main St, Suite 106, Columbus, OH 43213'), 'type' => 'Center &amp; Home-Based', 'phone' => '614-604-9096'),
                array('name' => 'New Jersey', 'addr' => get_option('abt_addr_nj', 'Toms River & Surrounding Areas'), 'type' => 'Home-Based'),
            );
            foreach ($locations as $loc): ?>
            <div style="background: var(--white); border-radius: 16px; padding: 24px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); margin-bottom: 16px; border-left: 4px solid var(--primary-blue);">
                <h4 style="font-size: 17px; color: var(--text-dark); margin-bottom: 4px; font-family: 'DM Sans', sans-serif; font-weight: 700;">&#128205; <?php echo esc_html($loc['name']); ?></h4>
                <p style="font-size: 16px; color: var(--text-medium); margin-bottom: 4px;"><?php echo esc_html($loc['addr']); ?></p>
                <p style="font-size: 13px; color: var(--primary-blue); font-weight: 600;"><?php echo $loc['type']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
