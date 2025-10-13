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
        <span class="badge badge--light">Skill-first hiring platform</span>
        <h1>Hiring that celebrates great teaching.</h1>
        <p class="lead">LevelMinds connects schools and educators through transparent pipelines, collaborative workflows, and digital profiles that highlight classroom impact.</p>
        <div class="hero__actions" data-animate="fade-up" data-animate-delay="120">
          <a class="btn btn-primary" href="https://lmap.in/signup">Sign Up as School</a>
          <a class="btn btn-secondary" href="https://lmap.in/signup">Sign Up as Teacher</a>
        </div>
        <dl class="metric-grid">
          <div class="metric metric--on-dark" data-animate="zoom" data-tilt>
            <dt>
              <span class="metric__label">
                <span class="metric__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" role="img" focusable="false">
                    <path d="M4.5 5.75a3.25 3.25 0 0 1 3.25-3.25h8.5A3.25 3.25 0 0 1 19.5 5.75v12.5a.75.75 0 0 1-1.18.6L12 14.5l-6.32 4.35a.75.75 0 0 1-1.18-.6V5.75Z" fill="currentColor" />
                  </svg>
                </span>
                <span>Partner schools</span>
              </span>
            </dt>
            <dd>30+</dd>
          </div>
          <div class="metric metric--on-dark" data-animate="zoom" data-tilt data-animate-delay="80">
            <dt>
              <span class="metric__label">
                <span class="metric__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" role="img" focusable="false">
                    <path d="M12 4.25a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0 9.5c3.04 0 5.75 1.66 5.75 4.25v1.5a.75.75 0 0 1-.75.75H7a.75.75 0 0 1-.75-.75V18c0-2.59 2.71-4.25 5.75-4.25Z" fill="currentColor" />
                  </svg>
                </span>
                <span>Teacher profiles</span>
              </span>
            </dt>
            <dd>50+</dd>
          </div>
          <div class="metric metric--on-dark" data-animate="zoom" data-tilt data-animate-delay="160">
            <dt>
              <span class="metric__label">
                <span class="metric__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" role="img" focusable="false">
                    <path d="M6.75 3A1.75 1.75 0 0 1 8.5 4.75v.75h7v-.75A1.75 1.75 0 0 1 17.25 3h.5A1.75 1.75 0 0 1 19.5 4.75v14.5A1.75 1.75 0 0 1 17.75 21H6.25A1.75 1.75 0 0 1 4.5 19.25V4.75A1.75 1.75 0 0 1 6.25 3h.5ZM12 9.25a.75.75 0 0 0-.75.75v3.19l-1.19.7a.75.75 0 0 0 .76 1.3l1.63-.94a.75.75 0 0 0 .38-.65V10a.75.75 0 0 0-.75-.75Z" fill="currentColor" />
                  </svg>
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
        <article class="card card--feature" data-animate="zoom" data-tilt>
          <span class="card__icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" role="img" focusable="false">
              <path d="M6.5 7.5A2.5 2.5 0 0 1 9 5h14a2.5 2.5 0 0 1 2.5 2.5v16A2.5 2.5 0 0 1 23 26H9a2.5 2.5 0 0 1-2.5-2.5v-16Zm4.75 2a.75.75 0 0 0 0 1.5H21a.75.75 0 0 0 0-1.5H11.25Zm0 4a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 4a.75.75 0 0 0 0 1.5H18a.75.75 0 0 0 0-1.5h-6.75Z" fill="currentColor" />
            </svg>
          </span>
          <h3>Digital portfolios</h3>
          <p>Showcase lesson plans, classroom videos, and certifications in a profile that travels with every application.</p>
          <ul class="list-check">
            <li>Shareable profile link</li>
            <li>Verified credentials</li>
            <li>Rich media uploads</li>
          </ul>
        </article>
        <article class="card card--feature" data-animate="zoom" data-tilt data-animate-delay="120">
          <span class="card__icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" role="img" focusable="false">
              <path d="M8.5 6.5h15a2 2 0 0 1 2 2v10.62a2 2 0 0 1-.59 1.41l-5.88 5.88a2 2 0 0 1-1.41.59H8.5a2 2 0 0 1-2-2V8.5a2 2 0 0 1 2-2Zm9.75 16.69 4.44-4.44H18.5a.25.25 0 0 0-.25.25v4.19Z" fill="currentColor" />
            </svg>
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
        <li data-animate="fade-up" data-tilt>
          <span class="step-icon" aria-hidden="true">
            <svg viewBox="0 0 28 28" role="img" focusable="false">
              <path d="M7 6.25A2.25 2.25 0 0 1 9.25 4h9.5A2.25 2.25 0 0 1 21 6.25V7h1.25a1.75 1.75 0 0 1 1.75 1.75v3.5a1.75 1.75 0 0 1-1.75 1.75H21v5.75A2.25 2.25 0 0 1 18.75 22h-9.5A2.25 2.25 0 0 1 7 19.75v-13.5Zm2 .75v12h10v-12H9Z" fill="currentColor" />
            </svg>
          </span>
          <h3>Activate your school dashboard</h3>
          <p>Tailor hiring stages, focus areas, and intake forms so your pipeline mirrors the way your school recruits.</p>
        </li>
        <li data-animate="fade-up" data-tilt data-animate-delay="100">
          <span class="step-icon" aria-hidden="true">
            <svg viewBox="0 0 28 28" role="img" focusable="false">
              <path d="M6 7.75A2.75 2.75 0 0 1 8.75 5h10.5A2.75 2.75 0 0 1 22 7.75v12.5A2.75 2.75 0 0 1 19.25 23H8.75A2.75 2.75 0 0 1 6 20.25V7.75Zm5.53 1.47a.75.75 0 0 0-1.06 1.06l2.22 2.22-2.22 2.22a.75.75 0 0 0 1.06 1.06l2.22-2.22 2.22 2.22a.75.75 0 0 0 1.06-1.06L15.87 12.5l2.22-2.22a.75.75 0 1 0-1.06-1.06L14.81 11.44l-2.22-2.22Z" fill="currentColor" />
            </svg>
          </span>
          <h3>Share roles with teachers</h3>
          <p>Invite educators to dedicated teacher dashboards where they can submit profiles and track their status.</p>
        </li>
        <li data-animate="fade-up" data-tilt data-animate-delay="180">
          <span class="step-icon" aria-hidden="true">
            <svg viewBox="0 0 28 28" role="img" focusable="false">
              <path d="M14 4.5a8.75 8.75 0 1 0 0 17.5 8.75 8.75 0 0 0 0-17.5Zm0 2a6.75 6.75 0 1 1 0 13.5 6.75 6.75 0 0 1 0-13.5Zm-.75 3.75a.75.75 0 0 0-1.5 0v4.19a1.25 1.25 0 0 0 .64 1.08l3 1.62a.75.75 0 1 0 .7-1.32L13.25 14.9V10.25Z" fill="currentColor" />
            </svg>
          </span>
          <h3>Review progress in real time</h3>
          <p>Filter candidates, capture evidence, and collaborate on feedback without losing history or context.</p>
        </li>
        <li data-animate="fade-up" data-tilt data-animate-delay="260">
          <span class="step-icon" aria-hidden="true">
            <svg viewBox="0 0 28 28" role="img" focusable="false">
              <path d="M14 2.75a1 1 0 0 1 .9.55l2.04 4.14 4.57.66a1 1 0 0 1 .55 1.7l-3.3 3.21.78 4.55a1 1 0 0 1-1.45 1.05L14 16.86l-4.09 2.15a1 1 0 0 1-1.45-1.05l.78-4.55-3.3-3.2a1 1 0 0 1 .55-1.71l4.57-.66 2.04-4.14a1 1 0 0 1 .9-.55Z" fill="currentColor" />
            </svg>
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
