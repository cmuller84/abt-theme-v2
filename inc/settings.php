<?php
/**
 * ABT Site Settings — admin panel
 * Settings > ABT Site Settings
 */

function abt_register_settings() {
    // Announcement bar
    register_setting('abt_settings', 'abt_announcement', array('default' => '&#127881; Now Open: Powell, Ohio Center!'));
    register_setting('abt_settings', 'abt_phone', array('default' => '888-830-1672'));
    register_setting('abt_settings', 'abt_email', array('default' => 'coordinations@advancedabatherapy.com'));
    
    // Social
    register_setting('abt_settings', 'abt_facebook', array('default' => 'https://facebook.com/advancedbehavioraltherapy/'));
    register_setting('abt_settings', 'abt_linkedin', array('default' => 'https://linkedin.com/company/advanced-behavioral-therapy'));
    register_setting('abt_settings', 'abt_instagram', array('default' => 'https://instagram.com/advancedbehavioraltherapy/'));

    // Hero
    register_setting('abt_settings', 'abt_hero_headline', array('default' => 'Where Your Child Can <span class="advance">Advance</span> <span class="blue">Beyond Your Expectations</span>'));
    register_setting('abt_settings', 'abt_hero_subtext', array('default' => 'BCBA-owned and operated ABA therapy services for children with autism. Home-based, center-based, and early learning center programs in Ohio and New Jersey.'));

    // Webhook
    register_setting('abt_settings', 'abt_webhook_url', array('default' => 'https://squarecloud.app.n8n.cloud/webhook/e6115635-192d-4416-a2ee-7d3e9106fe6f'));

    // GTM
    register_setting('abt_settings', 'abt_gtm_id', array('default' => ''));

    // Testimonials
    register_setting('abt_settings', 'abt_testimonial_1_text');
    register_setting('abt_settings', 'abt_testimonial_1_initials', array('default' => 'JK'));
    register_setting('abt_settings', 'abt_testimonial_1_name', array('default' => 'J.K.'));
    register_setting('abt_settings', 'abt_testimonial_2_text');
    register_setting('abt_settings', 'abt_testimonial_2_initials', array('default' => 'KB'));
    register_setting('abt_settings', 'abt_testimonial_2_name', array('default' => 'K.B.'));

    // Addresses
    register_setting('abt_settings', 'abt_addr_beachwood', array('default' => '23645 Mercantile Road, Beachwood, OH 44122'));
    register_setting('abt_settings', 'abt_addr_powell', array('default' => '10104 Brewster Ln, Powell, OH 43065'));
    register_setting('abt_settings', 'abt_addr_reynoldsburg', array('default' => '6096 E Main St, Suite 106, Columbus, OH 43213'));
    register_setting('abt_settings', 'abt_addr_nj', array('default' => 'Home-Based Services — Toms River & Surrounding Areas'));

    // Images — stored as WordPress attachment IDs
    register_setting('abt_settings', 'abt_img_hero');
    register_setting('abt_settings', 'abt_img_about');
    register_setting('abt_settings', 'abt_img_founder');
    register_setting('abt_settings', 'abt_img_service_home');
    register_setting('abt_settings', 'abt_img_service_center');
    register_setting('abt_settings', 'abt_img_service_elc');
    register_setting('abt_settings', 'abt_img_service_school');
    register_setting('abt_settings', 'abt_img_faq_1a');
    register_setting('abt_settings', 'abt_img_faq_1b');
    register_setting('abt_settings', 'abt_img_faq_2');
    register_setting('abt_settings', 'abt_img_faq_3a');
    register_setting('abt_settings', 'abt_img_faq_3b');
    register_setting('abt_settings', 'abt_img_beachwood_hero');
    register_setting('abt_settings', 'abt_img_powell_hero');
    register_setting('abt_settings', 'abt_img_reynoldsburg_hero');
    register_setting('abt_settings', 'abt_img_nj_hero');
    register_setting('abt_settings', 'abt_img_contact_hero');

    // Canva video URL
    register_setting('abt_settings', 'abt_canva_video_url', array('default' => 'https://www.canva.com/design/DAG-VFwY7wc/fYw-27JBw2d3g9emYxxfzw/watch?embed'));

    // Careers community photos (6 slots for Life at ABT carousel)
    for ($i = 1; $i <= 6; $i++) {
        register_setting('abt_settings', 'abt_img_life_' . $i);
    }

    // Job Postings — individual fields per position
    register_setting('abt_settings', 'abt_jobs_apploi_url', array('default' => 'https://jobs.apploi.com/profile/advanced-behavioral-therapy'));
    for ($i = 1; $i <= 8; $i++) {
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_title');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_type');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_pay');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_loc');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_note');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_links');
    }
    for ($i = 1; $i <= 5; $i++) {
        register_setting('abt_settings', 'abt_job_nj_' . $i . '_title');
        register_setting('abt_settings', 'abt_job_nj_' . $i . '_type');
        register_setting('abt_settings', 'abt_job_nj_' . $i . '_pay');
        register_setting('abt_settings', 'abt_job_nj_' . $i . '_loc');
        register_setting('abt_settings', 'abt_job_nj_' . $i . '_note');
        register_setting('abt_settings', 'abt_job_nj_' . $i . '_links');
    }

    // Staff photos
    register_setting('abt_settings', 'abt_img_staff_joseph');
    register_setting('abt_settings', 'abt_img_staff_avigail');
    register_setting('abt_settings', 'abt_img_staff_samantha');
    register_setting('abt_settings', 'abt_img_staff_kalyn');
    register_setting('abt_settings', 'abt_img_staff_ian');
    register_setting('abt_settings', 'abt_img_staff_sam');
    register_setting('abt_settings', 'abt_img_staff_kaylee');
    register_setting('abt_settings', 'abt_img_staff_adam');
    register_setting('abt_settings', 'abt_img_staff_michelle');
    register_setting('abt_settings', 'abt_img_staff_kathryn');

    // Leadership names/titles (6 slots)
    for ($i = 1; $i <= 6; $i++) {
        register_setting('abt_settings', 'abt_leader_' . $i . '_name');
        register_setting('abt_settings', 'abt_leader_' . $i . '_title');
        register_setting('abt_settings', 'abt_leader_' . $i . '_cred');
        register_setting('abt_settings', 'abt_img_leader_' . $i);
    }

    // Team names/titles (16 slots)
    for ($i = 1; $i <= 16; $i++) {
        register_setting('abt_settings', 'abt_team_' . $i . '_name');
        register_setting('abt_settings', 'abt_team_' . $i . '_title');
        register_setting('abt_settings', 'abt_img_team_' . $i);
    }
}
add_action('admin_init', 'abt_register_settings');

