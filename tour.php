<?php
$pageTitle = "Tour - LevelMinds";
include 'partials/header.php';
require_once __DIR__ . '/partials/tour-slider.php';
?>
<main>
  <section class="page-hero">
    <div class="container stack">
      <span class="badge">Product tour</span>
      <h1>See LevelMinds in action</h1>
      <p class="lead">Walk through the spaces teachers and school teams share to move from application to offer without friction.</p>
      <div class="hero__actions">
        <a class="btn btn-primary" href="contact.php">Request a live demo</a>
        <a class="btn btn-secondary" href="index.php">Return to home</a>
      </div>
    </div>
  </section>

  <section class="section section--light">
    <div class="container split-layout">
      <?= lm_render_tour_slider(); ?>
      <div class="card card--raised">
        <span class="eyebrow">Pipeline without the guesswork</span>
        <h2>Everything you need to guide hiring decisions</h2>
        <p class="lead">Shortlist, interview, and hire with crisp visibility. Keep notes, documents, and chat in one shared workspace designed for educators.</p>
        <ul class="list-check">
          <li>Configurable stages per role</li>
          <li>Scorecards mapped to teaching skills</li>
          <li>Team collaboration with activity logs</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--muted">
    <div class="container tab-group" data-tabs>
      <div class="section__header center">
        <span class="eyebrow">Built for everyone involved</span>
        <h2>Choose your journey</h2>
        <p class="lead">Switch between the school and teacher flow to see how LevelMinds keeps both sides aligned.</p>
      </div>
      <div class="tab-nav" role="tablist">
        <button type="button" role="tab" aria-selected="true" data-tab-trigger="schools">For schools</button>
        <button type="button" role="tab" aria-selected="false" data-tab-trigger="teachers">For teachers</button>
      </div>
      <div id="tab-schools" class="tab-panel is-active" role="tabpanel">
        <ol class="list-steps">
          <li>
            <h3>Launch your hiring workspace</h3>
            <p>Invite your leadership team, import open roles, and define scorecards rooted in classroom impact.</p>
          </li>
          <li>
            <h3>Review with real evidence</h3>
            <p>Compare portfolios, lesson videos, and credentials side by side to shortlist candidates with confidence.</p>
          </li>
          <li>
            <h3>Collaborate on interviews</h3>
            <p>Assign panelists, schedule online or on-campus interviews, and capture structured feedback instantly.</p>
          </li>
          <li>
            <h3>Close the loop</h3>
            <p>Send offers, share outcomes, and move new hires into onboarding while keeping an audit trail.</p>
          </li>
        </ol>
      </div>
      <div id="tab-teachers" class="tab-panel" role="tabpanel">
        <ol class="list-steps">
          <li>
            <h3>Create a standout profile</h3>
            <p>Curate your teaching philosophy, classroom projects, and credentials in a sharable digital resume.</p>
          </li>
          <li>
            <h3>Discover the right roles</h3>
            <p>Filter by school type, subject, and preferred location while receiving recommendations aligned to your skills.</p>
          </li>
          <li>
            <h3>Track every stage</h3>
            <p>See where you stand across applications with automated updates, reminders, and next-step guidance.</p>
          </li>
          <li>
            <h3>Connect directly with schools</h3>
            <p>Chat with hiring teams as soon as you are shortlisted and keep every conversation in one place.</p>
          </li>
        </ol>
      </div>
    </div>
  </section>

  <section class="section section--muted">
    <div class="container cta-banner">
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
