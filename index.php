<?php
$pageTitle = "LevelMinds - Skill-first hiring for schools and teachers";
include 'partials/header.php';
require_once __DIR__ . '/partials/tour-slider.php';
?>
<main>
  <section class="hero hero--home patterned-surface">
    <div class="hero__background" aria-hidden="true">
      <span class="hero__beam hero__beam--one"></span>
      <span class="hero__beam hero__beam--two"></span>
      <span class="hero__orb hero__orb--primary"></span>
      <span class="hero__orb hero__orb--secondary"></span>
    </div>
    <div class="container hero__grid">
      <div class="hero__content" data-animate="fade-up">
        <div class="hero__slider" data-hero-slider>
          <div class="hero__slides" aria-live="polite">
            <article class="hero-slide is-active" data-hero-slide>
              <span class="badge badge--light">Skill-first hiring platform</span>
              <h1>Hiring that celebrates great teaching.</h1>
              <p class="lead">LevelMinds connects schools and educators through transparent pipelines, collaborative workflows, and digital profiles that highlight classroom impact.</p>
              <div class="hero__actions">
                <a class="btn btn-primary" href="https://lmap.in/signup">Sign Up as School</a>
                <a class="btn btn-secondary" href="https://lmap.in/signup">Sign Up as Teacher</a>
              </div>
            </article>
            <article class="hero-slide" data-hero-slide>
              <span class="badge badge--light">Dynamic dashboards</span>
              <h1>Keep every hiring stage in motion.</h1>
              <p class="lead">Automated reminders, smart filters, and collaborative notes help school teams move quickly while giving teachers clarity at each milestone.</p>
              <div class="hero__actions">
                <a class="btn btn-primary" href="tour.php">Explore the Product Tour</a>
                <a class="btn btn-secondary" href="https://lmap.in/login">Sign In to LevelMinds</a>
              </div>
            </article>
            <article class="hero-slide" data-hero-slide>
              <span class="badge badge--light">Built for teachers</span>
              <h1>Showcase the evidence behind your impact.</h1>
              <p class="lead">Share portfolios, track interviews, and highlight classroom wins with a digital profile that travels with every application.</p>
              <div class="hero__actions">
                <a class="btn btn-primary" href="https://lmap.in/signup">Create Your Profile</a>
                <a class="btn btn-secondary" href="contact.php">Talk to Our Team</a>
              </div>
            </article>
          </div>
          <div class="hero__slider-dots" role="tablist" aria-label="Hero slides"></div>
        </div>
        <dl class="metric-grid">
          <div class="metric metric--on-dark" data-animate="slide-up" data-tilt>
            <dt>
              <span class="metric__label">
                <span class="metric__icon" aria-hidden="true">
                  <img class="icon-figure" src="assets/img/icons/icon-building.svg" alt="" loading="lazy">
                </span>
                <span>Partner schools</span>
              </span>
            </dt>
            <dd>30+</dd>
          </div>
          <div class="metric metric--on-dark" data-animate="slide-up" data-tilt data-animate-delay="80">
            <dt>
              <span class="metric__label">
                <span class="metric__icon" aria-hidden="true">
                  <img class="icon-figure" src="assets/img/icons/icon-hand-user.svg" alt="" loading="lazy">
                </span>
                <span>Teacher profiles</span>
              </span>
            </dt>
            <dd>50+</dd>
          </div>
          <div class="metric metric--on-dark" data-animate="slide-up" data-tilt data-animate-delay="160">
            <dt>
              <span class="metric__label">
                <span class="metric__icon" aria-hidden="true">
                  <img class="icon-figure" src="assets/img/icons/icon-briefcase.svg" alt="" loading="lazy">
                </span>
                <span>Interviews scheduled</span>
              </span>
            </dt>
            <dd>10+</dd>
          </div>
        </dl>
      </div>
      <div class="hero__media" data-animate="zoom" data-animate-delay="240">
        <div class="media-ring"></div>
        <article class="hero-slab">
          <span class="badge">Teacher view</span>
          <h3>Track every application</h3>
          <p>Follow each stage from shortlist to offer with nudges, notes, and reminders.</p>
        </article>
        <article class="hero-slab hero-slab--dark">
          <span class="badge badge--light">School dashboard</span>
          <h3>Guide every hiring step</h3>
          <p>Insights, reminders, and candidate notes stay together so school teams move quickly with clarity.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section section--muted patterned-surface">
    <div class="container">
      <div class="section__header center" data-animate="fade-up">
        <span class="eyebrow">Why schools and teachers choose us</span>
        <h2>Every workflow matches the classroom reality</h2>
        <p class="lead">Built with school leaders and educators, LevelMinds organises hiring around skills, collaboration, and trust.</p>
      </div>
      <div class="feature-grid">
        <article class="card card--feature" data-animate="slide-left" data-tilt>
          <span class="card__icon" aria-hidden="true">
            <img class="icon-figure" src="assets/img/icons/icon-profile-shield.svg" alt="" loading="lazy">
          </span>
          <h3>Digital portfolios</h3>
          <p>Showcase lesson plans, classroom videos, and certifications in a profile that travels with every application.</p>
          <ul class="list-check">
            <li>Shareable profile link</li>
            <li>Verified credentials</li>
            <li>Rich media uploads</li>
          </ul>
        </article>
        <article class="card card--feature" data-animate="slide-right" data-tilt data-animate-delay="120">
          <span class="card__icon" aria-hidden="true">
            <img class="icon-figure" src="assets/img/icons/icon-laptop-trend.svg" alt="" loading="lazy">
          </span>
          <h3>School &amp; teacher dashboards</h3>
          <p>Give leadership teams and educators a focused dashboard with the stages, filters, and reminders they need to stay in sync.</p>
          <ul class="list-check">
            <li>Role-ready pipelines</li>
            <li>Progress tracking for teachers</li>
            <li>Automated nudges and alerts</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container split-layout">
      <div data-animate="fade-up">
        <span class="eyebrow">How it works</span>
        <h2>Dashboards that keep every hire on track</h2>
        <p class="lead">Launch a school dashboard, connect teacher profiles, and follow each application with transparent updates.</p>
        <a class="btn btn-primary btn-sm" href="tour.php">Explore the product tour</a>
      </div>
      <ol class="list-steps">
        <li data-animate="slide-up" data-tilt>
          <span class="step-icon" aria-hidden="true">
            <img class="icon-figure" src="assets/img/icons/icon-presentation-trend.svg" alt="" loading="lazy">
          </span>
          <h3>Activate your school dashboard</h3>
          <p>Tailor hiring stages, focus areas, and intake forms so your pipeline mirrors the way your school recruits.</p>
        </li>
        <li data-animate="slide-up" data-tilt data-animate-delay="100">
          <span class="step-icon" aria-hidden="true">
            <img class="icon-figure" src="assets/img/icons/icon-documents.svg" alt="" loading="lazy">
          </span>
          <h3>Share roles with teachers</h3>
          <p>Invite educators to dedicated teacher dashboards where they can submit profiles and track their status.</p>
        </li>
        <li data-animate="slide-up" data-tilt data-animate-delay="180">
          <span class="step-icon" aria-hidden="true">
            <img class="icon-figure" src="assets/img/icons/icon-atom-orbit.svg" alt="" loading="lazy">
          </span>
          <h3>Review progress in real time</h3>
          <p>Filter candidates, capture evidence, and collaborate on feedback without losing history or context.</p>
        </li>
        <li data-animate="slide-up" data-tilt data-animate-delay="260">
          <span class="step-icon" aria-hidden="true">
            <img class="icon-figure" src="assets/img/icons/icon-shield-check.svg" alt="" loading="lazy">
          </span>
          <h3>Hire with full visibility</h3>
          <p>Send offers, trigger reminders, and keep every stakeholder aligned from shortlist to acceptance.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section section--light patterned-surface">
    <div class="container stack">
      <div class="section__header center" data-animate="fade-up">
        <span class="eyebrow">Product spotlight</span>
        <h2>Dashboards built for schools and teachers</h2>
        <p class="lead">See how LevelMinds keeps hiring data visible with dedicated views for leadership and educators.</p>
      </div>
      <div data-animate="zoom" data-animate-delay="120">
        <?= lm_render_tour_slider(); ?>
      </div>
    </div>
  </section>

  <section class="section section--dark">
    <div class="container split-layout">
      <div class="quote-card" data-animate="fade-up" data-animate-delay="80">
        <span class="badge badge--light">Founder insight</span>
        <blockquote>"We designed LevelMinds so that every teacher knows where they stand and every school can hire with confidence."</blockquote>
        <cite>Varun Chamoli, Founder</cite>
      </div>
      <div class="card card--dark" data-animate="zoom" data-tilt>
        <h3>Built for the classroom</h3>
        <p>We partner with forward-thinking schools across India to co-create playbooks that highlight teaching excellence.</p>
        <ul class="list-check">
          <li>Context-rich candidate profiles</li>
          <li>Evidence-backed evaluations</li>
          <li>Support from the LevelMinds team</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--muted patterned-surface">
    <div class="container cta-banner" data-animate="zoom" data-tilt>
      <div class="cta-banner__glow" aria-hidden="true"></div>
      <div>
        <h2>Ready to match great teachers with the right schools?</h2>
        <p class="lead">Create your LevelMinds dashboard and start connecting teachers with the right schools.</p>
      </div>
      <div class="cta-actions">
        <a class="btn btn-primary" href="contact.php">Talk to our team</a>
        <a class="btn btn-secondary" href="https://lmap.in/signup">Sign Up</a>
      </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
