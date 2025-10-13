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
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="icon" type="image/svg+xml" href="assets/img/logo.svg" />
</head>
<body>
  <div style="position:fixed;top:10px;right:10px;background:#3248AD;color:#fff;padding:5px 10px;font-size:12px;border-radius:4px;z-index:9999;">
  STAGING SITE
</div>
<header class="site-header">
  <div class="container nav">
    <a class="nav__brand" href="index.php" aria-label="LevelMinds home">
      <img class="nav__logo-img" src="assets/img/logo.svg" alt="LevelMinds logo">
      <span class="nav__title">LevelMinds</span>
    </a>
    <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="site-nav">
      <span></span>
    </button>
    <div class="nav__menu" id="site-nav">
      <nav class="nav__links" aria-label="Primary navigation">
        <a href="index.php">Home</a>
        <a href="team.php">Team</a>
        <a href="tour.php">Tour</a>
        <a href="careers.php">Careers</a>
        <a href="contact.php">Contact</a>
      </nav>
      <div class="nav__actions">
        <a class="btn btn-primary" href="https://lmap.in/login">Login / Sign Up</a>
      </div>
    </div>
  </div>
</header>
