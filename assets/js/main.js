/**
 * ABT Theme v2 — Main JS
 */
document.addEventListener('DOMContentLoaded', function() {

    /* Mobile Menu Toggle */
    var toggle = document.getElementById('mobileMenuToggle');
    var nav = document.getElementById('mainNav');
    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            var isOpen = nav.style.display === 'flex';
            if (isOpen) {
                nav.style.display = '';
                nav.style.flexDirection = '';
                nav.style.position = '';
                nav.style.top = '';
                nav.style.left = '';
                nav.style.right = '';
                nav.style.background = '';
                nav.style.padding = '';
                nav.style.boxShadow = '';
                nav.style.gap = '';
                nav.style.zIndex = '';
            } else {
                nav.style.display = 'flex';
                nav.style.flexDirection = 'column';
                nav.style.position = 'absolute';
                nav.style.top = '100%';
                nav.style.left = '0';
                nav.style.right = '0';
                nav.style.background = '#fff';
                nav.style.padding = '24px';
                nav.style.boxShadow = '0 8px 32px rgba(0,0,0,0.12)';
                nav.style.gap = '16px';
                nav.style.zIndex = '999';
            }
        });
    }

    /* FAQ Accordion */
    window.toggleFaq = function(el) {
        var item = el.parentElement;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function(openItem) {
            openItem.classList.remove('open');
        });
        if (!isOpen) {
            item.classList.add('open');
        }
    };

    /* Contact Form Submission */
    var form = document.getElementById('abtContactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var btn = form.querySelector('button[type="submit"]');
            var status = document.getElementById('formStatus');
            var originalText = btn.textContent;
            btn.textContent = 'Sending...';
            btn.disabled = true;

            var data = {
                'First Name': form.querySelector('[name="first_name"]').value,
                'Last Name': form.querySelector('[name="last_name"]').value,
                'Phone': form.querySelector('[name="phone"]').value,
                'Email': form.querySelector('[name="email"]').value,
                'How can we help?': form.querySelector('[name="message"]').value,
                'Best time to reach you': form.querySelector('[name="best_time"]') ? form.querySelector('[name="best_time"]').value : '',
                'Location:': form.querySelector('[name="location"]') ? form.querySelector('[name="location"]').value : '',
                'source': 'ABT Website Contact Form'
            };

            var webhookUrl = (typeof abtAjax !== 'undefined' && abtAjax.url)
                ? abtAjax.url + '?action=abt_form_submit'
                : 'https://squarecloud.app.n8n.cloud/webhook/e6115635-192d-4416-a2ee-7d3e9106fe6f';

            fetch(webhookUrl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            })
            .then(function(res) {
                if (status) {
                    status.textContent = 'Thank you! We\'ll be in touch soon.';
                    status.className = 'form-status success';
                }
                form.reset();
            })
            .catch(function(err) {
                if (status) {
                    status.textContent = 'Something went wrong. Please call us at 888-830-1672.';
                    status.className = 'form-status error';
                }
            })
            .finally(function() {
                btn.textContent = originalText;
                btn.disabled = false;
            });
        });
    }

});
