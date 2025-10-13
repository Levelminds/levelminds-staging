<?php $pageTitle = "Thank you - LevelMinds"; include 'partials/header.php'; ?>
<main>
  <section class="page-hero section--muted">
    <div class="container stack center">
      <h1>Thank you!</h1>
      <?php $t = $_GET['t'] ?? 'contact'; ?>
      <p class="lead">We received your <?= htmlspecialchars($t) ?> form. Our team will reach out soon.</p>
      <div class="hero__actions">
        <a class="btn btn-primary" href="index.php">Back to home</a>
        <a class="btn btn-secondary" href="tour.php">Explore the tour</a>
      </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
