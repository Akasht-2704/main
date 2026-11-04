<?php
$page_title = 'Tutorial — TrustX Pro';
$page_description = 'Step-by-step TrustX Pro tutorial for QR verification, loyaltypoint rewards, and plant-to-field workflows.';
$page_canonical = 'https://trustxpro.in/tutorial';
$nav_home = '/';
$nav_prefix = '/';

$steps = [
    [
        'title' => 'Issue unique codes at the plant',
        'body' => 'Generate secure coupon / QR codes for your batch and print them on your label stock. Keep parent–child links so cartons and individual units stay tied together for audit and dispatch.',
    ],
    [
        'title' => 'Dispatch with ownership trails',
        'body' => 'Use client and distributor panels to run orders, print jobs, inventory, activation, and transfers. Stock moves with a clearer link back to the original packs.',
    ],
    [
        'title' => 'Scan to verify authenticity',
        'body' => 'Open the TrustX Pro scanning experience and scan the QR on the pack. The platform checks the code against issued records and shows the verification result available for that code.',
    ],
    [
        'title' => 'Earn and track loyaltypoint',
        'body' => 'When an eligible genuine code is scanned under a loyalty programme, points can be credited to the signed-in account. Check balances, gifts, and activity in the Loyalty section.',
    ],
    [
        'title' => 'Redeem according to brand rules',
        'body' => 'Open Rewards / Loyalty options enabled by the brand and follow on-screen steps. Minimum balances, gifts, and redemption conditions are controlled by the participating programme.',
    ],
];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

  <main id="main">
    <header class="page-hero">
      <div class="page-hero__inner">
        <p class="eyebrow">Tutorial</p>
        <h1>From print to scan to reward</h1>
        <p>A simple walkthrough of how TrustX Pro connects labels, authenticity checks, and loyaltypoint in the field.</p>
      </div>
    </header>

    <section class="content-page">
      <div class="content-page__inner">
        <ol class="tutorial-list">
          <?php foreach ($steps as $i => $step): ?>
            <li class="tutorial-step">
              <div class="tutorial-step__num"><?php echo str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT); ?></div>
              <div>
                <h2><?php echo htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p><?php echo htmlspecialchars($step['body'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ol>

        <div class="content-grid content-grid--two">
          <article class="content-card">
            <h3>Scan tips</h3>
            <p>Keep the QR clearly visible, use a steady camera, and follow the on-screen result. If a code looks invalid or suspicious, do not treat the product as verified — contact the brand or support.</p>
          </article>
          <article class="content-card">
            <h3>Need more help?</h3>
            <p>Check the FAQ for common scan and loyaltypoint questions, or reach us on phone and email from the Contact page.</p>
            <div class="content-card__links">
              <a href="/faq">Open FAQ</a>
              <a href="/contact">Contact us</a>
            </div>
          </article>
        </div>

        <article class="content-block content-block--cta">
          <div>
            <h2>Ready to try it on your next batch?</h2>
            <p>We’ll walk through label stock, scan flow, and loyaltypoint setup with your team.</p>
          </div>
          <a class="btn btn--primary" href="/contact">Request a demo</a>
        </article>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
