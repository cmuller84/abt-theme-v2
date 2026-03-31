<?php
/**
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>Careers at ABT</h1>
    <p>Join a BCBA-owned team that invests in your growth and your clients' success.</p>
</section>

<!-- Why ABT -->
<section style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Why Work at ABT?</h2>
            <p>We're not just a workplace &mdash; we're a team that grows together.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="font-size: 20px; margin-bottom: 16px;">&#127891;</div>
                <h3 style="font-size: 19px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Free BCBA Supervision</h3>
                <p style="font-size: 16px; color: var(--text-medium); line-height: 1.7;">Both restricted and unrestricted supervision hours &mdash; completely free. We invest in your path to becoming a BCBA.</p>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="font-size: 20px; margin-bottom: 16px;">&#128176;</div>
                <h3 style="font-size: 19px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Competitive Pay</h3>
                <p style="font-size: 16px; color: var(--text-medium); line-height: 1.7;">RBTs: $19-$24/hr (OH) / $24-$30/hr (NJ). BCBAs: $75K-$110K/yr. Plus performance-based raises every 6 months.</p>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="font-size: 20px; margin-bottom: 16px;">&#127758;</div>
                <h3 style="font-size: 19px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;">University Partnerships</h3>
                <p style="font-size: 16px; color: var(--text-medium); line-height: 1.7;">Partnered with colleges to offer significant tuition discounts for staff pursuing ABA degrees. <a href="<?php echo esc_url(home_url('/university-partnerships/')); ?>" style="color: var(--primary-blue); font-weight: 600;">Learn more &rarr;</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Fun Team Photos — Carousel -->
<section style="padding: 60px 0; background: var(--white);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Life at ABT</h2>
            <p>Our team works hard and celebrates together.</p>
        </div>
        <div style="position: relative;">
            <div id="lifeCarousel" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; overflow: hidden;">
                <?php
                $life_photos = array(
                    'staff-powell-team.jpg', 'staff-wall-banner.jpg', 'community-autism-eats.jpg', 'community-bounce-house.jpg',
                    'life-crafts-event.jpg', 'life-staff-bingo.jpg', 'community-trunk-or-treat-2.jpg', 'community-event-2.jpg',
                    'life-party-1.jpg', 'life-party-2.jpg', 'life-party-3.jpg', 'life-team-photo-1.jpg',
                    'life-team-photo-2.jpg', 'life-staff-fun-1.jpg', 'life-staff-24.jpg', 'life-staff-25.jpg',
                    'life-event-2.jpg', 'life-event-3.jpg', 'life-center-1.jpg', 'life-center-2.jpg',
                    'life-team-group.jpg', 'community-picnic.jpg', 'community-halloween-event.jpg', 'community-trunk-or-treat.jpg',
                );
                $total = count($life_photos);
                foreach ($life_photos as $i => $photo): ?>
                <img src="<?php echo esc_url($img . $photo); ?>" alt="Life at ABT" class="life-slide" data-index="<?php echo $i; ?>" style="width: 100%; height: 240px; object-fit: cover; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); display: <?php echo $i < 4 ? 'block' : 'none'; ?>; cursor: pointer;" onclick="openLightbox(this.src, this.alt)">
                <?php endforeach; ?>
            </div>
            <button onclick="lifeNav(-1)" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.95); border: none; width: 44px; height: 44px; border-radius: 50%; font-size: 22px; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.15); z-index: 10; color: var(--text-dark); font-weight: 700;">&#8249;</button>
            <button onclick="lifeNav(1)" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.95); border: none; width: 44px; height: 44px; border-radius: 50%; font-size: 22px; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.15); z-index: 10; color: var(--text-dark); font-weight: 700;">&#8250;</button>
        </div>
        <p style="text-align: center; margin-top: 16px; font-size: 14px; color: var(--text-light);" id="lifeCounter">1 / <?php echo ceil($total / 4); ?></p>
    </div>
</section>
<script>
var lifePage = 0;
var lifePerPage = 4;
var lifeSlides = document.querySelectorAll('.life-slide');
var lifeTotalPages = Math.ceil(lifeSlides.length / lifePerPage);
function lifeNav(dir) {
    lifePage = (lifePage + dir + lifeTotalPages) % lifeTotalPages;
    lifeSlides.forEach(function(s, i) {
        s.style.display = (i >= lifePage * lifePerPage && i < (lifePage + 1) * lifePerPage) ? 'block' : 'none';
    });
    document.getElementById('lifeCounter').textContent = (lifePage + 1) + ' / ' + lifeTotalPages;
}
// Auto-advance every 5 seconds
setInterval(function() { lifeNav(1); }, 5000);
</script>

<!-- Video: Day in the Life -->
<section style="padding: 80px 0; background: var(--bg-cream);">
    <div style="max-width: 900px; margin: 0 auto; padding: 0 24px; text-align: center;">
        <h2 style="font-size: 36px; color: var(--accent-red); margin-bottom: 12px;">A Day in the Life of an RBT</h2>
        <p style="font-size: 20px; color: var(--text-medium); margin-bottom: 36px;">See what it's like to be part of the ABT team.</p>
        <div style="position: relative; padding-bottom: 56.25%; height: 0; border-radius: 20px; overflow: hidden; box-shadow: 0 16px 40px rgba(0,0,0,0.12);">
            <iframe src="https://www.youtube.com/embed/TPY4J2nNYqc" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- Open Positions -->
<section style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1000px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Open Positions</h2>
            <p>We're growing across Ohio and New Jersey. Find your next role.</p>
        </div>

        <?php
        /**
         * Helper: parse "Label|URL, Label|URL" into array of links
         */
        function abt_parse_job_links($links_str) {
            $result = array();
            if (empty($links_str)) return $result;
            $pairs = array_map('trim', explode(',', $links_str));
            foreach ($pairs as $pair) {
                $parts = array_map('trim', explode('|', $pair, 2));
                if (count($parts) === 2 && !empty($parts[0]) && !empty($parts[1])) {
                    $result[] = array('label' => $parts[0], 'url' => $parts[1]);
                }
            }
            return $result;
        }

        /**
         * Helper: load positions from admin settings
         */
        function abt_get_positions($state, $count, $defaults) {
            $positions = array();
            for ($i = 1; $i <= $count; $i++) {
                $def = isset($defaults[$i]) ? $defaults[$i] : array('title' => '', 'type' => '', 'pay' => '', 'loc' => '', 'note' => '', 'links' => '');
                $title = get_option('abt_job_' . $state . '_' . $i . '_title', $def['title']);
                if (empty($title)) continue;
                $positions[] = array(
                    'title' => $title,
                    'type'  => get_option('abt_job_' . $state . '_' . $i . '_type', $def['type']),
                    'pay'   => get_option('abt_job_' . $state . '_' . $i . '_pay', $def['pay']),
                    'loc'   => get_option('abt_job_' . $state . '_' . $i . '_loc', $def['loc']),
                    'note'  => get_option('abt_job_' . $state . '_' . $i . '_note', $def['note']),
                    'links' => abt_parse_job_links(get_option('abt_job_' . $state . '_' . $i . '_links', $def['links'])),
                );
            }
            return $positions;
        }

        // Ohio defaults (used if admin hasn't saved yet)
        $oh_defaults = array(
            1 => array('title' => 'ABA Therapist / Behavior Technician', 'type' => 'Full-Time / Part-Time', 'pay' => '$17-$19/hr', 'loc' => 'Multiple OH Locations', 'note' => 'No certification required — free RBT training provided, raise upon certification', 'links' => 'Powell|https://jobs.apploi.com/view/1729206, Reynoldsburg|https://jobs.apploi.com/view/1729217, South Euclid|https://jobs.apploi.com/view/1745563, Parma Heights|https://jobs.apploi.com/view/1745568, Grove City|https://jobs.apploi.com/view/1745571, Akron|https://jobs.apploi.com/view/1745680'),
            2 => array('title' => 'Registered Behavior Technician (RBT)', 'type' => 'Full-Time / Part-Time', 'pay' => '$19-$24/hr', 'loc' => 'Beachwood, OH', 'note' => 'Performance-based raises every 6 months', 'links' => 'Apply|https://jobs.apploi.com/view/1729523'),
            3 => array('title' => 'BCBA — Center-Based', 'type' => 'Full-Time', 'pay' => '$82K-$90K/yr', 'loc' => 'Beachwood, OH', 'note' => '', 'links' => 'Apply|https://jobs.apploi.com/view/1718531'),
            4 => array('title' => 'BCBA — Hybrid / Home-Based', 'type' => 'Full-Time', 'pay' => '$75K-$110K/yr', 'loc' => 'Ohio', 'note' => '$65-$72/hr billable + $25/hr non-billable', 'links' => 'South Euclid|https://jobs.apploi.com/view/1732059, Grove City|https://jobs.apploi.com/view/1745574, Remote|https://jobs.apploi.com/view/1741753'),
            5 => array('title' => 'Lead BCBA', 'type' => 'Full-Time', 'pay' => 'Competitive', 'loc' => 'Columbus, OH', 'note' => '', 'links' => 'Apply|https://jobs.apploi.com/view/1736739'),
        );

        // NJ defaults
        $nj_defaults = array(
            1 => array('title' => 'ABA Therapist / Behavior Technician', 'type' => 'Full-Time / Part-Time', 'pay' => '$24-$30/hr', 'loc' => 'Multiple NJ Locations', 'note' => 'No certification required — free RBT training provided', 'links' => 'Fair Lawn|https://jobs.apploi.com/view/1736706, Berkeley Twp|https://jobs.apploi.com/view/1736709, Stafford Twp|https://jobs.apploi.com/view/1736713'),
            2 => array('title' => 'BCBA — Hybrid', 'type' => 'Full-Time', 'pay' => 'Competitive', 'loc' => 'New Jersey', 'note' => '', 'links' => 'Plainfield|https://jobs.apploi.com/view/1745575, Trenton|https://jobs.apploi.com/view/1745569'),
        );

        $oh_positions = abt_get_positions('oh', 8, $oh_defaults);
        $nj_positions = abt_get_positions('nj', 5, $nj_defaults);
        ?>

        <!-- Ohio Positions -->
        <h3 style="font-size: 32px; color: var(--primary-blue); margin-bottom: 20px; font-weight: 800; letter-spacing: -0.01em; border-bottom: 3px solid var(--accent-yellow); padding-bottom: 10px; display: inline-block;">Ohio</h3>
        <?php foreach ($oh_positions as $pos): ?>
        <div style="background: var(--white); border-radius: 16px; padding: 24px 28px; margin-bottom: 14px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)'" onmouseout="this.style.borderColor='transparent'">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                <div>
                    <h4 style="font-size: 17px; color: var(--text-dark); margin-bottom: 4px; font-family: 'DM Sans', sans-serif; font-weight: 700;"><?php echo esc_html($pos['title']); ?></h4>
                    <p style="font-size: 16px; color: var(--text-medium); margin-bottom: 0;"><?php echo esc_html($pos['loc']); ?> &bull; <?php echo esc_html($pos['type']); ?> &bull; <?php echo esc_html($pos['pay']); ?></p>
                    <?php if (!empty($pos['note'])): ?>
                    <p style="font-size: 14px; color: var(--primary-blue); margin-top: 4px; margin-bottom: 0;"><?php echo esc_html($pos['note']); ?></p>
                    <?php endif; ?>
                </div>
                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <?php foreach ($pos['links'] as $link): ?>
                    <a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener" class="btn-cta" style="padding: 10px 20px; font-size: 15px;"><?php echo esc_html($link['label']); ?> &rarr;</a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- NJ Positions -->
        <h3 style="font-size: 32px; color: var(--primary-blue); margin-top: 48px; margin-bottom: 20px; font-weight: 800; letter-spacing: -0.01em; border-bottom: 3px solid var(--accent-yellow); padding-bottom: 10px; display: inline-block;">New Jersey</h3>
        <?php foreach ($nj_positions as $pos): ?>
        <div style="background: var(--white); border-radius: 16px; padding: 24px 28px; margin-bottom: 14px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)'" onmouseout="this.style.borderColor='transparent'">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                <div>
                    <h4 style="font-size: 17px; color: var(--text-dark); margin-bottom: 4px; font-family: 'DM Sans', sans-serif; font-weight: 700;"><?php echo esc_html($pos['title']); ?></h4>
                    <p style="font-size: 16px; color: var(--text-medium); margin-bottom: 0;"><?php echo esc_html($pos['loc']); ?> &bull; <?php echo esc_html($pos['type']); ?> &bull; <?php echo esc_html($pos['pay']); ?></p>
                    <?php if (!empty($pos['note'])): ?>
                    <p style="font-size: 14px; color: var(--primary-blue); margin-top: 4px; margin-bottom: 0;"><?php echo esc_html($pos['note']); ?></p>
                    <?php endif; ?>
                </div>
                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                    <?php foreach ($pos['links'] as $link): ?>
                    <a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener" class="btn-cta" style="padding: 10px 20px; font-size: 15px;"><?php echo esc_html($link['label']); ?> &rarr;</a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <div style="text-align: center; margin-top: 32px;">
            <a href="<?php echo esc_url(get_option('abt_jobs_apploi_url', 'https://jobs.apploi.com/profile/advanced-behavioral-therapy')); ?>" target="_blank" rel="noopener" style="font-size: 18px; color: var(--primary-blue); font-weight: 600; text-decoration: underline; text-underline-offset: 4px;">View All Open Positions on Apploi &rarr;</a>
        </div>
    </div>
