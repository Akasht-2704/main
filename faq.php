<?php
$page_title = 'FAQ — TrustX Pro';
$page_description = 'Frequently asked questions about TrustX Pro product authenticity, QR scanning, loyaltypoint rewards, and support.';
$page_canonical = 'https://trustxpro.in/faq';
$nav_home = '/';
$nav_prefix = '/';

$faqs = [
    'General' => [
        [
            'q' => 'What is TrustX Pro?',
            'a' => 'TrustX Pro is a product-authenticity and loyalty platform that helps brands issue unique QR codes, validate product scans, engage customers and channel partners, and manage distribution-related workflows.',
        ],
        [
            'q' => 'Who can use TrustX Pro?',
            'a' => 'TrustX Pro is designed for manufacturers, brand owners, distributors, retailers, mechanics and other approved field-network participants. Available features depend on the account role and the programme configured by the brand.',
        ],
        [
            'q' => 'Which industries can use the platform?',
            'a' => 'The platform is suitable for businesses shipping physical products, including automotive aftermarket, FMCG and industrial goods. Other product categories can be supported based on the brand’s requirements.',
        ],
        [
            'q' => 'Is TrustX Pro available on mobile?',
            'a' => 'TrustX Pro supports mobile experiences for activities such as QR scanning and checking loyalty information. The exact features available depend on the mobile experience and your account permissions.',
        ],
    ],
    'QR Scanning & Product Authenticity' => [
        [
            'q' => 'How do I verify whether a product is genuine?',
            'a' => 'Open the TrustX Pro scanning experience and scan the QR code printed on the product label or pack. The platform checks the code against the brand’s issued-code records and displays the verification result available for that code.',
        ],
        [
            'q' => 'What should I do if a QR code shows an invalid or suspicious result?',
            'a' => 'Do not treat the product as verified. Check that the code is clearly visible and scan it again. If the result remains invalid or suspicious, retain the product and packaging details and contact the brand or TrustX Pro support.',
        ],
        [
            'q' => 'Can the same QR code be scanned more than once?',
            'a' => 'Scan behaviour depends on the brand’s programme rules. Some programmes may allow repeat scans for viewing or tracking, while reward eligibility may be limited. Follow the message shown after scanning and the brand’s published programme rules.',
        ],
        [
            'q' => 'Does a successful scan guarantee that a product cannot be counterfeit?',
            'a' => 'A successful scan confirms that the code has been recognised by the platform. It is an anti-counterfeit signal, not an absolute guarantee against every form of tampering, copying or product substitution. Check the complete verification message and contact the brand if anything appears unusual.',
        ],
        [
            'q' => 'Where can I find the QR code?',
            'a' => 'Look for the TrustX Pro or brand QR label on the product, pack or carton. The placement can vary by product and manufacturer.',
        ],
    ],
    'Loyalty Points & Rewards' => [
        [
            'q' => 'How can I earn loyaltypoint rewards?',
            'a' => 'If you are enrolled in a participating brand’s loyalty programme, scan an eligible product code while signed in to your account. Points are credited only when the scan meets that programme’s rules.',
        ],
        [
            'q' => 'Where can I check my points balance?',
            'a' => 'Sign in to the TrustX Pro app or portal and open the Loyalty section. Your available balance and other programme information will be shown according to your account permissions.',
        ],
        [
            'q' => 'Why have points not been credited after scanning?',
            'a' => 'Points may not be credited if the code is invalid, already used for rewards, not eligible for the programme, scanned outside the permitted period, or associated with an account or role that is not eligible. Review the scan result and programme rules. If the issue continues, contact support with the scan details.',
        ],
        [
            'q' => 'How do I redeem my loyalty points?',
            'a' => 'Open the Loyalty or Rewards section and check the redemption options enabled by the brand. Follow the on-screen instructions. Available rewards, minimum balances and redemption conditions are set by the participating brand.',
        ],
        [
            'q' => 'Can I transfer my points to another person?',
            'a' => 'Point transfers are controlled by the individual brand’s programme. Unless a transfer option is expressly available in your account or programme rules, points should be treated as non-transferable.',
        ],
        [
            'q' => 'Can I view my loyalty transaction history?',
            'a' => 'Where enabled for your role, the Loyalty section provides access to points activity or a statement. Some accounts may also offer date-range and search filters.',
        ],
    ],
    'Distributors, Retailers & Field Teams' => [
        [
            'q' => 'How does TrustX Pro help distributors?',
            'a' => 'Distributor workflows can support stock visibility, dispatch, ownership trails, stock activation and transfers. The exact workflow depends on the brand’s configuration and the distributor’s assigned permissions.',
        ],
        [
            'q' => 'Can a retailer or mechanic register for the loyalty programme?',
            'a' => 'Registration and participation depend on the brand’s programme. If role approval is required, submit the requested details and wait for the brand or authorised administrator to approve the account.',
        ],
        [
            'q' => 'Why can’t I see distributor or retailer features in my account?',
            'a' => 'Features are shown according to your assigned role and access permissions. Contact your brand administrator if you believe your account should have access to a particular module.',
        ],
        [
            'q' => 'Can stock be tracked from the manufacturer to the retailer?',
            'a' => 'TrustX Pro supports configured plant-to-field workflows. Unique codes and parent–child relationships can connect individual units with cartons or batches, while authorised users can manage supported dispatch and transfer activities.',
        ],
    ],
    'Account, Security & Support' => [
        [
            'q' => 'I cannot log in. What should I do?',
            'a' => 'Check that you are using the registered mobile number or login details associated with your account. If an OTP is required, confirm that your phone can receive messages. If you remain unable to log in, contact support.',
        ],
        [
            'q' => 'How should I keep my account secure?',
            'a' => 'Keep your login credentials and OTPs private, use accurate account information, and sign out on shared devices. Never share an OTP with anyone claiming to be a support representative.',
        ],
        [
            'q' => 'How can I correct my account or profile details?',
            'a' => 'Use the profile or account settings available to you. If a detail cannot be edited, contact your brand administrator or TrustX Pro support and provide the registered account information needed to identify the issue.',
        ],
        [
            'q' => 'How do I contact TrustX Pro?',
            'a' => 'Visit the Contact page, email trustxplus@gmail.com, or call +91 98260 45670. When reporting a problem, include a short description of the issue and relevant product, scan or account details. Do not send your password or OTP.',
        ],
        [
            'q' => 'Where can I read the Terms & Conditions and Privacy Policy?',
            'a' => 'You can open the Terms and Privacy pages from the website footer. These documents explain the terms governing the services and how information is handled.',
        ],
    ],
];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

  <main id="main">
    <header class="page-hero">
      <div class="page-hero__inner">
        <p class="eyebrow">Help centre</p>
        <h1>Frequently asked questions</h1>
        <p>Answers about authenticity scans, loyaltypoint rewards, accounts, and support.</p>
      </div>
    </header>

    <section class="faq-page" aria-label="Frequently asked questions">
      <div class="faq-page__inner">
        <label class="faq-search">
          <span class="visually-hidden">Search questions</span>
          <input type="search" id="faqSearch" placeholder="Search your question..." aria-label="Search frequently asked questions">
        </label>

        <div id="faqContainer">
          <?php foreach ($faqs as $category => $questions): ?>
            <section class="faq-category">
              <h2><?php echo htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?></h2>
              <?php foreach ($questions as $faq): ?>
                <article class="faq-item">
                  <button class="faq-question" type="button" aria-expanded="false">
                    <span><?php echo htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="faq-plus" aria-hidden="true">+</span>
                  </button>
                  <div class="faq-answer">
                    <p><?php echo htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
                  </div>
                </article>
              <?php endforeach; ?>
            </section>
          <?php endforeach; ?>
        </div>

        <div class="faq-empty" id="faqEmpty" hidden>No matching questions found.</div>

        <div class="faq-cta">
          <div>
            <h2>Still need help?</h2>
            <p>Call or message us and we’ll help with scans, loyaltypoint, or onboarding.</p>
          </div>
          <a class="btn btn--primary" href="/contact">Contact us</a>
        </div>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
