<?php
/**
 * Template Name: Location Page
 * Version: 2.2.0
 * Used by: page-beachwood-ohio.php, page-powell-ohio.php, page-reynoldsburg-ohio.php, page-new-jersey.php
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
$slug = get_post_field('post_name', get_post());

// Location data keyed by slug
$locations = array(
    'beachwood-ohio' => array(
        'name'     => 'Beachwood, Ohio',
        'address'  => get_option('abt_addr_beachwood', '23645 Mercantile Road, Beachwood, OH 44122'),
        'phone'    => '216-508-0222',
        'hours'    => 'Center: Mon–Fri 9:00 AM – 5:00 PM | Home-Based: Mon–Fri 8:00 AM – 7:30 PM',
        'services' => array('Center-Based ABA', 'Home-Based ABA', 'Early Learning Centers'),
        'areas'    => 'Beachwood, Pepper Pike, Lyndhurst, South Euclid, University Heights, Shaker Heights, Cleveland Heights, and surrounding communities',
        'desc'     => 'Our Beachwood center is ABT\'s flagship location, offering a full range of ABA therapy services in a state-of-the-art facility. With dedicated therapy rooms, colorful play areas, a chalkboard wall, and collaborative spaces, Beachwood provides an ideal environment for children to learn and grow.',
        'photos'   => array('beachwood-new-1.jpg', 'beachwood-new-2.jpg', '20250313_083305.jpg', '20250313_083447.jpg', '20250313_083458.jpg', '20250313_083314.jpg', '20250313_083058.jpg', '20250313_083144.jpg', '20250313_083215.jpg', 'beachwood-therapy-room.jpg'),
        'badge'    => 'Flagship Center',
        'badge_color' => 'var(--primary-blue)',
        'map_embed'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.8!2d-81.51!3d41.46!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDI3JzM2LjAiTiA4McKwMzAnMzYuMCJX!5e0!3m2!1sen!2sus!4v1',
    ),
    'powell-ohio' => array(
        'name'     => 'Powell, Ohio',
        'address'  => get_option('abt_addr_powell', '10104 Brewster Ln, Suite 100, Powell, OH 43065'),
        'phone'    => '(614) 654-6912',
        'hours'    => 'Center: Mon–Fri 9:00 AM – 5:00 PM | Home-Based: Mon–Fri 8:00 AM – 7:30 PM',
        'services' => array('Center-Based ABA', 'Home-Based ABA', 'Early Learning Centers'),
        'areas'    => 'Powell, Dublin, Westerville, Delaware, Lewis Center, Worthington, and surrounding communities',
        'desc'     => 'Our newest center, now open in Powell! Located on Brewster Lane, this center brings ABT\'s full suite of ABA therapy services to the Columbus metro\'s northern corridor. Purpose-built for children with autism, featuring modern therapy rooms and engaging play spaces.',
        'photos'   => array('powell-art-room.jpg', 'powell-reading-room.jpg', 'powell-staff-wall.jpg', 'powell-classroom-activity.jpg', 'powell-therapy-room-lg.jpg', 'powell-playroom.jpg'),
        'badge'    => 'Now Open',
        'badge_color' => '#2e7d32',
        'map_embed'=> '',
    ),
    'reynoldsburg-ohio' => array(
        'name'     => 'Reynoldsburg, Ohio',
        'address'  => get_option('abt_addr_reynoldsburg', '6096 E Main St, Suite 106, Columbus, OH 43213'),
        'phone'    => '614-604-9096',
        'hours'    => 'Center: Mon–Fri 9:00 AM – 5:00 PM | Home-Based: Mon–Fri 8:00 AM – 7:30 PM',
        'services' => array('Center-Based ABA', 'Home-Based ABA', 'Early Learning Centers'),
        'areas'    => 'Reynoldsburg, Pickerington, Columbus, Whitehall, Gahanna, Bexley, Groveport, and surrounding communities',
        'desc'     => 'Located on East Main Street, our Reynoldsburg center serves families throughout the Columbus metro\'s east side. The center features purpose-built therapy rooms, a climbing wall, indoor slide, colorful murals, and collaborative spaces for social skill building.',
        'photos'   => array('reynoldsburg-wide-gym.jpg', 'reynoldsburg-mural-new.jpg', 'reynoldsburg-abc-rug.jpg', 'reynoldsburg-chalkboard.jpg', 'reynoldsburg-room-48.jpg', 'reynoldsburg-room-55.jpg', 'reynoldsburg-room-50.jpg', 'reynoldsburg-room-46.jpg', 'reynoldsburg-room-56.jpg'),
        'badge'    => 'Center-Based',
        'badge_color' => 'var(--accent-red)',
        'map_embed'=> '',
    ),
    'new-jersey' => array(
        'name'     => 'New Jersey',
        'address'  => get_option('abt_addr_nj', 'Home-Based Services — Toms River & Surrounding Areas'),
        'phone'    => '888-830-1672 ext 104',
        'hours'    => 'Monday – Friday: 8:00 AM – 7:30 PM',
        'services' => array('Home-Based ABA'),
        'areas'    => 'Toms River, Lakewood, Brick, Jackson, Howell, Manchester, Berkeley, and surrounding Ocean County communities',
        'desc'     => 'ABT provides home-based ABA therapy services throughout the Toms River, New Jersey area. Our therapists come directly to your home, providing one-on-one therapy in the environment where your child feels most comfortable. All services are overseen by experienced BCBAs.',
        'photos'   => array('nj-state-map.jpg'),
        'badge'    => 'Home-Based',
        'badge_color' => 'var(--primary-blue)',
        'map_embed'=> '',
    ),
);

// Get current location data
$loc = isset($locations[$slug]) ? $locations[$slug] : $locations['beachwood-ohio'];
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>ABA Therapy in <?php echo esc_html($loc['name']); ?></h1>
    <p>BCBA-owned and operated &bull; Personalized care for your child</p>
</section>

<!-- Location Overview -->
<section style="padding: 80px 0; background-image: url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start;">
        <div>
            <span style="display: inline-block; background: <?php echo $loc['badge_color']; ?>; color: #fff; font-size: 12px; font-weight: 700; padding: 5px 16px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 20px;"><?php echo esc_html($loc['badge']); ?></span>
            <h2 style="font-size: 34px; color: var(--accent-red); margin-bottom: 16px;">About Our <?php echo esc_html($loc['name']); ?> <?php echo ($slug === 'new-jersey') ? 'Services' : 'Center'; ?></h2>
            <p style="font-size: 18px; color: var(--text-medium); line-height: 1.9; margin-bottom: 28px;"><?php echo esc_html($loc['desc']); ?></p>

            <!-- Age Range & Programs -->
            <div style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); border-radius: 16px; padding: 24px; color: #fff; margin-bottom: 28px;">
                <h3 style="font-size: 20px; margin-bottom: 12px; color: #fff; font-family: 'DM Sans', sans-serif; font-weight: 700;">What Your Child Can Achieve</h3>
                <p style="font-size: 15px; line-height: 1.7; opacity: 0.9; margin-bottom: 12px;">Ages served: <strong>2-6 years old</strong></p>
                <p style="font-size: 15px; line-height: 1.7; opacity: 0.9;">Our personalized ABA programs help children improve communication skills, build social connections, develop independence in daily activities, reduce challenging behaviors, and prepare for school success — all through evidence-based, play-based learning.</p>
            </div>

            <!-- Info Cards -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
                <div style="background: var(--bg-light); border-radius: 12px; padding: 20px; border-left: 4px solid var(--primary-blue);">
                    <p style="font-size: 12px; font-weight: 700; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Address</p>
                    <p style="font-size: 15px; color: var(--text-dark); font-weight: 600;"><?php echo esc_html($loc['address']); ?></p>
                </div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 20px; border-left: 4px solid var(--primary-blue);">
                    <p style="font-size: 12px; font-weight: 700; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Phone</p>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', explode(' ext', $loc['phone'])[0])); ?>" style="font-size: 15px; color: var(--primary-blue); font-weight: 600; text-decoration: none;"><?php echo esc_html($loc['phone']); ?></a>
                </div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 20px; border-left: 4px solid var(--primary-blue);">
                    <p style="font-size: 12px; font-weight: 700; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Hours</p>
                    <p style="font-size: 15px; color: var(--text-dark); font-weight: 600;"><?php echo esc_html($loc['hours']); ?></p>
                </div>
                <div style="background: var(--bg-light); border-radius: 12px; padding: 20px; border-left: 4px solid var(--primary-blue);">
                    <p style="font-size: 12px; font-weight: 700; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Service Areas</p>
                    <p style="font-size: 14px; color: var(--text-dark); line-height: 1.5;"><?php echo esc_html($loc['areas']); ?></p>
                </div>
            </div>
        </div>

        <!-- Photo Carousel -->
        <div>
            <?php
            // Check if admin has uploaded carousel photos for this location
            $loc_key_map = array(
                'beachwood-ohio' => 'beachwood',
                'powell-ohio' => 'powell',
                'reynoldsburg-ohio' => 'reynoldsburg',
                'new-jersey' => 'nj',
            );
            $loc_admin_key = isset($loc_key_map[$slug]) ? $loc_key_map[$slug] : '';

            // Build photo URLs: use admin uploads if any exist, otherwise fall back to hardcoded
            $carousel_urls = array();
            if ($loc_admin_key) {
                for ($pi = 1; $pi <= 12; $pi++) {
                    $pid = get_option('abt_img_' . $loc_admin_key . '_photo_' . $pi);
                    if ($pid) {
                        $purl = wp_get_attachment_image_url($pid, 'large');
                        if ($purl) $carousel_urls[] = $purl;
                    }
                }
            }
            // If no admin photos uploaded, use theme defaults
            if (empty($carousel_urls) && !empty($loc['photos'])) {
                $hero_key_map = array('beachwood-ohio' => 'beachwood_hero', 'powell-ohio' => 'powell_hero', 'reynoldsburg-ohio' => 'reynoldsburg_hero', 'new-jersey' => 'nj_hero');
                $hero_key = isset($hero_key_map[$slug]) ? $hero_key_map[$slug] : '';
                $custom_hero = $hero_key ? get_option('abt_img_' . $hero_key) : '';
                if ($custom_hero) {
                    $custom_url = wp_get_attachment_image_url($custom_hero, 'large');
                    if ($custom_url) $carousel_urls[] = $custom_url;
                }
                foreach ($loc['photos'] as $photo) {
                    $carousel_urls[] = $img . $photo;
                }
            }
            ?>
            <?php if (count($carousel_urls) > 1): ?>
                <div class="photo-carousel" id="heroCarousel">
                    <?php foreach ($carousel_urls as $i => $src): ?>
                    <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($loc['name']); ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" onclick="openLightbox(this.src, this.alt)">
                    <?php endforeach; ?>
                    <button class="carousel-btn prev" onclick="carouselNav(-1)" aria-label="Previous">&#8249;</button>
                    <button class="carousel-btn next" onclick="carouselNav(1)" aria-label="Next">&#8250;</button>
                </div>
                <div class="carousel-dots" id="carouselDots">
                    <?php foreach ($carousel_urls as $i => $src): ?>
                    <button class="carousel-dot <?php echo $i === 0 ? 'active' : ''; ?>" onclick="carouselGo(<?php echo $i; ?>)" aria-label="Photo <?php echo $i+1; ?>"></button>
                    <?php endforeach; ?>
                </div>
            <?php elseif (count($carousel_urls) === 1): ?>
                <img src="<?php echo esc_url($carousel_urls[0]); ?>" alt="<?php echo esc_attr($loc['name']); ?>" style="width: 100%; border-radius: 24px; box-shadow: 0 16px 40px rgba(27,75,138,0.15);">
            <?php else: ?>
                <div style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); border-radius: 24px; padding: 60px 40px; text-align: center; color: #fff;">
                    <div style="font-size: 28px; margin-bottom: 16px;">&#127968;</div>
                    <h3 style="font-size: 22px; margin-bottom: 8px;">Home-Based Services</h3>
                    <p style="opacity: 0.85;">We bring therapy directly to your home in the <?php echo esc_html($loc['name']); ?> area.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Gallery replaced by hero carousel above -->

<!-- Services at this Location -->
<section style="padding: 80px 0; background: var(--bg-cream);">
    <div style="max-width: 900px; margin: 0 auto; padding: 0 24px;">
        <h2 style="font-size: 34px; color: var(--accent-red); text-align: center; margin-bottom: 32px;">Services at This Location</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
            <?php
            $svc_icons = array(
                'Center-Based ABA' => '&#127979;',
                'Home-Based ABA' => '&#127968;',
                'Early Learning Centers' => '&#128218;',
                'School Support' => '&#127891;',
            );
            foreach ($loc['services'] as $svc):
                $icon = isset($svc_icons[$svc]) ? $svc_icons[$svc] : '&#10004;';
            ?>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='transparent';this.style.transform=''">
                <div style="font-size: 16px; margin-bottom: 12px;"><?php echo $icon; ?></div>
                <h4 style="font-size: 20px; color: var(--text-dark); font-family: 'DM Sans', sans-serif; font-weight: 700;"><?php echo esc_html($svc); ?></h4>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox overlay for full-size photos -->
<div id="abt-lightbox" onclick="closeLightbox()" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:#000; z-index:99999; cursor:pointer; justify-content:center; align-items:center; margin:0; padding:0;">
    <img id="abt-lightbox-img" src="" alt="" style="max-width:92vw; max-height:92vh; border-radius:0; box-shadow:none; display:block; margin:auto;">
    <div style="position:absolute; top:16px; right:24px; color:#fff; font-size:40px; font-weight:300; cursor:pointer; z-index:100000;">&times;</div>
</div>
<script>
function openLightbox(src, alt) {
    var lb = document.getElementById('abt-lightbox');
    var lbImg = document.getElementById('abt-lightbox-img');
    lbImg.src = src;
    lbImg.alt = alt;
    lb.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    document.getElementById('abt-lightbox').style.display = 'none';
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeLightbox(); });
</script>

<script>
var currentSlide = 0;
function carouselNav(dir) {
    var imgs = document.querySelectorAll('#heroCarousel img');
    var dots = document.querySelectorAll('#carouselDots .carousel-dot');
    if (!imgs.length) return;
    imgs[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + dir + imgs.length) % imgs.length;
    imgs[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}
function carouselGo(idx) {
    var imgs = document.querySelectorAll('#heroCarousel img');
    var dots = document.querySelectorAll('#carouselDots .carousel-dot');
    if (!imgs.length) return;
    imgs[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    currentSlide = idx;
    imgs[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}
</script>

<?php get_footer(); ?>
