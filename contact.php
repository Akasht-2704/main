<?php
$page_title = 'Contact — TrustX Pro';
$page_description = 'Talk to TrustX Pro about product labels, loyalty, and distribution. Call 9826045670 or email trustxplus@gmail.com.';
$page_canonical = 'https://trustxpro.in/contact.php';
$nav_home = 'index.php';
$nav_prefix = 'index.php';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

  <main id="main">
    <header class="page-hero">
      <div class="page-hero__inner">
        <p class="eyebrow">Contact</p>
        <h1>Talk to us</h1>
        <p>Tell us about your product line and label workflow. Call, WhatsApp, or email — we’ll map TrustX Pro to your plant and channel setup.</p>
      </div>
    </header>

    <section class="contact-page">
      <div class="contact-page__inner">
        <article class="contact-card contact-card--phone">
          <p class="contact-card__label">Phone</p>
          <a class="contact-card__value" href="tel:+919826045670">+91 98260 45670</a>
          <div class="contact-card__actions">
            <a class="btn btn--primary" href="tel:+919826045670">Call</a>
            <a class="btn btn--ghost" href="https://wa.me/919826045670" target="_blank" rel="noopener">WhatsApp</a>
          </div>
        </article>

        <article class="contact-card">
          <p class="contact-card__label">Email</p>
          <a class="contact-card__value contact-card__value--mail" href="mailto:trustxplus@gmail.com">trustxplus@gmail.com</a>
          <p class="contact-card__note">For demos, onboarding, and product questions.</p>
        </article>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
