<?php
if (!function_exists('lm_render_tour_slider')) {
  function lm_render_tour_slider(array $options = []) {
    $defaultSlides = [
      ['src' => 'assets/img/tour-1.jpg', 'alt' => 'Applicant pipeline dashboard overview', 'caption' => 'Applicant pipeline: monitor every stage in one unified dashboard.'],
      ['src' => 'assets/img/tour-2.jpg', 'alt' => 'Teacher dashboard tracking applications', 'caption' => 'Teacher dashboard: keep educators updated with real-time status changes.'],
      ['src' => 'assets/img/tour-3.jpg', 'alt' => 'Interview scheduling interface', 'caption' => 'Scheduling: align interview panels and reminders without leaving LevelMinds.'],
      ['src' => 'assets/img/tour-4.jpg', 'alt' => 'Candidate profile with teaching evidence', 'caption' => 'Candidate profile: review teaching evidence, lesson plans, and credentials.'],
      ['src' => 'assets/img/tour-5.jpg', 'alt' => 'Scorecard review and feedback screen', 'caption' => 'Scorecards: capture rubric-aligned feedback from every panelist.'],
      ['src' => 'assets/img/tour-6.jpg', 'alt' => 'Hiring analytics snapshot', 'caption' => 'Analytics: understand pipeline health and the sources bringing great teachers.'],
      ['src' => 'assets/img/tour-7.jpg', 'alt' => 'Team tasks and follow-up checklist', 'caption' => 'Tasks: keep hiring teams aligned with task lists and follow-up nudges.'],
    ];

    $slides = $options['slides'] ?? $defaultSlides;
    $showCaptions = array_key_exists('show_captions', $options) ? (bool)$options['show_captions'] : true;
    $classAttr = trim('tour-slider ' . ($options['class'] ?? ''));

    if (count($slides) === 0) {
      return '';
    }

    ob_start();
    ?>
    <div class="<?= htmlspecialchars($classAttr, ENT_QUOTES, 'UTF-8') ?>" aria-live="polite">
      <?php foreach ($slides as $slide):
        $src = htmlspecialchars($slide['src'], ENT_QUOTES, 'UTF-8');
        $alt = htmlspecialchars($slide['alt'] ?? '', ENT_QUOTES, 'UTF-8');
        $caption = htmlspecialchars($slide['caption'] ?? '', ENT_QUOTES, 'UTF-8');
      ?>
        <div class="tour-slide">
          <figure>
            <img src="<?= $src ?>" alt="<?= $alt ?>">
            <?php if ($showCaptions && $caption !== ''): ?>
              <figcaption><?= $caption ?></figcaption>
            <?php endif; ?>
          </figure>
        </div>
      <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
  }
}
?>