/**
 * Helper: get image URL from setting, with theme fallback
 */
function abt_img($setting_key, $fallback_filename) {
    $attachment_id = get_option('abt_img_' . $setting_key);
    if ($attachment_id) {
        $url = wp_get_attachment_image_url($attachment_id, 'large');
        if ($url) return $url;
    }
    return get_template_directory_uri() . '/assets/images/' . $fallback_filename;
}

function abt_settings_page() {
    add_options_page(
        'ABT Site Settings',
        'ABT Site Settings',
        'manage_options',
        'abt-settings',
        'abt_settings_html'
    );
}
add_action('admin_menu', 'abt_settings_page');

/** Enqueue media uploader on our settings page */
function abt_admin_scripts($hook) {
    if ($hook !== 'settings_page_abt-settings') return;
    wp_enqueue_media();
    wp_enqueue_script('abt-admin', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'abt_admin_scripts');

function abt_settings_html() {
    if (!current_user_can('manage_options')) return;
    ?>
    <div class="wrap">
        <h1>ABT Site Settings</h1>
        <p>Edit these settings to update the website without touching code. Click "Choose Image" to pick from your Media Library.</p>
        <form method="post" action="options.php">
            <?php settings_fields('abt_settings'); ?>
            <table class="form-table">
                <tr><th colspan="2"><h2>Top Bar & Contact</h2></th></tr>
                <tr><th>Announcement Text</th><td><input type="text" name="abt_announcement" value="<?php echo esc_attr(get_option('abt_announcement')); ?>" class="large-text"></td></tr>
                <tr><th>Phone Number</th><td><input type="text" name="abt_phone" value="<?php echo esc_attr(get_option('abt_phone')); ?>" class="regular-text"></td></tr>
                <tr><th>Email Address</th><td><input type="email" name="abt_email" value="<?php echo esc_attr(get_option('abt_email')); ?>" class="regular-text"></td></tr>

                <tr><th colspan="2"><h2>Social Media</h2></th></tr>
                <tr><th>Facebook URL</th><td><input type="url" name="abt_facebook" value="<?php echo esc_attr(get_option('abt_facebook')); ?>" class="large-text"></td></tr>
                <tr><th>LinkedIn URL</th><td><input type="url" name="abt_linkedin" value="<?php echo esc_attr(get_option('abt_linkedin')); ?>" class="large-text"></td></tr>
                <tr><th>Instagram URL</th><td><input type="url" name="abt_instagram" value="<?php echo esc_attr(get_option('abt_instagram')); ?>" class="large-text"></td></tr>

                <tr><th colspan="2"><h2>Hero Section</h2></th></tr>
                <tr><th>Headline (HTML OK)</th><td><textarea name="abt_hero_headline" rows="3" class="large-text"><?php echo esc_textarea(get_option('abt_hero_headline')); ?></textarea></td></tr>
                <tr><th>Subtext</th><td><textarea name="abt_hero_subtext" rows="3" class="large-text"><?php echo esc_textarea(get_option('abt_hero_subtext')); ?></textarea></td></tr>
                <tr><th>Canva Video URL</th><td><input type="url" name="abt_canva_video_url" value="<?php echo esc_attr(get_option('abt_canva_video_url', 'https://www.canva.com/design/DAG-VFwY7wc/fYw-27JBw2d3g9emYxxfzw/watch?embed')); ?>" class="large-text"><p class="description">The embed URL for the homepage video. Must end in /watch?embed</p></td></tr>

                <tr><th colspan="2"><h2>Integrations</h2></th></tr>
                <tr><th>Contact Form Webhook URL</th><td><input type="url" name="abt_webhook_url" value="<?php echo esc_attr(get_option('abt_webhook_url')); ?>" class="large-text"><p class="description">SquareCloud n8n endpoint. Do NOT use the old Pabbly URL.</p></td></tr>
                <tr><th>Google Tag Manager ID</th><td><input type="text" name="abt_gtm_id" value="<?php echo esc_attr(get_option('abt_gtm_id')); ?>" class="regular-text" placeholder="GTM-XXXXXXX"></td></tr>
                <tr><th>ActiveCampaign API URL</th><td><input type="url" name="abt_ac_api_url" value="<?php echo esc_attr(get_option('abt_ac_api_url', 'https://advancedabatherapy.api-us1.com')); ?>" class="large-text"><p class="description">Found in ActiveCampaign → Settings → Developer.</p></td></tr>
                <tr><th>ActiveCampaign API Key</th><td><input type="text" name="abt_ac_api_key" value="<?php echo esc_attr(get_option('abt_ac_api_key')); ?>" class="large-text" placeholder="Paste API key here"><p class="description">Contact and newsletter submissions will sync to ActiveCampaign automatically.</p></td></tr>
                <tr><th>Newsletter Webhook URL</th><td><input type="url" name="abt_newsletter_webhook_url" value="<?php echo esc_attr(get_option('abt_newsletter_webhook_url')); ?>" class="large-text" placeholder="Separate n8n webhook for newsletter signups"><p class="description">From Ben — separate webhook for the footer email signup form. Leave blank to skip n8n for newsletter (AC still works).</p></td></tr>

                <tr><th colspan="2"><h2>Testimonials</h2></th></tr>
                <tr><th>Testimonial 1 Text</th><td><textarea name="abt_testimonial_1_text" rows="3" class="large-text"><?php echo esc_textarea(get_option('abt_testimonial_1_text')); ?></textarea></td></tr>
                <tr><th>Testimonial 1 Initials / Name</th><td><input type="text" name="abt_testimonial_1_initials" value="<?php echo esc_attr(get_option('abt_testimonial_1_initials')); ?>" style="width:60px"> / <input type="text" name="abt_testimonial_1_name" value="<?php echo esc_attr(get_option('abt_testimonial_1_name')); ?>" style="width:120px"></td></tr>
                <tr><th>Testimonial 2 Text</th><td><textarea name="abt_testimonial_2_text" rows="3" class="large-text"><?php echo esc_textarea(get_option('abt_testimonial_2_text')); ?></textarea></td></tr>
                <tr><th>Testimonial 2 Initials / Name</th><td><input type="text" name="abt_testimonial_2_initials" value="<?php echo esc_attr(get_option('abt_testimonial_2_initials')); ?>" style="width:60px"> / <input type="text" name="abt_testimonial_2_name" value="<?php echo esc_attr(get_option('abt_testimonial_2_name')); ?>" style="width:120px"></td></tr>

                <tr><th colspan="2"><h2>Location Addresses</h2></th></tr>
                <tr><th>Beachwood</th><td><input type="text" name="abt_addr_beachwood" value="<?php echo esc_attr(get_option('abt_addr_beachwood')); ?>" class="large-text"></td></tr>
                <tr><th>Powell</th><td><input type="text" name="abt_addr_powell" value="<?php echo esc_attr(get_option('abt_addr_powell')); ?>" class="large-text"></td></tr>
                <tr><th>Reynoldsburg</th><td><input type="text" name="abt_addr_reynoldsburg" value="<?php echo esc_attr(get_option('abt_addr_reynoldsburg')); ?>" class="large-text"></td></tr>
                <tr><th>New Jersey</th><td><input type="text" name="abt_addr_nj" value="<?php echo esc_attr(get_option('abt_addr_nj')); ?>" class="large-text"></td></tr>

                <tr><th colspan="2"><h2>Site Images</h2><p class="description">Click "Choose Image" to pick from your Media Library. Leave blank to use the default theme image.</p></th></tr>
                <?php
                $image_fields = array(
                    'hero'              => 'Homepage — Hero Image',
                    'founder'           => 'About Us — Founder Letter Photo (Avigail)',
                    'about'             => 'About Us — Our Story Image',
                    'service_home'      => 'Services — Home-Based',
                    'service_center'    => 'Services — Center-Based',
                    'service_elc'       => 'Services — Early Learning Centers',
                    'service_school'    => 'Services — School Support',
                    'beachwood_hero'    => 'Beachwood — Hero/First Carousel Photo',
                    'powell_hero'       => 'Powell — Hero/First Carousel Photo',
                    'reynoldsburg_hero' => 'Reynoldsburg — Hero/First Carousel Photo',
                    'nj_hero'           => 'New Jersey — Hero Photo',
                    'contact_hero'      => 'Contact Page — Sidebar Image',
                    'faq_1a'            => 'FAQ — Image Break 1 (Left)',
                    'faq_1b'            => 'FAQ — Image Break 1 (Right)',
                    'faq_2'             => 'FAQ — Image Break 2 (Full Width)',
                    'faq_3a'            => 'FAQ — Image Break 3 (Left)',
                    'faq_3b'            => 'FAQ — Image Break 3 (Right)',
                    'life_1'            => 'Careers — Life at ABT Photo 1',
                    'life_2'            => 'Careers — Life at ABT Photo 2',
                    'life_3'            => 'Careers — Life at ABT Photo 3',
                    'life_4'            => 'Careers — Life at ABT Photo 4',
                    'life_5'            => 'Careers — Life at ABT Photo 5',
                    'life_6'            => 'Careers — Life at ABT Photo 6',
                );
                foreach ($image_fields as $key => $label):
                    $val = get_option('abt_img_' . $key);
                    $img_url = $val ? wp_get_attachment_image_url($val, 'thumbnail') : '';
                ?>
                <tr>
                    <th><?php echo esc_html($label); ?></th>
                    <td>
                        <div class="abt-image-picker" data-field="abt_img_<?php echo esc_attr($key); ?>">
                            <input type="hidden" name="abt_img_<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($val); ?>">
                            <img src="<?php echo esc_url($img_url); ?>" style="max-width:200px;max-height:120px;display:<?php echo $img_url ? 'block' : 'none'; ?>;margin-bottom:8px;border-radius:8px;">
                            <button type="button" class="button abt-choose-image">Choose Image</button>
                            <button type="button" class="button abt-remove-image" style="display:<?php echo $val ? 'inline-block' : 'none'; ?>">Remove</button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>

                <tr><th colspan="2"><h2>Job Postings (Careers Page)</h2><p class="description">Manage the open positions shown on the Careers page. Each row = one position card. Add location-specific Apploi links separated by commas (format: <code>Label|URL, Label|URL</code>). Leave Title blank to hide a slot.</p></th></tr>
                <tr><th>Apploi Profile URL</th><td><input type="url" name="abt_jobs_apploi_url" value="<?php echo esc_attr(get_option('abt_jobs_apploi_url', 'https://jobs.apploi.com/profile/advanced-behavioral-therapy')); ?>" class="large-text"><p class="description">"View All Open Positions" link at the bottom of the careers page.</p></td></tr>

                <tr><th colspan="2" style="padding-top: 20px;"><h3 style="color: #1B4B8A;">Ohio Positions</h3></th></tr>
                <?php
                $oh_defaults = array(
                    1 => array('title' => 'ABA Therapist / Behavior Technician', 'type' => 'Full-Time / Part-Time', 'pay' => '$17-$19/hr', 'loc' => 'Multiple OH Locations', 'note' => 'No certification required — free RBT training provided, raise upon certification', 'links' => 'Powell|https://jobs.apploi.com/view/1729206, Reynoldsburg|https://jobs.apploi.com/view/1729217, South Euclid|https://jobs.apploi.com/view/1745563, Parma Heights|https://jobs.apploi.com/view/1745568, Grove City|https://jobs.apploi.com/view/1745571, Akron|https://jobs.apploi.com/view/1745680'),
                    2 => array('title' => 'Registered Behavior Technician (RBT)', 'type' => 'Full-Time / Part-Time', 'pay' => '$19-$24/hr', 'loc' => 'Beachwood, OH', 'note' => 'Performance-based raises every 6 months', 'links' => 'Apply|https://jobs.apploi.com/view/1729523'),
                    3 => array('title' => 'BCBA — Center-Based', 'type' => 'Full-Time', 'pay' => '$82K-$90K/yr', 'loc' => 'Beachwood, OH', 'note' => '', 'links' => 'Apply|https://jobs.apploi.com/view/1718531'),
                    4 => array('title' => 'BCBA — Hybrid / Home-Based', 'type' => 'Full-Time', 'pay' => '$75K-$110K/yr', 'loc' => 'Ohio', 'note' => '$65-$72/hr billable + $25/hr non-billable', 'links' => 'South Euclid|https://jobs.apploi.com/view/1732059, Grove City|https://jobs.apploi.com/view/1745574, Remote|https://jobs.apploi.com/view/1741753'),
                    5 => array('title' => 'Lead BCBA', 'type' => 'Full-Time', 'pay' => 'Competitive', 'loc' => 'Columbus, OH', 'note' => '', 'links' => 'Apply|https://jobs.apploi.com/view/1736739'),
                    6 => array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => ''),
                    7 => array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => ''),
                    8 => array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => ''),
                );
                for ($i = 1; $i <= 8; $i++):
                    $def = $oh_defaults[$i];
                    $title = get_option('abt_job_oh_' . $i . '_title', $def['title']);
                    $type = get_option('abt_job_oh_' . $i . '_type', $def['type']);
                    $pay = get_option('abt_job_oh_' . $i . '_pay', $def['pay']);
                    $loc = get_option('abt_job_oh_' . $i . '_loc', $def['loc']);
                    $note = get_option('abt_job_oh_' . $i . '_note', $def['note']);
                    $links = get_option('abt_job_oh_' . $i . '_links', $def['links']);
                ?>
                <tr style="border-top: 2px solid #ddd; <?php echo $title ? '' : 'opacity: 0.5;'; ?>">
                    <th>OH Position <?php echo $i; ?></th>
                    <td>
                        <p><label>Title: <input type="text" name="abt_job_oh_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" class="regular-text" placeholder="e.g. ABA Therapist"></label></p>
                        <p style="display: flex; gap: 12px; flex-wrap: wrap;">
                            <label>Type: <input type="text" name="abt_job_oh_<?php echo $i; ?>_type" value="<?php echo esc_attr($type); ?>" style="width:180px;" placeholder="Full-Time / Part-Time"></label>
                            <label>Pay: <input type="text" name="abt_job_oh_<?php echo $i; ?>_pay" value="<?php echo esc_attr($pay); ?>" style="width:140px;" placeholder="$19-$24/hr"></label>
                            <label>Location: <input type="text" name="abt_job_oh_<?php echo $i; ?>_loc" value="<?php echo esc_attr($loc); ?>" style="width:200px;" placeholder="Beachwood, OH"></label>
                        </p>
                        <p><label>Note: <input type="text" name="abt_job_oh_<?php echo $i; ?>_note" value="<?php echo esc_attr($note); ?>" class="large-text" placeholder="Optional note (e.g. free RBT training provided)"></label></p>
                        <p><label>Apply Links: <input type="text" name="abt_job_oh_<?php echo $i; ?>_links" value="<?php echo esc_attr($links); ?>" class="large-text" placeholder="Label|URL, Label|URL (e.g. Powell|https://jobs.apploi.com/view/123)"></label></p>
                    </td>
                </tr>
                <?php endfor; ?>

                <tr><th colspan="2" style="padding-top: 20px;"><h3 style="color: #1B4B8A;">New Jersey Positions</h3></th></tr>
                <?php
                $nj_defaults = array(
                    1 => array('title' => 'ABA Therapist / Behavior Technician', 'type' => 'Full-Time / Part-Time', 'pay' => '$24-$30/hr', 'loc' => 'Multiple NJ Locations', 'note' => 'No certification required — free RBT training provided', 'links' => 'Fair Lawn|https://jobs.apploi.com/view/1736706, Berkeley Twp|https://jobs.apploi.com/view/1736709, Stafford Twp|https://jobs.apploi.com/view/1736713'),
                    2 => array('title' => 'BCBA — Hybrid', 'type' => 'Full-Time', 'pay' => 'Competitive', 'loc' => 'New Jersey', 'note' => '', 'links' => 'Plainfield|https://jobs.apploi.com/view/1745575, Trenton|https://jobs.apploi.com/view/1745569'),
                    3 => array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => ''),
                    4 => array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => ''),
                    5 => array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => ''),
                );
                for ($i = 1; $i <= 5; $i++):
                    $def = $nj_defaults[$i];
                    $title = get_option('abt_job_nj_' . $i . '_title', $def['title']);
                    $type = get_option('abt_job_nj_' . $i . '_type', $def['type']);
                    $pay = get_option('abt_job_nj_' . $i . '_pay', $def['pay']);
                    $loc = get_option('abt_job_nj_' . $i . '_loc', $def['loc']);
                    $note = get_option('abt_job_nj_' . $i . '_note', $def['note']);
                    $links = get_option('abt_job_nj_' . $i . '_links', $def['links']);
                ?>
                <tr style="border-top: 2px solid #ddd; <?php echo $title ? '' : 'opacity: 0.5;'; ?>">
                    <th>NJ Position <?php echo $i; ?></th>
                    <td>
                        <p><label>Title: <input type="text" name="abt_job_nj_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" class="regular-text" placeholder="e.g. ABA Therapist"></label></p>
                        <p style="display: flex; gap: 12px; flex-wrap: wrap;">
                            <label>Type: <input type="text" name="abt_job_nj_<?php echo $i; ?>_type" value="<?php echo esc_attr($type); ?>" style="width:180px;" placeholder="Full-Time / Part-Time"></label>
                            <label>Pay: <input type="text" name="abt_job_nj_<?php echo $i; ?>_pay" value="<?php echo esc_attr($pay); ?>" style="width:140px;" placeholder="$24-$30/hr"></label>
                            <label>Location: <input type="text" name="abt_job_nj_<?php echo $i; ?>_loc" value="<?php echo esc_attr($loc); ?>" style="width:200px;" placeholder="Toms River, NJ"></label>
                        </p>
                        <p><label>Note: <input type="text" name="abt_job_nj_<?php echo $i; ?>_note" value="<?php echo esc_attr($note); ?>" class="large-text" placeholder="Optional note"></label></p>
                        <p><label>Apply Links: <input type="text" name="abt_job_nj_<?php echo $i; ?>_links" value="<?php echo esc_attr($links); ?>" class="large-text" placeholder="Label|URL, Label|URL"></label></p>
                    </td>
                </tr>
                <?php endfor; ?>

                <tr><th colspan="2"><h2>Leadership Team</h2><p class="description">Edit the leadership grid on the About Us page. Leave Name blank to hide a slot.</p></th></tr>
                <?php
                $leader_defaults = array(
                    1 => array('name' => 'Joseph Kemmoun', 'title' => 'President & Founder', 'cred' => ''),
                    2 => array('name' => 'Avigail Kemmoun', 'title' => 'Chief Clinical Officer & Founder', 'cred' => 'MS, BCBA, COBA'),
                    3 => array('name' => 'Shaya Brezak', 'title' => 'Vice President of Business Operations', 'cred' => ''),
                    4 => array('name' => '', 'title' => '', 'cred' => ''),
                    5 => array('name' => '', 'title' => '', 'cred' => ''),
                    6 => array('name' => '', 'title' => '', 'cred' => ''),
                );
                for ($i = 1; $i <= 6; $i++):
                    $def = $leader_defaults[$i];
                    $name = get_option('abt_leader_' . $i . '_name', $def['name']);
                    $title = get_option('abt_leader_' . $i . '_title', $def['title']);
                    $cred = get_option('abt_leader_' . $i . '_cred', $def['cred']);
                    $photo_id = get_option('abt_img_leader_' . $i);
                    $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'thumbnail') : '';
                ?>
                <tr style="border-top: 2px solid #ddd;">
                    <th>Leader <?php echo $i; ?></th>
                    <td>
                        <p><label>Name: <input type="text" name="abt_leader_<?php echo $i; ?>_name" value="<?php echo esc_attr($name); ?>" class="regular-text"></label></p>
                        <p><label>Title: <input type="text" name="abt_leader_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" class="regular-text"></label></p>
                        <p><label>Credentials: <input type="text" name="abt_leader_<?php echo $i; ?>_cred" value="<?php echo esc_attr($cred); ?>" class="regular-text" placeholder="e.g. MS, BCBA"></label></p>
                        <div class="abt-image-picker" data-field="abt_img_leader_<?php echo $i; ?>">
                            <input type="hidden" name="abt_img_leader_<?php echo $i; ?>" value="<?php echo esc_attr($photo_id); ?>">
                            <img src="<?php echo esc_url($photo_url); ?>" style="max-width:100px;max-height:100px;display:<?php echo $photo_url ? 'block' : 'none'; ?>;margin-bottom:8px;border-radius:50%;">
                            <button type="button" class="button abt-choose-image">Choose Photo</button>
                            <button type="button" class="button abt-remove-image" style="display:<?php echo $photo_id ? 'inline-block' : 'none'; ?>">Remove</button>
                        </div>
                    </td>
                </tr>
                <?php endfor; ?>

                <tr><th colspan="2"><h2>Meet Our Team</h2><p class="description">Edit the team grid on the About Us page. Leave Name blank to hide a slot.</p></th></tr>
                <?php
                $team_defaults = array(
                    1 => array('name' => 'Samantha Brown', 'title' => 'NJ & Columbus Home Regional Coordinator'),
                    2 => array('name' => 'Kalyn Craven', 'title' => 'Cleveland Home & ELC Coordinator'),
                    3 => array('name' => 'Sam Banks', 'title' => 'Center Director, Reynoldsburg & Worthington'),
                    4 => array('name' => 'Kaylee Simmons', 'title' => 'Recruiter'),
                    5 => array('name' => 'Adam Ivancic', 'title' => 'Senior Recruiter'),
                    6 => array('name' => 'Michelle Menuez', 'title' => 'Reynoldsburg Center Operations Coordinator'),
                    7 => array('name' => 'Kathryn Zielinski', 'title' => 'Worthington Center Operations Coordinator'),
                    8 => array('name' => 'Rachel Levin', 'title' => 'Chief of Staff'),
                    9 => array('name' => 'Kasey Leech', 'title' => 'Assistant Clinical Director'),
                    10 => array('name' => 'Phil Gallo', 'title' => 'Regional Centers Manager'),
                    11 => array('name' => '', 'title' => ''),
                    12 => array('name' => '', 'title' => ''),
                    13 => array('name' => '', 'title' => ''),
                    14 => array('name' => '', 'title' => ''),
                    15 => array('name' => '', 'title' => ''),
                    16 => array('name' => '', 'title' => ''),
                );
                for ($i = 1; $i <= 16; $i++):
                    $def = $team_defaults[$i];
                    $name = get_option('abt_team_' . $i . '_name', $def['name']);
                    $title = get_option('abt_team_' . $i . '_title', $def['title']);
                    $photo_id = get_option('abt_img_team_' . $i);
                    $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'thumbnail') : '';
                ?>
                <tr style="border-top: 2px solid #ddd;">
                    <th>Team <?php echo $i; ?></th>
                    <td>
                        <p><label>Name: <input type="text" name="abt_team_<?php echo $i; ?>_name" value="<?php echo esc_attr($name); ?>" class="regular-text"></label></p>
                        <p><label>Title: <input type="text" name="abt_team_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" class="regular-text"></label></p>
                        <div class="abt-image-picker" data-field="abt_img_team_<?php echo $i; ?>">
                            <input type="hidden" name="abt_img_team_<?php echo $i; ?>" value="<?php echo esc_attr($photo_id); ?>">
                            <img src="<?php echo esc_url($photo_url); ?>" style="max-width:100px;max-height:100px;display:<?php echo $photo_url ? 'block' : 'none'; ?>;margin-bottom:8px;border-radius:50%;">
                            <button type="button" class="button abt-choose-image">Choose Photo</button>
                            <button type="button" class="button abt-remove-image" style="display:<?php echo $photo_id ? 'inline-block' : 'none'; ?>">Remove</button>
                        </div>
                    </td>
                </tr>
                <?php endfor; ?>

            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
