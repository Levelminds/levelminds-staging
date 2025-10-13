<?php
$pageTitle = "Careers - LevelMinds";
include 'partials/header.php';
require_once __DIR__ . '/includes/mailer.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lm_career'])) {
 

  // Get and sanitize form inputs
  $name = trim($_POST['fullname'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $college = trim($_POST['college'] ?? '');
  $linkedin = trim($_POST['linkedin'] ?? '');
  $plan = trim($_POST['plan'] ?? '');

  // Prepare fields for email
  $fields = [
    'Full Name' => $name,
    'Email' => $email,
    'Phone / WhatsApp' => $phone,
    'College / University' => $college,
    'LinkedIn Profile' => $linkedin,
    'How will you help teachers find opportunities?' => $plan
  ];

  // Send using same working mail function
  $result = lm_send_dual_mail('Career Program', $email, $name, $fields);

  // Redirect or show error
  if (!empty($result['ok'])) {
    header('Location: thank-you.php?t=career');
    exit;
  } else {
    $error = 'Sorry, we could not submit your application right now.';
  }
}

?>
<main>
  <section class="page-hero">
    <div class="container split-layout">
      <div class="stack">
        <span class="badge">Campus ambassador program</span>
        <h1>Bring LevelMinds to your campus</h1>
        <p class="lead">Help teachers discover new opportunities while gaining leadership experience and building a network across schools.</p>
        <div class="hero__actions">
          <a class="btn btn-primary" href="#apply">Apply now</a>
          <a class="btn btn-secondary" href="contact.php">Talk to our team</a>
        </div>
      </div>
      <div class="product-frame product-frame--hero">
        <img src="assets/img/careers1.png" alt="LevelMinds ambassadors collaborating in a modern workspace">
      </div>
    </div>
  </section>

  <section class="section section--light">
    <div class="container feature-grid">
      <article class="card">
        <h3>What you will do</h3>
        <ul class="list-check">
          <li>Host micro sessions, webinars, and meetups on campus</li>
          <li>Identify teachers and alumni exploring new school roles</li>
          <li>Share LevelMinds updates across student communities</li>
        </ul>
      </article>
      <article class="card">
        <h3>Why it matters</h3>
        <ul class="list-check">
          <li>Shape how teachers find verified school opportunities</li>
          <li>Earn leadership certificates and LevelMinds merch</li>
          <li>Join product workshops with our founding team</li>
        </ul>
      </article>
      <article class="card">
        <h3>Perks you will love</h3>
        <ul class="list-check">
          <li>Letter of recommendation on completion</li>
          <li>Priority access to internships and events</li>
          <li>Monthly recognition for standout ambassadors</li>
        </ul>
      </article>
    </div>
  </section>

  <section class="section" id="apply">
    <div class="container contact-panels">
      <div class="card card--raised">
        <span class="eyebrow">Application snapshot</span>
        <h2>Apply to become a campus ambassador</h2>
        <p class="lead">Tell us about your campus, communities, and how you plan to support teachers. Our ambassador success team reviews every application and reaches out with next steps.</p>
        <ul class="list-check">
          <li>Applications reviewed weekly</li>
          <li>Support from the LevelMinds team</li>
          <li>Opportunities to co-host future programs</li>
        </ul>
      </div>
      <div class="card">
        <?php if ($error): ?>
          <div class="alert error"><?= lm_sanitize($error) ?></div>
        <?php endif; ?>
        <form method="post" class="form">
          <input type="hidden" name="lm_career" value="1" />
          <div class="field two">
            <div>
              <label for="fullname">Full Name *</label>
              <input id="fullname" name="fullname" type="text" required />
            </div>
            <div>
              <label for="email">Email *</label>
              <input id="email" name="email" type="email" required />
            </div>
          </div>

          <div class="field two">
            <div>
              <label for="phone">Phone / WhatsApp</label>
              <input id="phone" name="phone" type="text" />
            </div>
            <div>
              <label for="college">College / University *</label>
              <input id="college" name="college" type="text" required />
            </div>
          </div>

          <div class="field">
            <label for="linkedin">LinkedIn Profile</label>
            <input id="linkedin" name="linkedin" type="url" placeholder="https://linkedin.com/in/you" />
          </div>

          <div class="field">
            <label for="plan">How will you help teachers find opportunities?</label>
            <textarea id="plan" name="plan" rows="5" placeholder="Share your plan, student communities, or past experience"></textarea>
          </div>

          <button class="btn btn-primary" type="submit">Submit application</button>
        </form>
      </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
