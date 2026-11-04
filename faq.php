<?php
/**
 * TrustX Pro — Frequently Asked Questions
 * Place this file in the website root as FAQ.php.
 */
$faqs = [
    'General' => [
        [
            'q' => 'What is TrustX Pro?',
            'a' => 'TrustX Pro is a product-authenticity and loyalty platform that helps brands issue unique QR codes, validate product scans, engage customers and channel partners, and manage distribution-related workflows.'
        ],
        [
            'q' => 'Who can use TrustX Pro?',
            'a' => 'TrustX Pro is designed for manufacturers, brand owners, distributors, retailers, mechanics and other approved field-network participants. Available features depend on the account role and the programme configured by the brand.'
        ],
        [
            'q' => 'Which industries can use the platform?',
            'a' => 'The platform is suitable for businesses shipping physical products, including automotive aftermarket, FMCG and industrial goods. Other product categories can be supported based on the brand’s requirements.'
        ],
        [
            'q' => 'Is TrustX Pro available on mobile?',
            'a' => 'TrustX Pro supports mobile experiences for activities such as QR scanning and checking loyalty information. The exact features available depend on the mobile experience and your account permissions.'
        ],
    ],
    'QR Scanning & Product Authenticity' => [
        [
            'q' => 'How do I verify whether a product is genuine?',
            'a' => 'Open the TrustX Pro scanning experience and scan the QR code printed on the product label or pack. The platform checks the code against the brand’s issued-code records and displays the verification result available for that code.'
        ],
        [
            'q' => 'What should I do if a QR code shows an invalid or suspicious result?',
            'a' => 'Do not treat the product as verified. Check that the code is clearly visible and scan it again. If the result remains invalid or suspicious, retain the product and packaging details and contact the brand or TrustX Pro support.'
        ],
        [
            'q' => 'Can the same QR code be scanned more than once?',
            'a' => 'Scan behaviour depends on the brand’s programme rules. Some programmes may allow repeat scans for viewing or tracking, while reward eligibility may be limited. Follow the message shown after scanning and the brand’s published programme rules.'
        ],
        [
            'q' => 'Does a successful scan guarantee that a product cannot be counterfeit?',
            'a' => 'A successful scan confirms that the code has been recognised by the platform. It is an anti-counterfeit signal, not an absolute guarantee against every form of tampering, copying or product substitution. Check the complete verification message and contact the brand if anything appears unusual.'
        ],
        [
            'q' => 'Where can I find the QR code?',
            'a' => 'Look for the TrustX Pro or brand QR label on the product, pack or carton. The placement can vary by product and manufacturer.'
        ],
    ],
    'Loyalty Points & Rewards' => [
        [
            'q' => 'How can I earn loyalty points?',
            'a' => 'If you are enrolled in a participating brand’s loyalty programme, scan an eligible product code while signed in to your account. Points are credited only when the scan meets that programme’s rules.'
        ],
        [
            'q' => 'Where can I check my points balance?',
            'a' => 'Sign in to the TrustX Pro app or portal and open the Loyalty section. Your available balance and other programme information will be shown according to your account permissions.'
        ],
        [
            'q' => 'Why have points not been credited after scanning?',
            'a' => 'Points may not be credited if the code is invalid, already used for rewards, not eligible for the programme, scanned outside the permitted period, or associated with an account or role that is not eligible. Review the scan result and programme rules. If the issue continues, contact support with the scan details.'
        ],
        [
            'q' => 'How do I redeem my loyalty points?',
            'a' => 'Open the Loyalty or Rewards section and check the redemption options enabled by the brand. Follow the on-screen instructions. Available rewards, minimum balances and redemption conditions are set by the participating brand.'
        ],
        [
            'q' => 'Can I transfer my points to another person?',
            'a' => 'Point transfers are controlled by the individual brand’s programme. Unless a transfer option is expressly available in your account or programme rules, points should be treated as non-transferable.'
        ],
        [
            'q' => 'Can I view my loyalty transaction history?',
            'a' => 'Where enabled for your role, the Loyalty section provides access to points activity or a statement. Some accounts may also offer date-range and search filters.'
        ],
    ],
    'Distributors, Retailers & Field Teams' => [
        [
            'q' => 'How does TrustX Pro help distributors?',
            'a' => 'Distributor workflows can support stock visibility, dispatch, ownership trails, stock activation and transfers. The exact workflow depends on the brand’s configuration and the distributor’s assigned permissions.'
        ],
        [
            'q' => 'Can a retailer or mechanic register for the loyalty programme?',
            'a' => 'Registration and participation depend on the brand’s programme. If role approval is required, submit the requested details and wait for the brand or authorised administrator to approve the account.'
        ],
        [
            'q' => 'Why can’t I see distributor or retailer features in my account?',
            'a' => 'Features are shown according to your assigned role and access permissions. Contact your brand administrator if you believe your account should have access to a particular module.'
        ],
        [
            'q' => 'Can stock be tracked from the manufacturer to the retailer?',
            'a' => 'TrustX Pro supports configured plant-to-field workflows. Unique codes and parent–child relationships can connect individual units with cartons or batches, while authorised users can manage supported dispatch and transfer activities.'
        ],
    ],
    'Account, Security & Support' => [
        [
            'q' => 'I cannot log in. What should I do?',
            'a' => 'Check that you are using the registered mobile number or login details associated with your account. If an OTP is required, confirm that your phone can receive messages. If you remain unable to log in, contact support.'
        ],
        [
            'q' => 'How should I keep my account secure?',
            'a' => 'Keep your login credentials and OTPs private, use accurate account information, and sign out on shared devices. Never share an OTP with anyone claiming to be a support representative.'
        ],
        [
            'q' => 'How can I correct my account or profile details?',
            'a' => 'Use the profile or account settings available to you. If a detail cannot be edited, contact your brand administrator or TrustX Pro support and provide the registered account information needed to identify the issue.'
        ],
        [
            'q' => 'How do I contact TrustX Pro?',
            'a' => 'Email trustxplus@gmail.com or call +91 98260 45670. When reporting a problem, include a short description of the issue and relevant product, scan or account details. Do not send your password or OTP.'
        ],
        [
            'q' => 'Where can I read the Terms & Conditions and Privacy Policy?',
            'a' => 'You can access the Terms & Conditions and Privacy Policy from the website footer. These documents explain the terms governing the services and how information is handled.'
        ],
    ],
];

