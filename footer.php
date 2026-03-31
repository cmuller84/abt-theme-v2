<!-- CTA Banner -->
<section class="cta-banner">
    <div class="cta-banner-inner">
        <h2>Ready to Help Your Child Thrive?</h2>
        <p>Take the first step toward giving your child the support they deserve. Our compassionate team is here to guide you every step of the way.</p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-cta-lg">Enroll Today</a>
            <a href="tel:<?php echo esc_attr(str_replace(array(' ', '-', '.'), '', get_option('abt_phone', '8888301672'))); ?>" class="btn-outline-white">Call <?php echo esc_html(get_option('abt_phone', '888-830-1672')); ?></a>
        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="newsletter-section">
    <div style="max-width: 600px; margin: 0 auto; padding: 0 24px;">
        <h3>Stay Connected with ABT</h3>
        <p>Get updates on events, therapy tips, and what's new at Advanced Behavioral Therapy.</p>
        <form class="newsletter-form" id="newsletterForm" onsubmit="return submitNewsletter(event)">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
        <div class="newsletter-status" id="newsletterStatus"></div>
    </div>
</section>
<script>
function submitNewsletter(e) {
    e.preventDefault();
    var form = document.getElementById('newsletterForm');
    var status = document.getElementById('newsletterStatus');
    var email = form.querySelector('input[name="email"]').value;
    status.textContent = 'Subscribing...';
    status.className = 'newsletter-status show';
    fetch((typeof abtAjax !== 'undefined' ? abtAjax.url : '/wp-admin/admin-ajax.php') + '?action=abt_form_submit', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email: email, source: 'newsletter', name: 'Newsletter Subscriber' })
    }).then(function(r) {
        status.textContent = 'You\'re subscribed! Thank you.';
        form.querySelector('input[name="email"]').value = '';
    }).catch(function() {
        status.textContent = 'Something went wrong. Please try again.';
    });
    return false;
}
</script>

<!-- Footer -->
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-grid">
            <div class="footer-brand">
                <img src="<?php echo esc_url(ABT_THEME_URI . '/assets/images/ABT_Home_Logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                <p>BCBA-owned and operated ABA therapy provider serving families across Ohio and New Jersey. Helping children with autism reach their full potential through personalized, evidence-based therapy.</p>
            </div>
            <div>
                <h5>Services</h5>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/our-services/#home')); ?>">Home-Based ABA</a></li>
                    <li><a href="<?php echo esc_url(home_url('/our-services/#center')); ?>">Center-Based ABA</a></li>
                    <li><a href="<?php echo esc_url(home_url('/our-services/#elc')); ?>">Early Learning Centers</a></li>
                    <li><a href="<?php echo esc_url(home_url('/our-services/#school')); ?>">School Support</a></li>
                </ul>
            </div>
            <div>
                <h5>Locations</h5>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/beachwood-ohio/')); ?>">Beachwood, Ohio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/powell-ohio/')); ?>">Powell, Ohio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/reynoldsburg-ohio/')); ?>">Reynoldsburg, Ohio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/new-jersey/')); ?>">New Jersey</a></li>
                </ul>
            </div>
            <div>
                <h5>Company</h5>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/careers/')); ?>">Careers</a></li>
                    <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; <?php echo date('Y'); ?> Advanced Behavioral Therapy. All rights reserved.</span>
            <span class="footer-legal-links">
                <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
                <span class="footer-sep">&bull;</span>
                <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">Terms of Service</a>
                <span class="footer-sep">&bull;</span>
                <a href="<?php echo esc_url(home_url('/hipaa-notice/')); ?>">HIPAA Notice</a>
                <span class="footer-sep">&bull;</span>
                <a href="<?php echo esc_url(home_url('/accessibility/')); ?>">Accessibility</a>
            </span>
        </div>
    </div>
</footer>

<!-- Global Lightbox -->
<div id="abt-lightbox" onclick="closeLightbox()" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.92); z-index:99999; cursor:pointer; justify-content:center; align-items:center;">
    <img id="abt-lightbox-img" src="" alt="" style="max-width:92vw; max-height:92vh; border-radius:0; box-shadow:none; display:block; margin:auto;">
    <div style="position:absolute; top:16px; right:24px; color:#fff; font-size:40px; font-weight:300; cursor:pointer; z-index:100000;">&times;</div>
</div>
<script>
function openLightbox(src, alt) {
    var lb = document.getElementById('abt-lightbox');
    var lbImg = document.getElementById('abt-lightbox-img');
    lbImg.src = src; lbImg.alt = alt;
    lb.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    document.getElementById('abt-lightbox').style.display = 'none';
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeLightbox(); });
</script>

<?php wp_footer(); ?>
</body>
</html>
