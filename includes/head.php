<?php
$page_title = $page_title ?? 'TrustX Pro — Product authenticity & loyalty platform';
$page_description = $page_description ?? 'TrustX Pro helps brands protect products with secure QR labels, run mechanic loyalty rewards, and manage distribution — from factory floor to field.';
$page_canonical = $page_canonical ?? 'https://trustxpro.in/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<?php if (!empty($google_site_verification)): ?>
  <meta name="google-site-verification" content="<?php echo htmlspecialchars($google_site_verification, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="icon" type="image/png" href="/assets/img/logo-mark.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/site.css">
</head>
<body>
  <a class="skip" href="#main">Skip to content</a>
