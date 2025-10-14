<?php
$pageTitle = "Careers - LevelMinds";
include 'partials/header.php';
require_once __DIR__ . '/includes/mailer.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lm_career'])) {
  $name = trim($_POST['fullname'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $college = trim($_POST['college'] ?? '');
  $linkedin = trim($_POST['linkedin'] ?? '');
  $plan = trim($_POST['plan'] ?? '');

  $fields = [
    'Full Name' => $name,
    'Email' => $email,
    'Phone / WhatsApp' => $phone,
    'College / University' => $college,
    'LinkedIn Profile' => $linkedin,
    'How will you help teachers find opportunities?' => $plan
  ];

  $result = lm_send_dual_mail('Career Program', $email, $name, $fields);

  if (!empty($result['ok'])) {
    header('Location: thank-you.php?t=career');
    exit;
  } else {
    $error = 'Sorry, we could not submit your application right now.';
  }
}
?>
<main>
  <section class="page-hero page-hero--careers surface-parallax">
    <div class="container careers-hero">
      <div class="careers-hero__content" data-aos="fade-right">
        <span class="badge">Campus ambassador program</span>
        <h1>Bring LevelMinds to your campus</h1>
        <p class="lead">Help teachers discover new opportunities while gaining leadership experience and building a network across schools.</p>
        <div class="careers-hero__chips">
          <div class="careers-chip" data-aos="zoom-in">
            <span class="icon-circle icon-circle--soft">
              <img src="assets/icons/icon-hand-user.svg" alt="Mentor icon" loading="lazy">
            </span>
            <div>
              <strong>Lead micro-programs</strong>
              <span>Host events, webinars, and discovery circles for teachers.</span>
            </div>
          </div>
          <div class="careers-chip" data-aos="zoom-in" data-aos-delay="120">
            <span class="icon-circle icon-circle--soft">
              <img src="assets/icons/icon-presentation-trend.svg" alt="Growth icon" loading="lazy">
            </span>
            <div>
              <strong>Grow with LevelMinds</strong>
              <span>Access coaching, certifications, and internships with our team.</span>
            </div>
          </div>
        </div>
        <div class="hero__actions">
          <a class="btn btn-primary" href="#apply">Apply now</a>
          <a class="btn btn-secondary" href="contact.php">Talk to our team</a>
        </div>
      </div>
      <div class="careers-hero__media" data-aos="fade-left">
        <div class="careers-hero__art" aria-hidden="true">
          <span class="careers-hero__spark"></span>
          <span class="careers-hero__bubble careers-hero__bubble--primary">
            <img src="assets/icons/icon-atom-orbit.svg" alt="" loading="lazy">
          </span>
          <span class="careers-hero__bubble careers-hero__bubble--secondary">
            <img src="assets/icons/icon-hand-user.svg" alt="" loading="lazy">
          </span>
          <span class="careers-hero__bubble careers-hero__bubble--tertiary">
            <img src="assets/icons/icon-profile-shield.svg" alt="" loading="lazy">
          </span>
        </div>
        <div class="careers-hero__stat" data-aos="zoom-in" data-aos-delay="180">
          <span class="icon-circle icon-circle--soft">
            <img src="assets/icons/icon-briefcase.svg" alt="Briefcase icon" loading="lazy">
          </span>
          <div>
            <strong>200+ campus activities</strong>
            <p>Across workshops, job clinics, and mentor panels in the last 12 months.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section surface-gradient careers-highlights">
    <div class="container">
      <div class="section__header center" data-aos="fade-up">
        <span class="eyebrow">Why ambassadors love the program</span>
        <h2>Create impact while sharpening your leadership</h2>
        <p class="lead">You will champion transparent hiring for teachers, gain project experience, and access exclusive sessions with our founding team.</p>
      </div>
      <div class="careers-highlights__grid">
        <article class="value-card" data-aos="fade-right">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-atom-orbit.svg" alt="Orbit icon" loading="lazy">
          </span>
          <h3>Community events</h3>
          <p>Host meetups, live demos, and guidance circles for teachers exploring new roles.</p>
        </article>
        <article class="value-card" data-aos="zoom-in" data-aos-delay="120">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-documents.svg" alt="Documents icon" loading="lazy">
          </span>
          <h3>Exclusive learning tracks</h3>
          <p>Join product jams, leadership labs, and resume clinics with LevelMinds mentors.</p>
        </article>
        <article class="value-card" data-aos="fade-left" data-aos-delay="240">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-shield-check.svg" alt="Shield icon" loading="lazy">
          </span>
          <h3>Rewards that matter</h3>
          <p>Earn certificates, recommendation letters, and priority access to internships.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section--muted surface-parallax careers-steps">
    <div class="container">
      <div class="section__header center" data-aos="fade-up">
        <span class="eyebrow">How it works</span>
        <h2>Your journey as a LevelMinds ambassador</h2>
        <p class="lead">We support you with resources, mentorship, and a structured roadmap from onboarding to graduation.</p>
      </div>
      <div class="careers-steps__grid">
        <article class="tour-card" data-aos="fade-right">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-user-circle.svg" alt="Profile icon" loading="lazy">
          </span>
          <h3>Onboarding sprint</h3>
          <p>Meet the team, explore program playbooks, and set goals for your campus.</p>
        </article>
        <article class="tour-card" data-aos="zoom-in" data-aos-delay="100">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-hand-user.svg" alt="Handshake icon" loading="lazy">
          </span>
          <h3>Community activation</h3>
          <p>Run discovery sessions, share opportunities, and gather teacher insights.</p>
        </article>
        <article class="tour-card" data-aos="fade-left" data-aos-delay="200">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-presentation-trend.svg" alt="Presentation icon" loading="lazy">
          </span>
          <h3>Impact showcase</h3>
          <p>Present outcomes to the LevelMinds crew and receive feedback plus recognition.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section careers-apply vanta-host" id="apply">
    <div id="careers-vanta" class="vanta-surface" aria-hidden="true"></div>
    <div class="container careers-apply__grid">
      <div class="careers-apply__info" data-aos="fade-right">
        <span class="eyebrow">Application snapshot</span>
        <h2>Apply to become a campus ambassador</h2>
        <p class="lead">Tell us about your campus, communities, and how you plan to support teachers. Our ambassador success team reviews every application and reaches out with next steps.</p>
        <ul class="list-check">
          <li>Applications reviewed weekly</li>
          <li>Support from the LevelMinds team</li>
          <li>Opportunities to co-host future programs</li>
        </ul>
        <div class="careers-apply__note">
          <span class="icon-circle icon-circle--soft">
            <img src="assets/icons/icon-briefcase.svg" alt="Briefcase icon" loading="lazy">
          </span>
          <div>
            <strong>Need more context?</strong>
            <p>Write to <a href="mailto:support@levelminds.in">support@levelminds.in</a> and we will share the program guide.</p>
          </div>
        </div>
      </div>
      <div class="careers-apply__form" data-aos="fade-left">
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
