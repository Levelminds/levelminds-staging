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
    $class = trim('product-slider ' . ($options['class'] ?? ''));
    $count = count($slides);

    if ($count === 0) {
      return '';
    }

    $disableControls = $count <= 1;

    ob_start();
    ?>
    <div class="<?= htmlspecialchars($class, ENT_QUOTES, 'UTF-8') ?>" data-slider>
      <button class="product-slider__control" type="button" data-slider-prev aria-label="Previous screenshot" <?= $disableControls ? 'disabled' : '' ?>>
        <span aria-hidden="true">&larr;</span>
      </button>
      <div class="product-slider__viewport" aria-live="polite">
        <div class="product-slider__track">
          <?php foreach ($slides as $index => $slide): 
            $isActive = $index === 0 ? ' is-active' : '';
            $src = htmlspecialchars($slide['src'], ENT_QUOTES, 'UTF-8');
            $alt = htmlspecialchars($slide['alt'] ?? '', ENT_QUOTES, 'UTF-8');
            $caption = htmlspecialchars($slide['caption'] ?? '', ENT_QUOTES, 'UTF-8');
          ?>
            <figure class="product-slide<?= $isActive ?>">
              <img src="<?= $src ?>" alt="<?= $alt ?>">
              <?php if ($showCaptions && $caption !== ''): ?>
                <figcaption><?= $caption ?></figcaption>
              <?php endif; ?>
            </figure>
          <?php endforeach; ?>
        </div>
      </div>
      <button class="product-slider__control" type="button" data-slider-next aria-label="Next screenshot" <?= $disableControls ? 'disabled' : '' ?>>
        <span aria-hidden="true">&rarr;</span>
      </button>
      <div class="product-slider__dots" role="tablist"></div>
    </div>
    <?php
    return ob_get_clean();
  }
}
?>