$faqJson = json_encode($faqs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find answers about TrustX Pro QR code verification, product authenticity, loyalty points, rewards and distribution workflows.">
    <meta name="theme-color" content="#0b5ed7">
    <title>FAQs — TrustX Pro</title>
    <style>
        :root {
            --primary: #1459c7;
            --primary-dark: #0d3f91;
            --ink: #17243b;
            --muted: #64748b;
            --line: #e5eaf2;
            --surface: #f5f8fd;
            --white: #fff;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            color: var(--ink);
            background: var(--white);
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        .site-header {
            height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 0 max(6%, calc((100% - 1160px) / 2));
            border-bottom: 1px solid var(--line);
            background: rgba(255,255,255,.96);
        }
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 21px;
            font-weight: 800;
            letter-spacing: -.7px;
            color: var(--primary-dark);
        }
        .brand-mark {
            width: 34px; height: 34px; border-radius: 10px;
            display: grid; place-items: center;
            color: #fff; background: var(--primary);
            font-size: 18px; font-weight: 800;
        }
        .nav { display: flex; align-items: center; gap: 28px; color: #40516b; font-size: 14px; font-weight: 600; }
        .nav a:hover { color: var(--primary); }
        .nav .contact-link { color: var(--primary); }
        .hero {
            padding: 76px 20px 66px;
            text-align: center;
            background: radial-gradient(ellipse at top, #eaf2ff 0%, #f7faff 48%, #fff 100%);
        }
        .eyebrow {
            display: inline-block; padding: 6px 13px; border-radius: 30px;
            background: #e4efff; color: var(--primary-dark);
            font-size: 12px; font-weight: 800; letter-spacing: 1.1px; text-transform: uppercase;
        }
        h1 { margin: 18px 0 12px; font-size: clamp(34px, 5vw, 52px); line-height: 1.12; letter-spacing: -1.8px; }
        .hero p { max-width: 650px; margin: 0 auto; color: var(--muted); font-size: 17px; }
        .faq-wrap { max-width: 980px; margin: 0 auto; padding: 58px 22px 82px; }
        .search-box {
            max-width: 620px; margin: 0 auto 42px; position: relative;
        }
        .search-box input {
            width: 100%; height: 56px; padding: 0 20px 0 50px;
            border: 1px solid #dce4f0; border-radius: 12px; outline: none;
            font: inherit; font-size: 15px; color: var(--ink);
            box-shadow: 0 8px 28px rgba(27, 63, 117, .06);
        }
        .search-box input:focus { border-color: #80a9eb; box-shadow: 0 0 0 4px #eaf2ff; }
        .search-icon { position: absolute; left: 18px; top: 14px; color: #7b8ba4; font-size: 20px; }
        .faq-category { margin: 0 0 34px; }
        .category-title {
            display: flex; align-items: center; gap: 12px;
            margin: 0 0 14px; font-size: 19px; letter-spacing: -.3px;
        }
        .category-title:before {
            content: ""; width: 4px; height: 23px; border-radius: 5px; background: var(--primary);
        }
        .faq-item { border: 1px solid var(--line); border-radius: 12px; margin: 10px 0; overflow: hidden; background: #fff; }
        .faq-question {
            width: 100%; display: flex; justify-content: space-between; align-items: center;
            gap: 20px; padding: 18px 20px; border: 0; background: #fff;
            color: var(--ink); text-align: left; font: inherit; font-size: 15px; font-weight: 700;
            cursor: pointer;
        }
        .faq-question:hover { color: var(--primary); background: #fbfdff; }
        .faq-question .plus {
            flex: 0 0 28px; width: 28px; height: 28px; display: grid; place-items: center;
            border-radius: 50%; background: #edf4ff; color: var(--primary);
            font-size: 20px; font-weight: 400; transition: transform .2s ease;
        }
        .faq-item.active { border-color: #c8daf7; box-shadow: 0 8px 24px rgba(25, 75, 145, .06); }
        .faq-item.active .faq-question { color: var(--primary-dark); }
        .faq-item.active .plus { transform: rotate(45deg); }
        .faq-answer { display: none; padding: 0 20px 19px; color: var(--muted); font-size: 14px; }
        .faq-item.active .faq-answer { display: block; }
        .faq-answer p { margin: 0; }
        .no-results { display: none; text-align: center; color: var(--muted); padding: 30px 10px; }
        .support-card {
            margin-top: 48px; padding: 34px 28px; border-radius: 18px;
            text-align: center; background: #f1f6ff; border: 1px solid #e0ebfc;
        }
        .support-card h2 { margin: 0 0 8px; font-size: 24px; letter-spacing: -.6px; }
        .support-card p { margin: 0 0 20px; color: var(--muted); }
        .support-actions { display: flex; justify-content: center; flex-wrap: wrap; gap: 12px; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            min-height: 44px; padding: 0 20px; border-radius: 9px;
            background: var(--primary); color: #fff; font-size: 14px; font-weight: 700;
        }
        .btn.secondary { background: #fff; color: var(--primary); border: 1px solid #cbdcf8; }
        .site-footer { padding: 34px 20px; background: #0c1c35; color: #d7e1f2; }
        .footer-inner { max-width: 1100px; margin: auto; display: flex; justify-content: space-between; gap: 28px; flex-wrap: wrap; }
        .footer-brand { color: #fff; font-size: 19px; font-weight: 800; }
        .footer-copy { color: #aebbd0; font-size: 13px; margin-top: 7px; }
        .footer-links { display: flex; flex-wrap: wrap; gap: 20px; align-items: center; font-size: 13px; }
        .footer-links a:hover { color: #fff; }
        @media (max-width: 680px) {
            .site-header { height: auto; min-height: 70px; padding: 15px 20px; align-items: flex-start; flex-direction: column; gap: 12px; }
            .nav { width: 100%; gap: 18px; overflow-x: auto; padding-bottom: 3px; white-space: nowrap; font-size: 13px; }
            .hero { padding: 58px 20px 50px; }
            .hero p { font-size: 15px; }
            .faq-wrap { padding: 38px 16px 58px; }
            .faq-question { padding: 16px; font-size: 14px; }
            .faq-answer { padding: 0 16px 17px; }
            .support-card { padding: 28px 18px; }
            .footer-inner { flex-direction: column; }
        }
    </style>
</head>
<body>
<header class="site-header">
    <a class="brand" href="index.php" aria-label="TrustX Pro home">
        <span class="brand-mark">T</span><span>TrustX Pro</span>
    </a>
    <nav class="nav" aria-label="Main navigation">
        <a href="index.php">Home</a>
        <a href="index.php#how-it-works">How it works</a>
        <a href="index.php#who-its-for">Who it's for</a>
        <a href="terms.php">Terms</a>
        <a href="privacy.php">Privacy</a>
        <a class="contact-link" href="mailto:trustxplus@gmail.com">Talk to us</a>
    </nav>
</header>

<main>
    <section class="hero">
        <span class="eyebrow">TrustX Pro Support</span>
        <h1>Frequently Asked Questions</h1>
        <p>Everything you need to know about product verification, QR scanning, loyalty rewards and managing your products with TrustX Pro.</p>
    </section>

    <section class="faq-wrap" aria-label="Frequently asked questions">
        <div class="search-box">
            <span class="search-icon" aria-hidden="true">⌕</span>
            <input type="search" id="faqSearch" placeholder="Search your question..." aria-label="Search frequently asked questions">
        </div>

        <div id="faqContainer">
            <?php foreach ($faqs as $category => $questions): ?>
                <section class="faq-category">
                    <h2 class="category-title"><?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?></h2>
                    <?php foreach ($questions as $index => $faq): ?>
                        <article class="faq-item">
                            <button class="faq-question" type="button" aria-expanded="false">
                                <span><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="plus" aria-hidden="true">+</span>
                            </button>
                            <div class="faq-answer">
                                <p><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </section>
            <?php endforeach; ?>
        </div>
        <div class="no-results" id="noResults">No matching questions found. Try another search term.</div>

        <section class="support-card">
            <h2>Still have a question?</h2>
            <p>Our team is here to help with your TrustX Pro account, product scans or loyalty programme.</p>
            <div class="support-actions">
                <a class="btn" href="mailto:trustxplus@gmail.com">Email Support</a>
                <a class="btn secondary" href="tel:+919826045670">Call +91 98260 45670</a>
            </div>
        </section>
    </section>
</main>

<footer class="site-footer">
    <div class="footer-inner">
        <div>
            <div class="footer-brand">TrustX Pro</div>
            <div class="footer-copy">Secure labels, scan loyalty, and distribution control — from plant to field.</div>
            <div class="footer-copy">© <?= date('Y') ?> TrustX Pro. All rights reserved.</div>
        </div>
        <nav class="footer-links" aria-label="Footer navigation">
            <a href="index.php">Home</a>
            <a href="terms.php">Terms &amp; Conditions</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="mailto:trustxplus@gmail.com">Contact</a>
        </nav>
    </div>
</footer>

<script>
document.querySelectorAll('.faq-question').forEach(function (button) {
    button.addEventListener('click', function () {
        var item = button.closest('.faq-item');
        var isOpen = item.classList.contains('active');
        item.classList.toggle('active', !isOpen);
        button.setAttribute('aria-expanded', String(!isOpen));
    });
});

var searchInput = document.getElementById('faqSearch');
var noResults = document.getElementById('noResults');

searchInput.addEventListener('input', function () {
    var term = this.value.trim().toLowerCase();
    var visibleCount = 0;

    document.querySelectorAll('.faq-category').forEach(function (category) {
        var categoryVisible = 0;
        category.querySelectorAll('.faq-item').forEach(function (item) {
            var matches = item.textContent.toLowerCase().includes(term);
            item.style.display = matches ? '' : 'none';
            if (matches) {
                categoryVisible++;
                visibleCount++;
            }
        });
        category.style.display = categoryVisible ? '' : 'none';
    });

    noResults.style.display = visibleCount ? 'none' : 'block';
});
</script>
</body>
</html>
