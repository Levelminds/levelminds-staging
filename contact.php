<?php
$pageTitle = "Contact - LevelMinds";
include 'partials/header.php';
require_once __DIR__ . '/includes/mailer.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lm_contact'])) {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $subject = $_POST['subject'] ?? 'General message';
  $message = $_POST['message'] ?? '';

  $result = lm_send_dual_mail(
    'Contact',
    $email,
    $name,
    ['Name' => $name, 'Email' => $email, 'Subject' => $subject, 'Message' => $message]
  );

  if ($result['ok']) {
    header('Location: thank-you.php?t=contact');
    exit;
  } else {
    $error = $result['error'] ?? 'Sorry, we could not send your message right now.';
  }
}
?>
<main>
  <section class="page-hero">
    <div class="container stack">
      <span class="badge">Contact</span>
      <h1>We would love to hear from you</h1>
      <p class="lead">Whether you are a school, teacher, or partner, reach out and we will respond within two business days.</p>
    </div>
  </section>

  <section class="section">
    <div class="container contact-panels">
      <div class="card">
        <h2>Send us a message</h2>
        <p class="lead">Let us know how we can help. Share as much context as possible so our team can tailor the next steps.</p>
        <?php if ($error): ?>
          <div class="alert error"><?= lm_sanitize($error) ?></div>
        <?php endif; ?>
        <form method="post" class="form">
          <input type="hidden" name="lm_contact" value="1" />
          <div class="field">
            <label for="name">Full Name *</label>
            <input id="name" name="name" type="text" required />
          </div>
          <div class="field two">
            <div>
              <label for="email">Email *</label>
              <input id="email" name="email" type="email" required />
            </div>
            <div>
              <label for="subject">Subject</label>
              <input id="subject" name="subject" type="text" placeholder="General inquiry" />
            </div>
          </div>
          <div class="field">
            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="6" required placeholder="Share how we can support your hiring goals"></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Send message</button>
        </form>
      </div>
      <aside class="contact-side">
        <div class="card">
          <h3>Head office</h3>
          <p>Delhi, India</p>
          <ul class="list-check">
            <li>Email: <a href="mailto:support@levelminds.in">support@levelminds.in</a></li>
            <li>Support hours: 10 AM - 6 PM IST</li>
          </ul>
        </div>
        <div class="card">
          <h3>Campus ambassador</h3>
          <p>Interested in our campus programs? Submit an application and our ambassador success team will reach out.</p>
          <a class="btn btn-secondary btn-sm" href="careers.php">Go to careers</a>
        </div>
        <div class="card card--outline">
          <h3>Press and partnerships</h3>
          <p>Write to <a href="mailto:support@levelminds.in">support@levelminds.in</a> for media, events, or collaboration opportunities.</p>
        </div>
      </aside>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
