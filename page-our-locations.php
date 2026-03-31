<?php
/**
 */
get_header();
$img = ABT_THEME_URI . '/assets/images/';
$pattern = $img . 'abt-pattern-light.jpg';
?>

<section class="page-hero" style="background: linear-gradient(135deg, #1B4B8A 0%, #143A6B 100%);">
    <h1>Our Locations</h1>
    <p>Three Ohio centers plus home-based services in New Jersey &mdash; all BCBA-owned and operated.</p>
</section>

<section style="padding: 80px 0; background-image: linear-gradient(rgba(255,255,255,0.78), rgba(255,255,255,0.78)), url('<?php echo esc_url($pattern); ?>'); background-size: cover; background-position: center; ">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 24px;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px;">
            <?php
            $locs = array(
                array('name' => 'Beachwood, Ohio', 'slug' => 'beachwood-ohio', 'addr' => get_option('abt_addr_beachwood', '23645 Mercantile Road, Beachwood, OH 44122'), 'badge' => 'Flagship Center', 'color' => 'var(--primary-blue)', 'services' => 'Center-Based, Home-Based, Early Learning', 'photo' => 'service-center-based.jpg'),
                array('name' => 'Powell, Ohio', 'slug' => 'powell-ohio', 'addr' => get_option('abt_addr_powell', '10104 Brewster Ln, Powell, OH 43065'), 'badge' => 'Now Open', 'color' => '#2e7d32', 'services' => 'Center-Based, Home-Based, Early Learning', 'photo' => '20250313_083144.jpg'),
                array('name' => 'Reynoldsburg, Ohio', 'slug' => 'reynoldsburg-ohio', 'addr' => get_option('abt_addr_reynoldsburg', '6096 E Main St, Suite 106, Columbus, OH 43213'), 'badge' => 'Center-Based', 'color' => 'var(--accent-red)', 'services' => 'Center-Based, Home-Based, Early Learning', 'photo' => 'Media_14.jpg'),
                array('name' => 'New Jersey', 'slug' => 'new-jersey', 'addr' => get_option('abt_addr_nj', 'Toms River & Surrounding Areas'), 'badge' => 'Home-Based', 'color' => 'var(--primary-blue)', 'services' => 'Home-Based ABA', 'photo' => 'nj-state-map.jpg'),
            );
            foreach ($locs as $l): ?>
            <div style="background: var(--white); border-radius: 20px; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 2px solid transparent; transition: all 0.3s;" onmouseover="this.style.borderColor='var(--primary-blue)';this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,0.12)'" onmouseout="this.style.borderColor='transparent';this.style.transform='';this.style.boxShadow='0 4px 16px rgba(0,0,0,0.06)'">
                <?php if ($l['photo']): ?>
                <img src="<?php echo esc_url($img . $l['photo']); ?>" alt="<?php echo esc_attr($l['name']); ?>" style="width: 100%; height: 220px; object-fit: cover;">
                <?php else: ?>
                <div style="height: 220px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; color: #fff;">
                        <div style="font-size: 24px; margin-bottom: 8px;">&#127968;</div>
                        <p style="font-size: 16px; opacity: 0.85;">Home-Based Services</p>
                    </div>
                </div>
                <?php endif; ?>
                <div style="padding: 28px;">
                    <span style="display: inline-block; background: <?php echo $l['color']; ?>; color: #fff; font-size: 11px; font-weight: 700; padding: 3px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 12px;"><?php echo esc_html($l['badge']); ?></span>
                    <h3 style="font-size: 16px; color: var(--text-dark); margin-bottom: 8px; font-family: 'DM Sans', sans-serif; font-weight: 700;"><?php echo esc_html($l['name']); ?></h3>
                    <p style="font-size: 17px; color: var(--text-medium); margin-bottom: 6px;">&#128205; <?php echo esc_html($l['addr']); ?></p>
                    <p style="font-size: 16px; color: var(--primary-blue); font-weight: 600; margin-bottom: 18px;"><?php echo esc_html($l['services']); ?></p>
                    <a href="<?php echo esc_url(home_url('/' . $l['slug'] . '/')); ?>" class="btn-cta" style="padding: 10px 24px; font-size: 16px;">View Location &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
