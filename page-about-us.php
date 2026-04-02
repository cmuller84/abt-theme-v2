<?php
/**
 * Template Name: About Us
 * Version: 2.2.0
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>About Advanced Behavioral Therapy</h1>
    <p>BCBA-owned and operated. Founded by a clinician, for clinicians and families.</p>
</section>

<!-- A Letter from Our Founder — FIRST per Rachel's feedback -->
<section style="padding: 80px 0; background: var(--white);">
    <div style="max-width: 1000px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 2fr; gap: 48px; align-items: start;">
        <div style="text-align: center;">
            <img src="<?php echo esc_url(abt_img('founder', 'staff-avigail-kemmoun.jpg')); ?>" alt="Avigail Kemmoun, BCBA" style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover; object-position: center 20%; margin: 0 auto 16px; display: block; box-shadow: 0 8px 24px rgba(27,75,138,0.2);">
            <h3 style="font-size: 24px; color: var(--text-dark); margin-bottom: 4px;">Avigail Kemmoun, BCBA</h3>
            <p style="font-size: 15px; color: var(--primary-blue); font-weight: 600;">Chief Clinical Officer &amp; Founder</p>
        </div>
        <div>
            <h2 style="font-size: 32px; color: var(--accent-red); margin-bottom: 20px;">A Letter from Our Founder</h2>
            <p style="font-size: 17px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">Hi there! I'm Avigail Kemmoun, BCBA, Chief Clinical Officer and Founder of Advanced Behavioral Therapy &mdash; and I'm so excited you're here!</p>
            <p style="font-size: 17px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">My journey in this field started over 20 years ago as a high school volunteer. At the time, there were very few resources available for children with autism and their families, and I remember thinking, <em>there has to be more we can do.</em> That moment sparked a passion that has stayed with me ever since.</p>
            <p style="font-size: 17px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">Over the past 15+ years, I've had the privilege of working closely with incredible children and families, watching growth happen in ways that are truly life-changing. What began as a passion has grown into something even bigger than I imagined &mdash; creating Advanced Behavioral Therapy, a place where families feel supported, understood, and empowered every step of the way.</p>
            <p style="font-size: 17px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">At ABT, we are built on compassion, connection, and quality care. We believe every child is unique, capable, and deserving of individualized support that celebrates who they are. Our team is dedicated to providing evidence-based therapy while creating a warm, fun, and engaging environment where children can truly thrive.</p>
            <p style="font-size: 17px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">There is nothing more rewarding to me than seeing our clients gain confidence, build skills, and reach milestones &mdash; both big and small &mdash; and knowing we're making a meaningful difference in their lives and in yours.</p>
            <p style="font-size: 17px; color: var(--primary-blue); line-height: 1.9; font-weight: 600;">Thank you for being here and for trusting us to be part of your journey. &#128153;</p>
        </div>
    </div>
</section>

<!-- Our Story -->
<section style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div>
            <h2 style="font-size: 42px; color: var(--accent-red); margin-bottom: 20px;">Our Story</h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">Advanced Behavioral Therapy was founded by Avigail Kemmoun, MS BCBA, with a simple but powerful belief: ABA therapy should be led by clinicians who understand the science, the children, and the families they serve.</p>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 16px;">Unlike many ABA providers that are owned by private equity or corporate groups, ABT is <strong style="color: var(--primary-blue);">BCBA-owned and operated</strong>. Every clinical decision is made by Board Certified Behavior Analysts who are deeply invested in outcomes &mdash; not margins.</p>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9;">Today, ABT serves hundreds of families across Ohio and New Jersey with center-based, home-based, and early learning center programs. Our team of passionate therapists and BCBAs work together to help every child reach their full potential.</p>
        </div>
        <div>
            <img src="<?php echo esc_url(abt_img('about', 'reynoldsburg-mural-new.jpg')); ?>" alt="ABT Center — signature mural" style="width: 100%; border-radius: 24px; box-shadow: 0 16px 40px rgba(27,75,138,0.15);">
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section style="padding: 80px 0; background: var(--bg-cream);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Our Mission &amp; Values</h2>
            <p>At ABT, we are dedicated to your child's advancement and growth.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">
            <div style="background: var(--white); border-radius: 20px; padding: 36px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="width: 56px; height: 56px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/><line x1="11" y1="8" x2="11" y2="14"/></svg></div>
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 10px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Proven Methods</h3>
                <p style="font-size: 17px; color: var(--text-medium); line-height: 1.7;">We know the kind of positive changes ABA can make in children's lives. Our programs are grounded in evidence-based practices with measurable outcomes.</p>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 36px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="width: 56px; height: 56px; background: var(--accent-red); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;"><svg width="28" height="28" viewBox="0 0 24 24" fill="#fff" stroke="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 10px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Tailored To Your Child</h3>
                <p style="font-size: 17px; color: var(--text-medium); line-height: 1.7;">We value each child's unique profile. We teach your child the way they learn best, with individualized treatment plans designed around their specific goals.</p>
            </div>
            <div style="background: var(--white); border-radius: 20px; padding: 36px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="width: 56px; height: 56px; background: var(--accent-yellow); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1a1a2e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
                <h3 style="font-size: 22px; color: var(--text-dark); margin-bottom: 10px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Expert, Caring Therapists</h3>
                <p style="font-size: 17px; color: var(--text-medium); line-height: 1.7;">We provide highly trained, professional therapists who are passionate about what they do. Our team grows through our free BCBA Mentorship Program.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership -->
<section style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Our Leadership Team</h2>
            <p>Led by clinicians, driven by compassion.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; max-width: 1100px; margin: 0 auto;">
            <?php
            $img = ABT_THEME_URI . '/assets/images/';
            $leader_defaults = array(
                1 => array('name' => 'Joseph Kemmoun', 'title' => 'President & Founder', 'cred' => ''),
                2 => array('name' => 'Avigail Kemmoun', 'title' => 'Chief Clinical Officer & Founder', 'cred' => 'MS, BCBA, COBA'),
                3 => array('name' => 'Shaya Brezak', 'title' => 'Vice President of Business Operations', 'cred' => ''),
                4 => array('name' => '', 'title' => '', 'cred' => ''),
                5 => array('name' => '', 'title' => '', 'cred' => ''),
                6 => array('name' => '', 'title' => '', 'cred' => ''),
                7 => array('name' => '', 'title' => '', 'cred' => ''),
                8 => array('name' => '', 'title' => '', 'cred' => ''),
                9 => array('name' => '', 'title' => '', 'cred' => ''),
                10 => array('name' => '', 'title' => '', 'cred' => ''),
            );
            $leader_photo_defaults = array(1 => 'staff-joseph-kemmoun.jpg', 2 => 'staff-avigail-kemmoun.jpg', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => '', 9 => '', 10 => '');
            for ($i = 1; $i <= 10; $i++):
                $def = $leader_defaults[$i];
                $name = get_option('abt_leader_' . $i . '_name', $def['name']);
                if (empty($name)) continue;
                $title = get_option('abt_leader_' . $i . '_title', $def['title']);
                $cred = get_option('abt_leader_' . $i . '_cred', $def['cred']);
                $photo_id = get_option('abt_img_leader_' . $i);
                $photo_url = '';
                if ($photo_id) {
                    $photo_url = wp_get_attachment_image_url($photo_id, 'medium');
                } elseif (!empty($leader_photo_defaults[$i])) {
                    $photo_url = $img . $leader_photo_defaults[$i];
                }
            ?>
            <div style="background: var(--white); border-radius: 20px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <?php if ($photo_url): ?>
                <img src="<?php echo esc_url($photo_url); ?>" alt="<?php echo esc_attr($name); ?>" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; object-position: center top; margin: 0 auto 16px; display: block;">
                <?php else: ?>
                <div style="width: 100px; height: 100px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-size: 36px; font-weight: 700; font-family: 'DM Sans', sans-serif;"><?php echo esc_html(substr($name, 0, 1)); ?><?php $parts = explode(' ', $name); echo esc_html(isset($parts[1]) ? substr($parts[1], 0, 1) : ''); ?></div>
                <?php endif; ?>
                <h4 style="font-size: 20px; color: var(--text-dark); margin-bottom: 4px; font-family: 'DM Sans', sans-serif; font-weight: 700;"><?php echo esc_html($name); ?></h4>
                <p style="font-size: 15px; color: var(--primary-blue); font-weight: 600; margin-bottom: 2px;"><?php echo esc_html($title); ?></p>
                <?php if ($cred): ?>
                <p style="font-size: 13px; color: var(--text-light);"><?php echo esc_html($cred); ?></p>
                <?php endif; ?>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Our Team — Staff Photo Gallery -->
<section id="team" style="padding: 80px 0; background: var(--white);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div class="section-header">
            <h2>Meet Our Team</h2>
            <p>The caring professionals who make a difference every day.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1100px; margin: 0 auto;">
            <?php
            // ORDER: Directors → Ops Coordinators → Admin Staff
            $team_defaults = array(
                // Directors
                1 => array('name' => 'Sam Banks', 'title' => 'Reynoldsburg Center Director'),
                2 => array('name' => 'Ryley Bushong', 'title' => 'Powell Center Director'),
                3 => array('name' => 'Samantha Brown', 'title' => 'NJ & Columbus Home Regional Coordinator'),
                4 => array('name' => 'Kasey Leech', 'title' => 'Assistant Clinical Director'),
                5 => array('name' => 'Jodi Ussery', 'title' => 'Assistant Clinical Director, NJ'),
                // Ops Coordinators
                6 => array('name' => 'Michelle Menuez', 'title' => 'Reynoldsburg Center Operations Coordinator'),
                7 => array('name' => 'Kathryn Zielinski', 'title' => 'Worthington Center Operations Coordinator'),
                8 => array('name' => 'Phil Gallo', 'title' => 'Regional Centers Manager'),
                // Admin Staff
                9 => array('name' => 'Kalyn Craven', 'title' => 'Cleveland Home & ELC Coordinator'),
                10 => array('name' => 'Kaylee Simmons', 'title' => 'Recruiter'),
                11 => array('name' => 'Adam Ivancic', 'title' => 'Senior Recruiter'),
                12 => array('name' => 'Rachel Levin', 'title' => 'Chief of Staff'),
                13 => array('name' => '', 'title' => ''),
                14 => array('name' => '', 'title' => ''),
                15 => array('name' => '', 'title' => ''),
                16 => array('name' => '', 'title' => ''),
                17 => array('name' => '', 'title' => ''),
                18 => array('name' => '', 'title' => ''),
                19 => array('name' => '', 'title' => ''),
                20 => array('name' => '', 'title' => ''),
                21 => array('name' => '', 'title' => ''),
                22 => array('name' => '', 'title' => ''),
                23 => array('name' => '', 'title' => ''),
                24 => array('name' => '', 'title' => ''),
            );
            $team_photo_defaults = array(
                1 => 'staff-sam-banks.jpg', 2 => '', 3 => 'staff-samantha-brown-v2.jpg',
                4 => '', 5 => 'staff-jodi-ussery.png', 6 => 'staff-michelle-menuez-v2.jpg',
                7 => 'staff-kathryn-zielinski.jpg', 8 => '', 9 => 'staff-kalyn-craven.jpg',
                10 => 'staff-kaylee-simmons.jpg', 11 => 'staff-adam-ivancic.jpg', 12 => '',
                13 => '', 14 => '', 15 => '', 16 => '', 17 => '', 18 => '',
                19 => '', 20 => '', 21 => '', 22 => '', 23 => '', 24 => '',
            );
            $team_crop_defaults = array(1=>'center top',2=>'center top',3=>'center top',4=>'center top',5=>'center 30%',6=>'center top',7=>'center 70%',8=>'center top',9=>'center top',10=>'center top',11=>'center top',12=>'center top',13=>'center top',14=>'center top',15=>'center top',16=>'center top',17=>'center top',18=>'center top',19=>'center top',20=>'center top',21=>'center top',22=>'center top',23=>'center top',24=>'center top');
            for ($i = 1; $i <= 24; $i++):
                $def = $team_defaults[$i];
                $name = get_option('abt_team_' . $i . '_name', $def['name']);
                if (empty($name)) continue;
                $title = get_option('abt_team_' . $i . '_title', $def['title']);
                $photo_id = get_option('abt_img_team_' . $i);
                $photo_url = '';
                if ($photo_id) {
                    $photo_url = wp_get_attachment_image_url($photo_id, 'medium');
                } elseif (!empty($team_photo_defaults[$i])) {
                    $photo_url = $img . $team_photo_defaults[$i];
                }
                $crop = isset($team_crop_defaults[$i]) ? $team_crop_defaults[$i] : 'center top';
            ?>
            <div style="text-align: center; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-6px)'" onmouseout="this.style.transform=''">
                <?php if ($photo_url): ?>
                <img src="<?php echo esc_url($photo_url); ?>" alt="<?php echo esc_attr($name); ?>" style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover; object-position: <?php echo esc_attr($crop); ?>; margin: 0 auto 16px; display: block; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
                <?php else: ?>
                <div style="width: 180px; height: 180px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #fff; font-size: 48px; font-weight: 700; font-family: 'DM Sans', sans-serif;"><?php $parts = explode(' ', $name); echo esc_html(substr($parts[0],0,1) . (isset($parts[1]) ? substr($parts[1],0,1) : '')); ?></div>
                <?php endif; ?>
                <h4 style="font-size: 18px; color: var(--text-dark); margin-bottom: 2px; font-family: 'DM Sans', sans-serif; font-weight: 700;"><?php echo esc_html($name); ?></h4>
                <p style="font-size: 14px; color: var(--text-light);"><?php echo esc_html($title); ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
