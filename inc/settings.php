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

    // Location carousel photos (12 slots per location)
    $loc_slugs = array('beachwood', 'powell', 'reynoldsburg', 'nj');
    foreach ($loc_slugs as $ls) {
        for ($i = 1; $i <= 12; $i++) {
            register_setting('abt_settings', 'abt_img_' . $ls . '_photo_' . $i);
        }
    }

    // Canva video URL
    register_setting('abt_settings', 'abt_canva_video_url', array('default' => 'https://www.canva.com/design/DAG-VFwY7wc/fYw-27JBw2d3g9emYxxfzw/watch?embed'));

    // Careers community photos (12 slots for Life at ABT carousel)
    for ($i = 1; $i <= 12; $i++) {
        register_setting('abt_settings', 'abt_img_life_' . $i);
    }

    // Job Postings — individual fields per position
    register_setting('abt_settings', 'abt_jobs_apploi_url', array('default' => 'https://jobs.apploi.com/profile/advanced-behavioral-therapy'));
    for ($i = 1; $i <= 10; $i++) {
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_title');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_type');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_pay');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_loc');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_note');
        register_setting('abt_settings', 'abt_job_oh_' . $i . '_links');
    }
    for ($i = 1; $i <= 8; $i++) {
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

    // Leadership names/titles (10 slots)
    for ($i = 1; $i <= 10; $i++) {
        register_setting('abt_settings', 'abt_leader_' . $i . '_name');
        register_setting('abt_settings', 'abt_leader_' . $i . '_title');
        register_setting('abt_settings', 'abt_leader_' . $i . '_cred');
        register_setting('abt_settings', 'abt_img_leader_' . $i);
    }

    // Team names/titles (24 slots)
    for ($i = 1; $i <= 24; $i++) {
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
    <style>
    .abt-accordion { border: 1px solid #c3c4c7; border-radius: 4px; margin-bottom: 12px; background: #fff; }
    .abt-accordion-header { display: flex; align-items: center; justify-content: space-between; padding: 14px 20px; cursor: pointer; background: #f6f7f7; border-bottom: 1px solid #c3c4c7; user-select: none; }
    .abt-accordion-header:hover { background: #eef0f4; }
    .abt-accordion-header h2 { margin: 0; font-size: 16px; color: #1B4B8A; }
    .abt-accordion-header .abt-badge { background: #1B4B8A; color: #fff; font-size: 11px; padding: 2px 8px; border-radius: 10px; margin-left: 8px; }
    .abt-accordion-header .dashicons { transition: transform 0.2s; color: #666; }
    .abt-accordion.open .abt-accordion-header .dashicons { transform: rotate(180deg); }
    .abt-accordion-body { display: none; padding: 16px 20px; }
    .abt-accordion.open .abt-accordion-body { display: block; }
    .abt-accordion.open .abt-accordion-header { border-bottom: 1px solid #c3c4c7; }
    .abt-accordion:not(.open) .abt-accordion-header { border-bottom: none; }
    .abt-img-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 16px; }
    .abt-img-grid .abt-image-picker { background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; padding: 12px; text-align: center; }
    .abt-img-grid .abt-image-picker img { max-width: 160px; max-height: 100px; border-radius: 6px; margin-bottom: 8px; }
    .abt-img-grid .abt-image-picker .abt-img-label { font-size: 12px; color: #666; margin-bottom: 6px; display: block; }
    .abt-team-card { background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; padding: 16px; display: flex; gap: 16px; align-items: flex-start; margin-bottom: 10px; }
    .abt-team-card.empty { opacity: 0.5; }
    .abt-team-card .abt-image-picker img { border-radius: 50%; }
    .abt-team-card .abt-fields { flex: 1; }
    .abt-team-card .abt-fields input { width: 100%; margin-bottom: 6px; }
    .abt-job-card { background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin-bottom: 10px; }
    .abt-job-card.empty { opacity: 0.5; }
    .abt-job-card .abt-job-row { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 6px; }
    </style>
    <div class="wrap">
        <h1 style="margin-bottom: 4px;">ABT Site Settings</h1>
        <p style="color:#666; margin-top:0;">Click a section to expand it. All changes are saved together with the Save button at the bottom.</p>
        <form method="post" action="options.php">
            <?php settings_fields('abt_settings'); ?>

            <!-- 1. General -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-admin-settings"></span> General Settings</h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <table class="form-table">
                        <tr><th>Announcement Text</th><td><input type="text" name="abt_announcement" value="<?php echo esc_attr(get_option('abt_announcement')); ?>" class="large-text"></td></tr>
                        <tr><th>Phone Number</th><td><input type="text" name="abt_phone" value="<?php echo esc_attr(get_option('abt_phone')); ?>" class="regular-text"></td></tr>
                        <tr><th>Email Address</th><td><input type="email" name="abt_email" value="<?php echo esc_attr(get_option('abt_email')); ?>" class="regular-text"></td></tr>
                        <tr><th>Facebook URL</th><td><input type="url" name="abt_facebook" value="<?php echo esc_attr(get_option('abt_facebook')); ?>" class="large-text"></td></tr>
                        <tr><th>LinkedIn URL</th><td><input type="url" name="abt_linkedin" value="<?php echo esc_attr(get_option('abt_linkedin')); ?>" class="large-text"></td></tr>
                        <tr><th>Instagram URL</th><td><input type="url" name="abt_instagram" value="<?php echo esc_attr(get_option('abt_instagram')); ?>" class="large-text"></td></tr>
                        <tr><th>Hero Headline (HTML OK)</th><td><textarea name="abt_hero_headline" rows="2" class="large-text"><?php echo esc_textarea(get_option('abt_hero_headline')); ?></textarea></td></tr>
                        <tr><th>Hero Subtext</th><td><textarea name="abt_hero_subtext" rows="2" class="large-text"><?php echo esc_textarea(get_option('abt_hero_subtext')); ?></textarea></td></tr>
                        <tr><th>Canva Video URL</th><td><input type="url" name="abt_canva_video_url" value="<?php echo esc_attr(get_option('abt_canva_video_url', 'https://www.canva.com/design/DAG-VFwY7wc/fYw-27JBw2d3g9emYxxfzw/watch?embed')); ?>" class="large-text"></td></tr>
                        <tr><th>Testimonial 1 Text</th><td><textarea name="abt_testimonial_1_text" rows="2" class="large-text"><?php echo esc_textarea(get_option('abt_testimonial_1_text')); ?></textarea></td></tr>
                        <tr><th>Testimonial 1 Initials / Name</th><td><input type="text" name="abt_testimonial_1_initials" value="<?php echo esc_attr(get_option('abt_testimonial_1_initials')); ?>" style="width:60px"> / <input type="text" name="abt_testimonial_1_name" value="<?php echo esc_attr(get_option('abt_testimonial_1_name')); ?>" style="width:120px"></td></tr>
                        <tr><th>Testimonial 2 Text</th><td><textarea name="abt_testimonial_2_text" rows="2" class="large-text"><?php echo esc_textarea(get_option('abt_testimonial_2_text')); ?></textarea></td></tr>
                        <tr><th>Testimonial 2 Initials / Name</th><td><input type="text" name="abt_testimonial_2_initials" value="<?php echo esc_attr(get_option('abt_testimonial_2_initials')); ?>" style="width:60px"> / <input type="text" name="abt_testimonial_2_name" value="<?php echo esc_attr(get_option('abt_testimonial_2_name')); ?>" style="width:120px"></td></tr>
                    </table>
                </div>
            </div>

            <!-- 2. Integrations -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-admin-plugins"></span> Integrations &amp; Webhooks</h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <table class="form-table">
                        <tr><th>Contact Form Webhook</th><td><input type="url" name="abt_webhook_url" value="<?php echo esc_attr(get_option('abt_webhook_url')); ?>" class="large-text"><p class="description">SquareCloud n8n endpoint.</p></td></tr>
                        <tr><th>Newsletter Webhook</th><td><input type="url" name="abt_newsletter_webhook_url" value="<?php echo esc_attr(get_option('abt_newsletter_webhook_url')); ?>" class="large-text"><p class="description">Separate n8n webhook for footer email signup. Leave blank to skip.</p></td></tr>
                        <tr><th>GTM ID</th><td><input type="text" name="abt_gtm_id" value="<?php echo esc_attr(get_option('abt_gtm_id')); ?>" class="regular-text" placeholder="GTM-XXXXXXX"></td></tr>
                        <tr><th>ActiveCampaign API URL</th><td><input type="url" name="abt_ac_api_url" value="<?php echo esc_attr(get_option('abt_ac_api_url', 'https://advancedabatherapy.api-us1.com')); ?>" class="large-text"></td></tr>
                        <tr><th>ActiveCampaign API Key</th><td><input type="text" name="abt_ac_api_key" value="<?php echo esc_attr(get_option('abt_ac_api_key')); ?>" class="large-text" placeholder="Paste API key"></td></tr>
                    </table>
                </div>
            </div>

            <!-- 3. Locations -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-location"></span> Location Addresses</h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <table class="form-table">
                        <tr><th>Beachwood</th><td><input type="text" name="abt_addr_beachwood" value="<?php echo esc_attr(get_option('abt_addr_beachwood')); ?>" class="large-text"></td></tr>
                        <tr><th>Powell</th><td><input type="text" name="abt_addr_powell" value="<?php echo esc_attr(get_option('abt_addr_powell')); ?>" class="large-text"></td></tr>
                        <tr><th>Reynoldsburg</th><td><input type="text" name="abt_addr_reynoldsburg" value="<?php echo esc_attr(get_option('abt_addr_reynoldsburg')); ?>" class="large-text"></td></tr>
                        <tr><th>New Jersey</th><td><input type="text" name="abt_addr_nj" value="<?php echo esc_attr(get_option('abt_addr_nj')); ?>" class="large-text"></td></tr>
                    </table>
                </div>
            </div>

            <!-- 4. Site Images -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-format-image"></span> Site Images</h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <p class="description" style="margin-bottom:16px;">Click "Choose Image" to pick from your Media Library. Leave blank to use the default.</p>
                    <div class="abt-img-grid">
                    <?php
                    $image_fields = array(
                        'hero' => 'Hero Image', 'founder' => 'Founder Photo', 'about' => 'Our Story',
                        'service_home' => 'Service: Home', 'service_center' => 'Service: Center', 'service_elc' => 'Service: ELC', 'service_school' => 'Service: School',
                        'beachwood_hero' => 'Beachwood Hero', 'powell_hero' => 'Powell Hero', 'reynoldsburg_hero' => 'Reynoldsburg Hero', 'nj_hero' => 'NJ Hero', 'contact_hero' => 'Contact Sidebar',
                        'faq_1a' => 'FAQ 1 Left', 'faq_1b' => 'FAQ 1 Right', 'faq_2' => 'FAQ 2 Full', 'faq_3a' => 'FAQ 3 Left', 'faq_3b' => 'FAQ 3 Right',
                    );
                    foreach ($image_fields as $key => $label):
                        $val = get_option('abt_img_' . $key);
                        $img_url = $val ? wp_get_attachment_image_url($val, 'thumbnail') : '';
                    ?>
                    <div class="abt-image-picker" data-field="abt_img_<?php echo esc_attr($key); ?>">
                        <span class="abt-img-label"><?php echo esc_html($label); ?></span>
                        <input type="hidden" name="abt_img_<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($val); ?>">
                        <img src="<?php echo esc_url($img_url); ?>" style="display:<?php echo $img_url ? 'block' : 'none'; ?>">
                        <button type="button" class="button button-small abt-choose-image">Choose</button>
                        <button type="button" class="button button-small abt-remove-image" style="display:<?php echo $val ? 'inline-block' : 'none'; ?>">Remove</button>
                    </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- 5. Life at ABT Photos -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-camera"></span> Life at ABT Photos <span class="abt-badge">12 slots</span></h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <p class="description" style="margin-bottom:16px;">Careers page "Life at ABT" carousel. Leave blank to use defaults.</p>
                    <div class="abt-img-grid">
                    <?php for ($i = 1; $i <= 12; $i++):
                        $val = get_option('abt_img_life_' . $i);
                        $img_url = $val ? wp_get_attachment_image_url($val, 'thumbnail') : '';
                    ?>
                    <div class="abt-image-picker" data-field="abt_img_life_<?php echo $i; ?>">
                        <span class="abt-img-label">Photo <?php echo $i; ?></span>
                        <input type="hidden" name="abt_img_life_<?php echo $i; ?>" value="<?php echo esc_attr($val); ?>">
                        <img src="<?php echo esc_url($img_url); ?>" style="display:<?php echo $img_url ? 'block' : 'none'; ?>">
                        <button type="button" class="button button-small abt-choose-image">Choose</button>
                        <button type="button" class="button button-small abt-remove-image" style="display:<?php echo $val ? 'inline-block' : 'none'; ?>">Remove</button>
                    </div>
                    <?php endfor; ?>
                    </div>
                </div>
            </div>

            <!-- 6. Location Carousel Photos -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-images-alt2"></span> Location Carousel Photos <span class="abt-badge">12 per location</span></h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <p class="description" style="margin-bottom:16px;">Landscape photos look best (16:10 ratio). Leave blank to use defaults. Photos display in order.</p>
                    <?php
                    $carousel_locations = array('beachwood' => 'Beachwood', 'powell' => 'Powell', 'reynoldsburg' => 'Reynoldsburg', 'nj' => 'New Jersey');
                    foreach ($carousel_locations as $loc_key => $loc_name): ?>
                    <h3 style="color:#1B4B8A; margin: 20px 0 10px;"><?php echo esc_html($loc_name); ?></h3>
                    <div class="abt-img-grid">
                    <?php for ($ci = 1; $ci <= 12; $ci++):
                        $ck = $loc_key . '_photo_' . $ci;
                        $cv = get_option('abt_img_' . $ck);
                        $cu = $cv ? wp_get_attachment_image_url($cv, 'thumbnail') : '';
                    ?>
                    <div class="abt-image-picker" data-field="abt_img_<?php echo esc_attr($ck); ?>">
                        <span class="abt-img-label"><?php echo $ci; ?></span>
                        <input type="hidden" name="abt_img_<?php echo esc_attr($ck); ?>" value="<?php echo esc_attr($cv); ?>">
                        <img src="<?php echo esc_url($cu); ?>" style="display:<?php echo $cu ? 'block' : 'none'; ?>">
                        <button type="button" class="button button-small abt-choose-image">Choose</button>
                        <button type="button" class="button button-small abt-remove-image" style="display:<?php echo $cv ? 'inline-block' : 'none'; ?>">Remove</button>
                    </div>
                    <?php endfor; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 7. Job Postings -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-megaphone"></span> Job Postings <span class="abt-badge">OH: 10 &bull; NJ: 8</span></h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <table class="form-table" style="margin-bottom:0;">
                        <tr><th>Apploi Profile URL</th><td><input type="url" name="abt_jobs_apploi_url" value="<?php echo esc_attr(get_option('abt_jobs_apploi_url', 'https://jobs.apploi.com/profile/advanced-behavioral-therapy')); ?>" class="large-text"></td></tr>
                    </table>
                    <h3 style="color:#1B4B8A; margin: 20px 0 10px;">Ohio Positions</h3>
                    <?php
                    $oh_defaults = array(
                        1 => array('title'=>'ABA Therapist / Behavior Technician','type'=>'Full-Time / Part-Time','pay'=>'$17-$19/hr','loc'=>'Multiple OH Locations','note'=>'No certification required — free RBT training provided, raise upon certification','links'=>'Powell|https://jobs.apploi.com/view/1729206, Reynoldsburg|https://jobs.apploi.com/view/1729217, South Euclid|https://jobs.apploi.com/view/1745563, Parma Heights|https://jobs.apploi.com/view/1745568, Grove City|https://jobs.apploi.com/view/1745571, Akron|https://jobs.apploi.com/view/1745680'),
                        2 => array('title'=>'Registered Behavior Technician (RBT)','type'=>'Full-Time / Part-Time','pay'=>'$19-$24/hr','loc'=>'Beachwood, OH','note'=>'Performance-based raises every 6 months','links'=>'Apply|https://jobs.apploi.com/view/1729523'),
                        3 => array('title'=>'BCBA — Center-Based','type'=>'Full-Time','pay'=>'$82K-$90K/yr','loc'=>'Beachwood, OH','note'=>'','links'=>'Apply|https://jobs.apploi.com/view/1718531'),
                        4 => array('title'=>'BCBA — Hybrid / Home-Based','type'=>'Full-Time','pay'=>'$75K-$110K/yr','loc'=>'Ohio','note'=>'$65-$72/hr billable + $25/hr non-billable','links'=>'South Euclid|https://jobs.apploi.com/view/1732059, Grove City|https://jobs.apploi.com/view/1745574, Remote|https://jobs.apploi.com/view/1741753'),
                        5 => array('title'=>'Lead BCBA','type'=>'Full-Time','pay'=>'Competitive','loc'=>'Columbus, OH','note'=>'','links'=>'Apply|https://jobs.apploi.com/view/1736739'),
                    );
                    for ($i = 1; $i <= 10; $i++):
                        $def = isset($oh_defaults[$i]) ? $oh_defaults[$i] : array('title'=>'','type'=>'','pay'=>'','loc'=>'','note'=>'','links'=>'');
                        $title = get_option('abt_job_oh_'.$i.'_title', $def['title']);
                        $type = get_option('abt_job_oh_'.$i.'_type', $def['type']);
                        $pay = get_option('abt_job_oh_'.$i.'_pay', $def['pay']);
                        $loc = get_option('abt_job_oh_'.$i.'_loc', $def['loc']);
                        $note = get_option('abt_job_oh_'.$i.'_note', $def['note']);
                        $links = get_option('abt_job_oh_'.$i.'_links', $def['links']);
                    ?>
                    <div class="abt-job-card <?php echo $title ? '' : 'empty'; ?>">
                        <strong>OH #<?php echo $i; ?></strong>
                        <div class="abt-job-row"><input type="text" name="abt_job_oh_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" class="regular-text" placeholder="Job Title"></div>
                        <div class="abt-job-row">
                            <input type="text" name="abt_job_oh_<?php echo $i; ?>_type" value="<?php echo esc_attr($type); ?>" style="width:170px;" placeholder="Type">
                            <input type="text" name="abt_job_oh_<?php echo $i; ?>_pay" value="<?php echo esc_attr($pay); ?>" style="width:130px;" placeholder="Pay">
                            <input type="text" name="abt_job_oh_<?php echo $i; ?>_loc" value="<?php echo esc_attr($loc); ?>" style="width:190px;" placeholder="Location">
                        </div>
                        <div class="abt-job-row"><input type="text" name="abt_job_oh_<?php echo $i; ?>_note" value="<?php echo esc_attr($note); ?>" class="large-text" placeholder="Note (optional)"></div>
                        <div class="abt-job-row"><input type="text" name="abt_job_oh_<?php echo $i; ?>_links" value="<?php echo esc_attr($links); ?>" class="large-text" placeholder="Label|URL, Label|URL"></div>
                    </div>
                    <?php endfor; ?>

                    <h3 style="color:#1B4B8A; margin: 20px 0 10px;">New Jersey Positions</h3>
                    <?php
                    $nj_defaults = array(
                        1 => array('title'=>'ABA Therapist / Behavior Technician','type'=>'Full-Time / Part-Time','pay'=>'$24-$30/hr','loc'=>'Multiple NJ Locations','note'=>'No certification required — free RBT training provided','links'=>'Fair Lawn|https://jobs.apploi.com/view/1736706, Berkeley Twp|https://jobs.apploi.com/view/1736709, Stafford Twp|https://jobs.apploi.com/view/1736713'),
                        2 => array('title'=>'BCBA — Hybrid','type'=>'Full-Time','pay'=>'Competitive','loc'=>'New Jersey','note'=>'','links'=>'Plainfield|https://jobs.apploi.com/view/1745575, Trenton|https://jobs.apploi.com/view/1745569'),
                    );
                    for ($i = 1; $i <= 8; $i++):
                        $def = isset($nj_defaults[$i]) ? $nj_defaults[$i] : array('title'=>'','type'=>'','pay'=>'','loc'=>'','note'=>'','links'=>'');
                        $title = get_option('abt_job_nj_'.$i.'_title', $def['title']);
                        $type = get_option('abt_job_nj_'.$i.'_type', $def['type']);
                        $pay = get_option('abt_job_nj_'.$i.'_pay', $def['pay']);
                        $loc = get_option('abt_job_nj_'.$i.'_loc', $def['loc']);
                        $note = get_option('abt_job_nj_'.$i.'_note', $def['note']);
                        $links = get_option('abt_job_nj_'.$i.'_links', $def['links']);
                    ?>
                    <div class="abt-job-card <?php echo $title ? '' : 'empty'; ?>">
                        <strong>NJ #<?php echo $i; ?></strong>
                        <div class="abt-job-row"><input type="text" name="abt_job_nj_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" class="regular-text" placeholder="Job Title"></div>
                        <div class="abt-job-row">
                            <input type="text" name="abt_job_nj_<?php echo $i; ?>_type" value="<?php echo esc_attr($type); ?>" style="width:170px;" placeholder="Type">
                            <input type="text" name="abt_job_nj_<?php echo $i; ?>_pay" value="<?php echo esc_attr($pay); ?>" style="width:130px;" placeholder="Pay">
                            <input type="text" name="abt_job_nj_<?php echo $i; ?>_loc" value="<?php echo esc_attr($loc); ?>" style="width:190px;" placeholder="Location">
                        </div>
                        <div class="abt-job-row"><input type="text" name="abt_job_nj_<?php echo $i; ?>_note" value="<?php echo esc_attr($note); ?>" class="large-text" placeholder="Note (optional)"></div>
                        <div class="abt-job-row"><input type="text" name="abt_job_nj_<?php echo $i; ?>_links" value="<?php echo esc_attr($links); ?>" class="large-text" placeholder="Label|URL, Label|URL"></div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- 8. Leadership Team -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-groups"></span> Leadership Team <span class="abt-badge">10 slots</span></h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <p class="description" style="margin-bottom:16px;">Leave Name blank to hide a slot.</p>
                    <?php
                    $leader_defaults = array(
                        1 => array('name'=>'Joseph Kemmoun','title'=>'President & Founder','cred'=>''),
                        2 => array('name'=>'Avigail Kemmoun','title'=>'Chief Clinical Officer & Founder','cred'=>'MS, BCBA, COBA'),
                        3 => array('name'=>'Shaya Brezak','title'=>'Vice President of Business Operations','cred'=>''),
                    );
                    for ($i = 1; $i <= 10; $i++):
                        $def = isset($leader_defaults[$i]) ? $leader_defaults[$i] : array('name'=>'','title'=>'','cred'=>'');
                        $name = get_option('abt_leader_'.$i.'_name', $def['name']);
                        $title = get_option('abt_leader_'.$i.'_title', $def['title']);
                        $cred = get_option('abt_leader_'.$i.'_cred', $def['cred']);
                        $photo_id = get_option('abt_img_leader_'.$i);
                        $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'thumbnail') : '';
                    ?>
                    <div class="abt-team-card <?php echo $name ? '' : 'empty'; ?>">
                        <div class="abt-image-picker" data-field="abt_img_leader_<?php echo $i; ?>" style="min-width:90px;">
                            <input type="hidden" name="abt_img_leader_<?php echo $i; ?>" value="<?php echo esc_attr($photo_id); ?>">
                            <img src="<?php echo esc_url($photo_url); ?>" style="width:70px;height:70px;display:<?php echo $photo_url ? 'block' : 'none'; ?>;margin-bottom:6px;border-radius:50%;object-fit:cover;">
                            <button type="button" class="button button-small abt-choose-image">Photo</button>
                            <button type="button" class="button button-small abt-remove-image" style="display:<?php echo $photo_id ? 'inline-block' : 'none'; ?>">X</button>
                        </div>
                        <div class="abt-fields">
                            <input type="text" name="abt_leader_<?php echo $i; ?>_name" value="<?php echo esc_attr($name); ?>" placeholder="Name">
                            <input type="text" name="abt_leader_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" placeholder="Title">
                            <input type="text" name="abt_leader_<?php echo $i; ?>_cred" value="<?php echo esc_attr($cred); ?>" placeholder="Credentials (e.g. MS, BCBA)">
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- 9. Meet Our Team -->
            <div class="abt-accordion">
                <div class="abt-accordion-header" onclick="abtToggle(this)">
                    <h2><span class="dashicons dashicons-buddicons-buddypress-logo"></span> Meet Our Team <span class="abt-badge">24 slots</span></h2>
                    <span class="dashicons dashicons-arrow-down-alt2"></span>
                </div>
                <div class="abt-accordion-body">
                    <p class="description" style="margin-bottom:16px;">Order: Directors first, then Ops Coordinators, then Admin Staff. Leave Name blank to hide a slot.</p>
                    <?php
                    $team_defaults = array(
                        1=>array('name'=>'Sam Banks','title'=>'Reynoldsburg Center Director'),
                        2=>array('name'=>'Ryley Bushong','title'=>'Powell Center Director'),
                        3=>array('name'=>'Samantha Brown','title'=>'NJ & Columbus Home Regional Coordinator'),
                        4=>array('name'=>'Kasey Leech','title'=>'Assistant Clinical Director'),
                        5=>array('name'=>'Jodi Ussery','title'=>'Assistant Clinical Director, NJ'),
                        6=>array('name'=>'Michelle Menuez','title'=>'Reynoldsburg Center Operations Coordinator'),
                        7=>array('name'=>'Kathryn Zielinski','title'=>'Worthington Center Operations Coordinator'),
                        8=>array('name'=>'Phil Gallo','title'=>'Regional Centers Manager'),
                        9=>array('name'=>'Kalyn Craven','title'=>'Cleveland Home & ELC Coordinator'),
                        10=>array('name'=>'Kaylee Simmons','title'=>'Recruiter'),
                        11=>array('name'=>'Adam Ivancic','title'=>'Senior Recruiter'),
                        12=>array('name'=>'Rachel Levin','title'=>'Chief of Staff'),
                    );
                    for ($i = 1; $i <= 24; $i++):
                        $def = isset($team_defaults[$i]) ? $team_defaults[$i] : array('name'=>'','title'=>'');
                        $name = get_option('abt_team_'.$i.'_name', $def['name']);
                        $title = get_option('abt_team_'.$i.'_title', $def['title']);
                        $photo_id = get_option('abt_img_team_'.$i);
                        $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'thumbnail') : '';
                    ?>
                    <div class="abt-team-card <?php echo $name ? '' : 'empty'; ?>">
                        <div class="abt-image-picker" data-field="abt_img_team_<?php echo $i; ?>" style="min-width:90px;">
                            <input type="hidden" name="abt_img_team_<?php echo $i; ?>" value="<?php echo esc_attr($photo_id); ?>">
                            <img src="<?php echo esc_url($photo_url); ?>" style="width:70px;height:70px;display:<?php echo $photo_url ? 'block' : 'none'; ?>;margin-bottom:6px;border-radius:50%;object-fit:cover;">
                            <button type="button" class="button button-small abt-choose-image">Photo</button>
                            <button type="button" class="button button-small abt-remove-image" style="display:<?php echo $photo_id ? 'inline-block' : 'none'; ?>">X</button>
                        </div>
                        <div class="abt-fields">
                            <input type="text" name="abt_team_<?php echo $i; ?>_name" value="<?php echo esc_attr($name); ?>" placeholder="Name">
                            <input type="text" name="abt_team_<?php echo $i; ?>_title" value="<?php echo esc_attr($title); ?>" placeholder="Title">
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>

            <?php submit_button('Save All Settings'); ?>
        </form>
    </div>
    <script>
    function abtToggle(header) {
        var acc = header.parentElement;
        acc.classList.toggle('open');
        // Save state to localStorage
        var states = JSON.parse(localStorage.getItem('abt_accordion_states') || '{}');
        var idx = Array.from(document.querySelectorAll('.abt-accordion')).indexOf(acc);
        states[idx] = acc.classList.contains('open');
        localStorage.setItem('abt_accordion_states', JSON.stringify(states));
    }
    // Restore accordion states on load
    (function() {
        var states = JSON.parse(localStorage.getItem('abt_accordion_states') || '{}');
        document.querySelectorAll('.abt-accordion').forEach(function(acc, idx) {
            if (states[idx]) acc.classList.add('open');
        });
    })();
    </script>
    <?php
}
