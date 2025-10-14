<?php
$pageTitle = "Tour - LevelMinds";
include 'partials/header.php';
require_once __DIR__ . '/partials/tour-slider.php';
?>
<main>
  <section class="page-hero page-hero--tour surface-parallax vanta-section" id="tour-vanta">
    <div class="container tour-hero">
      <div class="tour-hero__content" data-aos="fade-right">
        <span class="badge">Product tour</span>
        <h1>See LevelMinds in action</h1>
        <p class="lead">Walk through the shared workspace teachers and school teams use to move from application to offer without friction.</p>
        <div class="tour-hero__chips">
          <div class="tour-chip" data-aos="zoom-in">
            <span class="icon-circle icon-circle--soft">
              <img src="assets/icons/icon-documents.svg" alt="Documents icon" loading="lazy">
            </span>
            <div>
              <strong>Unified pipeline</strong>
              <span>Stages, scorecards, and activity in one view.</span>
            </div>
          </div>
          <div class="tour-chip" data-aos="zoom-in" data-aos-delay="120">
            <span class="icon-circle icon-circle--soft">
              <img src="assets/icons/icon-hand-user.svg" alt="Collaboration icon" loading="lazy">
            </span>
            <div>
              <strong>Collaborative decisions</strong>
              <span>Structured notes, tagging, and secure sharing.</span>
            </div>
          </div>
        </div>
        <div class="hero__actions">
          <a class="btn btn-primary" href="contact.php">Request a live demo</a>
          <a class="btn btn-secondary" href="index.php">Return to home</a>
        </div>
      </div>
      <div class="tour-hero__media" data-aos="fade-left">
        <div class="tour-hero__slider">
          <?= lm_render_tour_slider(); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section surface-gradient tour-summary" id="tour-summary">
    <div class="container tour-summary__grid">
      <div class="tour-summary__content" data-aos="fade-right">
        <span class="eyebrow">Pipeline without the guesswork</span>
        <h2>Everything you need to guide hiring decisions</h2>
        <p class="lead">Shortlist, interview, and hire with crisp visibility. Keep notes, documents, and chat in one shared workspace designed for educators.</p>
        <div class="feature-list">
          <div class="feature-list__item">
            <span class="icon-circle icon-circle--halo">
              <img src="assets/icons/icon-profile-shield.svg" alt="Profile icon" loading="lazy">
            </span>
            <div>
              <h3>Configurable stages</h3>
              <p>Create flows per role and align every panelist before interviews begin.</p>
            </div>
          </div>
          <div class="feature-list__item">
            <span class="icon-circle icon-circle--halo">
              <img src="assets/icons/icon-presentation-trend.svg" alt="Analytics icon" loading="lazy">
            </span>
            <div>
              <h3>Scorecards mapped to skills</h3>
              <p>Evaluate portfolios, lessons, and references side-by-side without leaving the workspace.</p>
            </div>
          </div>
          <div class="feature-list__item">
            <span class="icon-circle icon-circle--halo">
              <img src="assets/icons/icon-shield-check.svg" alt="Shield icon" loading="lazy">
            </span>
            <div>
              <h3>Activity that keeps everyone aligned</h3>
              <p>Track conversations, approvals, and next steps across hiring stakeholders in real time.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tour-summary__media" data-aos="fade-left">
        <div class="tour-summary__panels" aria-hidden="true">
          <article class="tour-panel">
            <header>
              <span class="icon-circle icon-circle--soft">
                <img src="assets/img/icons/icon-profile-shield.svg" alt="" loading="lazy">
              </span>
              <div>
                <strong>Candidate overview</strong>
                <span>Stage health and readiness signals.</span>
              </div>
            </header>
            <ul>
              <li>Role-based scorecards with colour-coded tags</li>
              <li>Shared notes that follow every decision</li>
            </ul>
          </article>
          <article class="tour-panel tour-panel--secondary">
            <header>
              <span class="icon-circle icon-circle--soft">
                <img src="assets/img/icons/icon-hand-user.svg" alt="" loading="lazy">
              </span>
              <div>
                <strong>Interview scheduler</strong>
                <span>Coordinate panels without email chains.</span>
              </div>
            </header>
            <ul>
              <li>Smart availability suggestions for panelists</li>
              <li>Automatic reminders for teachers and schools</li>
            </ul>
          </article>
        </div>
        <div class="tour-summary__badge" data-aos="zoom-in" data-aos-delay="180">
          <span class="icon-circle icon-circle--soft">
            <img src="assets/icons/icon-atom-orbit.svg" alt="Orbit icon" loading="lazy">
          </span>
          <div>
            <strong>Live status sync</strong>
            <p>Automatic reminders and updates for teachers and schools.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--muted surface-parallax tour-flow">
    <div class="container">
      <div class="section__header center" data-aos="fade-up">
        <span class="eyebrow">Built for everyone involved</span>
        <h2>Move through every stage with confidence</h2>
        <p class="lead">LevelMinds blends automation with human insight to keep schools and teachers in sync from discovery to offer.</p>
      </div>
      <div class="tour-flow__grid">
        <article class="tour-card" data-aos="fade-right">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-documents.svg" alt="Documents icon" loading="lazy">
          </span>
          <h3>Launch your workspace</h3>
          <p>Invite leadership teams, configure stages, and publish openings instantly.</p>
        </article>
        <article class="tour-card" data-aos="zoom-in" data-aos-delay="100">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-profile-shield.svg" alt="Profile icon" loading="lazy">
          </span>
          <h3>Review with evidence</h3>
          <p>Compare digital portfolios, credentials, and recommendations side-by-side.</p>
        </article>
        <article class="tour-card" data-aos="zoom-in" data-aos-delay="200">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-hand-user.svg" alt="Collaboration icon" loading="lazy">
          </span>
          <h3>Collaborate on interviews</h3>
          <p>Assign panelists, capture structured notes, and keep every conversation connected.</p>
        </article>
        <article class="tour-card" data-aos="fade-left" data-aos-delay="300">
          <span class="icon-circle icon-circle--halo">
            <img src="assets/icons/icon-shield-check.svg" alt="Shield icon" loading="lazy">
          </span>
          <h3>Close the loop</h3>
          <p>Send offers, track onboarding, and document outcomes for future hiring cycles.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section tour-tabs">
    <div class="container tab-group" data-tabs>
      <div class="section__header center" data-aos="fade-up">
        <span class="eyebrow">Choose your journey</span>
        <h2>Switch between teacher and school views</h2>
        <p class="lead">Explore how LevelMinds keeps stakeholders aligned with clearly defined steps and shared context.</p>
      </div>
      <div class="tab-nav" role="tablist">
        <button type="button" role="tab" aria-selected="true" data-tab-trigger="schools">For schools</button>
        <button type="button" role="tab" aria-selected="false" data-tab-trigger="teachers">For teachers</button>
      </div>
      <div id="tab-schools" class="tab-panel is-active" role="tabpanel">
        <ol class="list-steps">
          <li data-aos="fade-right">
            <h3>Launch your hiring workspace</h3>
            <p>Invite your leadership team, import open roles, and define scorecards rooted in classroom impact.</p>
          </li>
          <li data-aos="fade-right" data-aos-delay="80">
            <h3>Review with real evidence</h3>
            <p>Compare portfolios, lesson videos, and credentials side by side to shortlist candidates with confidence.</p>
          </li>
          <li data-aos="fade-right" data-aos-delay="160">
            <h3>Collaborate on interviews</h3>
            <p>Assign panelists, schedule online or on-campus interviews, and capture structured feedback instantly.</p>
          </li>
          <li data-aos="fade-right" data-aos-delay="240">
            <h3>Close the loop</h3>
            <p>Send offers, share outcomes, and move new hires into onboarding while keeping an audit trail.</p>
          </li>
        </ol>
      </div>
      <div id="tab-teachers" class="tab-panel" role="tabpanel">
        <ol class="list-steps">
          <li data-aos="fade-right">
            <h3>Create a standout profile</h3>
            <p>Curate your teaching philosophy, classroom projects, and credentials in a sharable digital resume.</p>
          </li>
          <li data-aos="fade-right" data-aos-delay="80">
            <h3>Discover the right roles</h3>
            <p>Filter by school type, subject, and preferred location while receiving recommendations aligned to your skills.</p>
          </li>
          <li data-aos="fade-right" data-aos-delay="160">
            <h3>Track every stage</h3>
            <p>See where you stand across applications with automated updates, reminders, and next-step guidance.</p>
          </li>
          <li data-aos="fade-right" data-aos-delay="240">
            <h3>Connect directly with schools</h3>
            <p>Chat with hiring teams as soon as you are shortlisted and keep every conversation in one place.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>

  <section class="section section--muted">
    <div class="container cta-banner" data-aos="zoom-in">
      <div>
        <h2>See how LevelMinds fits your hiring workflow</h2>
        <p class="lead">Share your goals and we will tailor a walkthrough for your school or teacher network.</p>
      </div>
      <div class="cta-actions">
        <a class="btn btn-primary" href="contact.php">Book a demo</a>
        <a class="btn btn-secondary" href="careers.php">Join our ambassador program</a>
      </div>
    </div>
  </section>
</main>
<?php include 'partials/footer.php'; ?>
