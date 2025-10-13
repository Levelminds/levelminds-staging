<?php
$pageTitle = "LevelMinds - Skill-first hiring for schools and teachers";
include 'partials/header.php';
require_once __DIR__ . '/partials/tour-slider.php';
?>
<main>
  <section class="hero hero--home">
    <div class="container hero__grid">
      <div class="hero__content">
        <span class="badge badge--light">Skill-first hiring platform</span>
        <h1>Hiring that celebrates great teaching.</h1>
        <p class="lead">LevelMinds connects schools and educators through transparent pipelines, collaborative workflows, and digital profiles that highlight classroom impact.</p>
        <div class="hero__actions">
          <a class="btn btn-primary" href="https://lmap.in/signup">Sign Up as School</a>
          <a class="btn btn-secondary" href="https://lmap.in/signup">Sign Up as Teacher</a>
        </div>
        <dl class="metric-grid">
          <div class="metric metric--on-dark">
            <dt>Partner schools</dt>
            <dd>120+</dd>
          </div>
          <div class="metric metric--on-dark">
            <dt>Teacher profiles</dt>
            <dd>3,500</dd>
          </div>
          <div class="metric metric--on-dark">
            <dt>Interviews scheduled</dt>
            <dd>1,800</dd>
          </div>
        </dl>
      </div>
      <div class="hero__media">
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

  <section class="section section--muted">
    <div class="container">
      <div class="section__header center">
        <span class="eyebrow">Why schools and teachers choose us</span>
        <h2>Every workflow matches the classroom reality</h2>
        <p class="lead">Built with school leaders and educators, LevelMinds organises hiring around skills, collaboration, and trust.</p>
      </div>
      <div class="feature-grid">
        <article class="card">
          <h3>Digital portfolios</h3>
          <p>Showcase lesson plans, classroom videos, and certifications in a profile that travels with every application.</p>
          <ul class="list-check">
            <li>Shareable profile link</li>
            <li>Verified credentials</li>
            <li>Rich media uploads</li>
          </ul>
        </article>
        <article class="card">
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
      <div>
        <span class="eyebrow">How it works</span>
        <h2>Dashboards that keep every hire on track</h2>
        <p class="lead">Launch a school dashboard, connect teacher profiles, and follow each application with transparent updates.</p>
        <a class="btn btn-primary btn-sm" href="tour.php">Explore the product tour</a>
      </div>
      <ol class="list-steps">
        <li>
          <h3>Activate your school dashboard</h3>
          <p>Tailor hiring stages, focus areas, and intake forms so your pipeline mirrors the way your school recruits.</p>
        </li>
        <li>
          <h3>Share roles with teachers</h3>
          <p>Invite educators to dedicated teacher dashboards where they can submit profiles and track their status.</p>
        </li>
        <li>
          <h3>Review progress in real time</h3>
          <p>Filter candidates, capture evidence, and collaborate on feedback without losing history or context.</p>
        </li>
        <li>
          <h3>Hire with full visibility</h3>
          <p>Send offers, trigger reminders, and keep every stakeholder aligned from shortlist to acceptance.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section section--light">
    <div class="container stack">
      <div class="section__header center">
        <span class="eyebrow">Product spotlight</span>
        <h2>Dashboards built for schools and teachers</h2>
        <p class="lead">See how LevelMinds keeps hiring data visible with dedicated views for leadership and educators.</p>
      </div>
      <?= lm_render_tour_slider(); ?>
    </div>
  </section>

  <section class="section section--dark">
    <div class="container split-layout">
      <div class="quote-card">
        <span class="badge badge--light">Founder insight</span>
        <blockquote>"We designed LevelMinds so that every teacher knows where they stand and every school can hire with confidence."</blockquote>
        <cite>Varun Chamoli, Founder</cite>
      </div>
      <div class="card card--dark">
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

  <section class="section section--muted">
    <div class="container cta-banner">
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
