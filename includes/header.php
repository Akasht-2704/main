<?php
$nav_home = $nav_home ?? 'index.php';
$nav_prefix = $nav_prefix ?? '';
?>
  <header class="site-nav">
    <div class="site-nav__inner">
      <a class="brand" href="<?php echo htmlspecialchars($nav_home, ENT_QUOTES, 'UTF-8'); ?>">
        <img class="brand__logo" src="assets/img/logo.png" width="220" height="60" alt="Trustxpro">
      </a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-menu">Menu</button>
      <ul class="nav-links" id="nav-menu">
        <li><a href="<?php echo htmlspecialchars($nav_prefix, ENT_QUOTES, 'UTF-8'); ?>#how">How it works</a></li>
        <li><a href="<?php echo htmlspecialchars($nav_prefix, ENT_QUOTES, 'UTF-8'); ?>#who">Who it’s for</a></li>
        <li><a href="terms.php">Terms</a></li>
        <li><a href="privacy.php">Privacy</a></li>
        <li><a class="nav-cta" href="contact.php">Talk to us</a></li>
      </ul>
    </div>
  </header>
