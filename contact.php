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
  <section class="page-hero page-hero--contact surface-parallax">
    <div class="container contact-hero" data-aos="fade-right">
      <span class="badge">Contact</span>
      <h1>We would love to hear from you</h1>
      <p class="lead">Whether you are a school, teacher, or partner, reach out and we will respond within two business days.</p>
    </div>
  </section>

  <section class="section contact-section">
    <div class="container contact-grid">
      <aside class="contact-info" data-aos="fade-right">
        <div class="contact-info__card">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-building.svg" alt="Location icon" loading="lazy">
          </span>
          <div>
            <h2>Visit us</h2>
            <p>Delhi, India</p>
            <span class="contact-info__meta">Skill-first hiring built close to classrooms.</span>
          </div>
        </div>
        <div class="contact-info__list">
          <div class="contact-info__item">
            <span class="icon-circle icon-circle--soft">
              <img src="assets/icons/icon-documents.svg" alt="Email icon" loading="lazy">
            </span>
            <div>
              <strong>Email</strong>
              <a href="mailto:support@levelminds.in">support@levelminds.in</a>
              <span class="contact-info__meta">Support hours: 10 AM – 6 PM IST</span>
            </div>
          </div>
          <div class="contact-info__item">
            <span class="icon-circle icon-circle--soft">
              <img src="assets/icons/icon-hand-user.svg" alt="Phone icon" loading="lazy">
            </span>
            <div>
              <strong>Phone / WhatsApp</strong>
              <a href="tel:+917303835892">+91 73038 35892</a>
              <span class="contact-info__meta">Prefer email? We respond within two business days.</span>
            </div>
          </div>
        </div>
        <div class="contact-info__cta">
          <h3>Looking to collaborate?</h3>
          <p>For press, partnerships, or workshops, drop us a note and we will tailor a follow-up.</p>
          <a class="btn btn-secondary" href="mailto:support@levelminds.in">Email the team</a>
        </div>
      </aside>
      <div class="contact-form" data-aos="fade-left">
        <div class="contact-form__card">
          <h2>Send us a message</h2>
          <p class="lead">Share as much context as possible so our team can tailor the next steps.</p>
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
      </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
