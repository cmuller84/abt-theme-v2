<?php
/**
 * ABT Theme v2 — Functions
 */

define('ABT_THEME_VERSION', '2.2.0');
define('ABT_THEME_URI', get_template_directory_uri());
define('ABT_THEME_DIR', get_template_directory());

/* -------------------------------------------
   Theme Setup
   ------------------------------------------- */
function abt_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 55,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => 'Primary Navigation',
    ));
}
add_action('after_setup_theme', 'abt_setup');

/* -------------------------------------------
   Enqueue Styles & Scripts
   ------------------------------------------- */
function abt_enqueue() {
    // Google Fonts — preconnect
    wp_enqueue_style('abt-google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
    
    // Google Fonts
    wp_enqueue_style(
        'abt-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&family=Sour+Gummy:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Theme stylesheet
    wp_enqueue_style('abt-style', get_stylesheet_uri(), array('abt-google-fonts'), ABT_THEME_VERSION);

    // Theme JS
    wp_enqueue_script('abt-main-js', ABT_THEME_URI . '/assets/js/main.js', array(), ABT_THEME_VERSION, true);

    // Pass theme settings to JS
    wp_localize_script('abt-main-js', 'abtSettings', array(
        'webhookUrl' => get_option('abt_webhook_url', 'https://squarecloud.app.n8n.cloud/webhook/e6115635-192d-4416-a2ee-7d3e9106fe6f'),
        'ajaxUrl'    => admin_url('admin-ajax.php'),
        'nonce'      => wp_create_nonce('abt_form_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'abt_enqueue');

/* -------------------------------------------
   Settings Panel — Settings > ABT Site Settings
   ------------------------------------------- */
require_once ABT_THEME_DIR . '/inc/settings.php';

/* -------------------------------------------
   Helper: Get ABT Setting
   ------------------------------------------- */
function abt_get($key, $default = '') {
    return get_option('abt_' . $key, $default);
}

/* -------------------------------------------
   Helper: Pattern background URL as CSS var
   ------------------------------------------- */
function abt_pattern_bg_style() {
    $url = ABT_THEME_URI . '/assets/images/abt-pattern-light.jpg';
    return 'style="--pattern-url: url(' . esc_url($url) . '); background-image: linear-gradient(rgba(255,255,255,0.78), rgba(255,255,255,0.78)), var(--pattern-url); background-size: cover; background-position: center;"';
}

/* -------------------------------------------
   Excerpt Length
   ------------------------------------------- */
function abt_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'abt_excerpt_length');

/* -------------------------------------------
   One-Time SEOPress Setup — runs on theme switch
   ------------------------------------------- */
function abt_seopress_setup() {
    if (get_option('abt_seo_v2_done')) return;

    $pages_seo = array(
        'home' => array('ABA Therapy for Children with Autism | Advanced Behavioral Therapy', 'BCBA-owned and operated ABA therapy in Ohio & New Jersey. Home-based, center-based, and early learning center programs. Call 888-830-1672.'),
        'about-us' => array('About Us | Advanced Behavioral Therapy', 'Founded by Avigail Kemmoun, MS BCBA. Learn about our BCBA-owned ABA therapy company serving families across Ohio and New Jersey.'),
        'our-services' => array('ABA Therapy Services | Home, Center, School & ELC', 'Personalized ABA therapy delivered at home, in our centers, in schools, and in early learning settings. Ages 1-12. Ohio & New Jersey.'),
        'faq' => array('Frequently Asked Questions | Advanced Behavioral Therapy', 'Answers to common questions about ABA therapy, insurance, getting started, and what to expect at Advanced Behavioral Therapy.'),
        'contact-us' => array('Contact Us | Start ABA Therapy Today', 'Ready to start ABA therapy? Contact Advanced Behavioral Therapy. Call 888-830-1672 or fill out our enrollment form.'),
        'careers' => array('ABA Therapy Careers | RBT & BCBA Jobs', 'Join ABT - free BCBA supervision, competitive pay, university partnerships. RBT and BCBA positions in Ohio. Apply today.'),
        'insurance' => array('Insurance Accepted | Advanced Behavioral Therapy', 'We accept most major insurance including Aetna, Anthem BCBS, UHC, Cigna, Buckeye, CareSource, and more. Ohio ASP accepted.'),
        'beachwood-ohio' => array('ABA Therapy in Beachwood Ohio | Advanced Behavioral Therapy', 'Center-based and home-based ABA therapy at our Beachwood, Ohio location. 23645 Mercantile Road. Call 888-830-1672.'),
        'powell-ohio' => array('ABA Therapy in Powell Ohio | Now Open | Advanced Behavioral Therapy', 'Now open! Center-based and home-based ABA therapy in Powell, Ohio. 10104 Brewster Ln. Call 888-830-1672.'),
        'reynoldsburg-ohio' => array('ABA Therapy in Reynoldsburg Ohio | Advanced Behavioral Therapy', 'Center-based and home-based ABA therapy in Reynoldsburg, Ohio. 6096 E Main St. Call 888-830-1672.'),
        'new-jersey' => array('ABA Therapy in New Jersey | Home-Based Services', 'Home-based ABA therapy in Toms River and surrounding Ocean County areas. BCBA-owned and operated. Call 888-830-1672.'),
        'university-partnerships' => array('University Partnerships | Free BCBA Supervision | ABT Careers', 'Free BCBA supervision hours and tuition discounts at partner universities. Start your path to BCBA certification with ABT.'),
        'our-locations' => array('ABA Therapy Locations | Ohio & New Jersey | Advanced Behavioral Therapy', 'Centers in Beachwood, Powell, and Reynoldsburg Ohio plus home-based services in New Jersey. Find an ABT location near you.'),
    );

    foreach ($pages_seo as $slug => $seo) {
        $page_id = ($slug === 'home') ? get_option('page_on_front') : (($p = get_page_by_path($slug)) ? $p->ID : 0);
        if ($page_id) {
            update_post_meta($page_id, '_seopress_titles_title', $seo[0]);
            update_post_meta($page_id, '_seopress_titles_desc', $seo[1]);
        }
    }

    $opts = get_option('seopress_titles_option_name', array());
    $opts['seopress_titles_sep'] = '|';
    update_option('seopress_titles_option_name', $opts);
    update_option('abt_seo_v2_done', true);
}
add_action('after_switch_theme', 'abt_seopress_setup');
add_action('init', 'abt_seopress_setup');

/* ============================================
   ActiveCampaign + n8n Form Handler
   ============================================ */
function abt_register_ac_settings() {
    register_setting('abt_settings', 'abt_ac_api_url', array('default' => 'https://advancedabatherapy.api-us1.com'));
    register_setting('abt_settings', 'abt_ac_api_key', array('default' => ''));
    register_setting('abt_settings', 'abt_newsletter_webhook_url', array('default' => ''));
}
add_action('admin_init', 'abt_register_ac_settings');

/** AJAX handler: receives form, sends to n8n + ActiveCampaign */
function abt_form_submit() {
    $data = json_decode(file_get_contents('php://input'), true);

    // Verify nonce to prevent CSRF
    $nonce = isset($data['_nonce']) ? $data['_nonce'] : '';
    if (!wp_verify_nonce($nonce, 'abt_form_nonce')) {
        wp_send_json_error('Security check failed. Please refresh the page and try again.', 403);
    }

    // Normalize email field — JS sends 'Email' or 'email' depending on form
    $email = '';
    if (!empty($data['email'])) $email = $data['email'];
    elseif (!empty($data['Email'])) $email = $data['Email'];

    if (empty($email)) {
        wp_send_json_error('Email required', 400);
    }

    $source = isset($data['source']) ? $data['source'] : 'website';
    $is_newsletter = ($source === 'newsletter');

    // Normalize all field names (contact form sends capitalized keys)
    $first = '';
    if (!empty($data['First Name'])) $first = $data['First Name'];
    elseif (!empty($data['first_name'])) $first = $data['first_name'];

    $last = '';
    if (!empty($data['Last Name'])) $last = $data['Last Name'];
    elseif (!empty($data['last_name'])) $last = $data['last_name'];

    $phone = '';
    if (!empty($data['Phone'])) $phone = $data['Phone'];
    elseif (!empty($data['phone'])) $phone = $data['phone'];

    $location = '';
    if (!empty($data['Location:'])) $location = $data['Location:'];
    elseif (!empty($data['location'])) $location = $data['location'];

    $message = '';
    if (!empty($data['How can we help?'])) $message = $data['How can we help?'];
    elseif (!empty($data['message'])) $message = $data['message'];

    $best_time = '';
    if (!empty($data['Best time to reach you'])) $best_time = $data['Best time to reach you'];
    elseif (!empty($data['best_time'])) $best_time = $data['best_time'];

    // For newsletter, split name if provided
    $name = isset($data['name']) ? $data['name'] : trim($first . ' ' . $last);
    if (empty($first) && !empty($name)) {
        $parts = explode(' ', $name, 2);
        $first = $parts[0];
        $last  = isset($parts[1]) ? $parts[1] : '';
    }

    // Choose the right webhook
    $contact_webhook = get_option('abt_webhook_url', 'https://squarecloud.app.n8n.cloud/webhook/e6115635-192d-4416-a2ee-7d3e9106fe6f');
    $newsletter_webhook = get_option('abt_newsletter_webhook_url', 'https://squarecloud.app.n8n.cloud/webhook/0f673819-1e53-4109-b9b6-498ab682a8a4');

    $webhook_url = $is_newsletter ? $newsletter_webhook : $contact_webhook;

    // 1. Send to n8n webhook
    if (!empty($webhook_url)) {
        $webhook_data = array(
            'First Name'             => $first,
            'Last Name'              => $last,
            'Email'                  => $email,
            'Phone'                  => $phone,
            'Location:'              => $location,
            'How can we help?'       => $message,
            'Best time to reach you' => $best_time,
            'source'                 => $source,
        );

        wp_remote_post($webhook_url, array(
            'headers' => array('Content-Type' => 'application/json'),
            'body'    => wp_json_encode($webhook_data),
            'timeout' => 10,
        ));
    }

    // 2. Send to ActiveCampaign
    $ac_url = get_option('abt_ac_api_url', 'https://advancedabatherapy.api-us1.com');
    $ac_key = get_option('abt_ac_api_key', '');

    // 2. Send to ActiveCampaign
    if (!empty($ac_key)) {
        $contact_body = array(
            'contact' => array(
                'email'     => sanitize_email($email),
                'firstName' => sanitize_text_field($first),
                'lastName'  => sanitize_text_field($last),
                'phone'     => sanitize_text_field($phone),
            ),
        );

        // Sync contact (create or update)
        $ac_response = wp_remote_post($ac_url . '/api/3/contact/sync', array(
            'headers' => array(
                'Content-Type' => 'application/json',
                'Api-Token'    => $ac_key,
            ),
            'body'    => wp_json_encode($contact_body),
            'timeout' => 10,
        ));

        // Tag the contact with the source
        if (!is_wp_error($ac_response)) {
            $ac_body = json_decode(wp_remote_retrieve_body($ac_response), true);
            $contact_id = isset($ac_body['contact']['id']) ? $ac_body['contact']['id'] : null;

            if ($contact_id && !empty($source)) {
                // Create tag if needed, then apply
                $tag_response = wp_remote_post($ac_url . '/api/3/tags', array(
                    'headers' => array(
                        'Content-Type' => 'application/json',
                        'Api-Token'    => $ac_key,
                    ),
                    'body' => wp_json_encode(array('tag' => array(
                        'tag'     => $source,
                        'tagType' => 'contact',
                    ))),
                    'timeout' => 10,
                ));
                $tag_body = json_decode(wp_remote_retrieve_body($tag_response), true);
                $tag_id = isset($tag_body['tag']['id']) ? $tag_body['tag']['id'] : null;

                // If tag already exists, search for it
                if (!$tag_id) {
                    $search = wp_remote_get($ac_url . '/api/3/tags?search=' . urlencode($source), array(
                        'headers' => array('Api-Token' => $ac_key),
                        'timeout' => 10,
                    ));
                    $search_body = json_decode(wp_remote_retrieve_body($search), true);
                    if (!empty($search_body['tags'][0]['id'])) {
                        $tag_id = $search_body['tags'][0]['id'];
                    }
                }

                if ($tag_id) {
                    wp_remote_post($ac_url . '/api/3/contactTags', array(
                        'headers' => array(
                            'Content-Type' => 'application/json',
                            'Api-Token'    => $ac_key,
                        ),
                        'body' => wp_json_encode(array('contactTag' => array(
                            'contact' => $contact_id,
                            'tag'     => $tag_id,
                        ))),
                        'timeout' => 10,
                    ));
                }
            }
        }
    }

    wp_send_json_success('OK');
}
add_action('wp_ajax_abt_form_submit', 'abt_form_submit');
add_action('wp_ajax_nopriv_abt_form_submit', 'abt_form_submit');

/** Pass AJAX URL to frontend */
function abt_localize_ajax() {
    wp_localize_script('abt-main-js', 'abtAjax', array(
        'url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'abt_localize_ajax', 20);
