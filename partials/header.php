<?php
if (!isset($pageTitle)) { $pageTitle = "LevelMinds"; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="LevelMinds is a skill-first hiring platform connecting schools and teachers with transparent workflows and digital profiles." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Public+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJ+Y3VCRa14O/2QRd8G8jM7Qp1aijB4Z2sqI=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" integrity="sha384-MUdXdzn1OB/0zkr4yGLnCqZ/n9ut5N7Ifes9RP2d5xKsTtcPiuiwthWczWuiqFOn" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" integrity="sha384-3wRRg17hVCopINZVYCqnfbgXE7aFPSvawmLWNPSiUPVx+HxY+yxb5Cwp5mT7RXPD" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-pvOCc7n4/jr2dI+tvwlHGawEq+y3OC/YLXTr4a9L5xRcmk6VwBEm90LkAMPye/+qvOBvybOkHqvCO6L73X6zRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/svg+xml" href="assets/img/logo.svg" />
</head>
<body class="has-fixed-header">
  <div style="position:fixed;top:10px;right:10px;background:#3248AD;color:#fff;padding:5px 10px;font-size:12px;border-radius:4px;z-index:9999;">
  STAGING SITE
</div>
<header class="site-header" data-header>
  <div class="container site-header__inner">
    <a class="nav__brand" href="index.php" aria-label="LevelMinds home">
      <img class="nav__logo-img" src="assets/img/logo.svg" alt="LevelMinds logo">
      <span class="nav__title">LevelMinds</span>
    </a>
    <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Toggle navigation" data-nav-toggle>
      <span></span>
    </button>
    <div class="nav__menu" id="site-nav" data-nav-menu aria-hidden="true">
      <nav class="nav__links" aria-label="Primary navigation">
        <a href="index.php">Home</a>
        <a href="team.php">Team</a>
        <a href="tour.php">Tour</a>
        <a href="careers.php">Careers</a>
        <a href="contact.php">Contact</a>
      </nav>
      <div class="nav__actions">
        <a class="btn btn-primary nav__cta" href="https://lmap.in/login">
          <svg class="icon icon--spark" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M12 3.25 13.62 8l4.88 1.12L14.5 12l.74 5-3.24-2.62L8.76 17l.74-5-3.99-2.88L10.5 8 12 3.25Z" fill="currentColor"/>
          </svg>
          <span>Login / Sign Up</span>
        </a>
      </div>
    </div>
  </div>
  <div class="nav__backdrop" data-nav-backdrop aria-hidden="true"></div>
</header>