</section>

<!-- Apply Now — Cognito Form -->
<section id="apply" style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center;">
    <div style="max-width: 800px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Apply Now</h2>
            <p>Ready to join the ABT team? Submit your application below.</p>
        </div>
        <div style="background: var(--white); border-radius: 20px; padding: 40px; box-shadow: 0 4px 16px rgba(0,0,0,0.06);">
            <script src="https://www.cognitoforms.com/f/seamless.js" data-key="tCD_RHxEsUG9ohnFd69aZQ" data-form="47"></script>
        </div>
    </div>
</section>

<!-- BCBA Mentorship -->
<section style="padding: 60px 0; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); text-align: center;">
    <div style="max-width: 800px; margin: 0 auto; padding: 0 24px;">
        <h2 style="font-size: 28px; color: #fff; margin-bottom: 12px;">Free BCBA Mentorship Program</h2>
        <p style="font-size: 17px; color: rgba(255,255,255,0.85); margin-bottom: 8px; line-height: 1.8;">After 90 days of employment and enrollment in an ABAI-accredited program, you're eligible for free restricted and unrestricted supervision hours. We prepare you not just for the exam &mdash; but to become a well-rounded clinician with fieldwork across home, center, and school settings.</p>
        <a href="<?php echo esc_url(home_url('/university-partnerships/')); ?>" style="color: var(--accent-yellow); font-weight: 700; font-size: 16px; text-decoration: underline; text-underline-offset: 4px;">View University Partnerships &rarr;</a>
    </div>
</section>

<?php get_footer(); ?>
