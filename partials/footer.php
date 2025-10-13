<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="footer-logo" href="index.php">
        <img class="footer-logo-img" src="assets/img/logo.svg" alt="LevelMinds logo">
        <span>LevelMinds</span>
      </a>
      <p>Skill-first hiring platform connecting schools and teachers with transparent, collaborative workflows.</p>
    </div>
    <div>
      <h4>Navigate</h4>
      <ul class="footer-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="tour.php">Tour</a></li>
        <li><a href="careers.php">Careers</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div>
      <h4>Contact</h4>
      <ul class="footer-links">
        <li>Delhi, India</li>
        <li><a href="mailto:support@levelminds.in">support@levelminds.in</a></li>
        <li><a href="tel:+917303835892">+91 73038 35892</a></li>
      </ul>
    </div>
    <div>
      <h4>Stay in touch</h4>
      <ul class="footer-links footer-links--social">
        <li>
          <a href="https://www.linkedin.com/company/level-mind/?viewAsMember=true" aria-label="LevelMinds on LinkedIn" target="_blank" rel="noopener">
            <svg class="icon icon--linkedin" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false">
              <path d="M4.98 3.5a2.5 2.5 0 1 1-.02 5 2.5 2.5 0 0 1 .02-5Zm.02 6.25H2.1V21h2.9V9.75ZM9 9.75H6.1V21H9v-6.2c0-1.64.54-2.76 1.89-2.76 1.03 0 1.58.74 1.58 2.76V21h2.9v-6.97c0-3.16-1.68-4.63-3.93-4.63-1.82 0-2.63 1-3.04 1.7h.01V9.75Z" />
            </svg>
            <span>LinkedIn</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container footer-sub">
    <span>&copy; <?= date('Y') ?> LevelMinds. All rights reserved.</span>
    <span>Made for schools and teachers who lead with skills.</span>
  </div>
</footer>
<script>
(function () {
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.nav__toggle');
  const menu = document.querySelector('#site-nav');
  if (header && toggle && menu) {
    const body = document.body;
    const closeMenu = () => {
      header.classList.remove('is-open');
      body.classList.remove('nav-open');
      toggle.setAttribute('aria-expanded', 'false');
    };
    toggle.addEventListener('click', () => {
      const isOpen = header.classList.toggle('is-open');
      body.classList.toggle('nav-open', isOpen);
      toggle.setAttribute('aria-expanded', String(isOpen));
    });
    menu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => closeMenu());
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth > 960) {
        closeMenu();
      }
    });
  }
  document.querySelectorAll('[data-tabs]').forEach((group) => {
    const triggers = group.querySelectorAll('[data-tab-trigger]');
    const panels = group.querySelectorAll('.tab-panel');
    const activate = (id, trigger) => {
      triggers.forEach((btn) => {
        btn.setAttribute('aria-selected', String(btn === trigger));
      });
      panels.forEach((panel) => {
        panel.classList.toggle('is-active', panel.id === `tab-${id}`);
      });
    };
    triggers.forEach((trigger) => {
      trigger.addEventListener('click', () => {
        const id = trigger.getAttribute('data-tab-trigger');
        if (id) {
          activate(id, trigger);
        }
      });
    });
  });

  document.querySelectorAll('[data-slider]').forEach((slider) => {
    const track = slider.querySelector('.product-slider__track');
    const slides = Array.from(slider.querySelectorAll('.product-slide'));
    const prev = slider.querySelector('[data-slider-prev]');
    const next = slider.querySelector('[data-slider-next]');
    const dotsContainer = slider.querySelector('.product-slider__dots');
    if (!track || slides.length === 0) {
      return;
    }
    if (slides.length <= 1) {
      slider.classList.add('is-static');
      if (prev) { prev.disabled = true; }
      if (next) { next.disabled = true; }
      return;
    }
    slider.classList.remove('is-static');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let index = 0;
    let timer = null;
    const update = () => {
      track.style.transform = `translateX(-${index * 100}%)`;
      slides.forEach((slide, idx) => {
        slide.classList.toggle('is-active', idx === index);
      });
      if (prev) {
        prev.disabled = index === 0;
      }
      if (next) {
        next.disabled = index === slides.length - 1;
      }
      if (dotsContainer) {
        dotsContainer.querySelectorAll('.product-slider__dot').forEach((dot, dotIndex) => {
          dot.classList.toggle('is-active', dotIndex === index);
          dot.setAttribute('aria-pressed', dotIndex === index ? 'true' : 'false');
        });
      }
    };
    const goTo = (target) => {
      index = ((target % slides.length) + slides.length) % slides.length;
      update();
    };
    const stopAuto = () => {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    };
    const startAuto = () => {
      if (prefersReducedMotion) {
        stopAuto();
        return;
      }
      stopAuto();
      timer = window.setInterval(() => {
        goTo(index + 1);
      }, 6000);
    };
    const maybeResumeAuto = () => {
      if (!prefersReducedMotion && !slider.matches(':hover') && !slider.matches(':focus-within')) {
        startAuto();
      }
    };
    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      slides.forEach((_, slideIndex) => {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'product-slider__dot';
        dot.setAttribute('aria-label', `Go to slide ${slideIndex + 1}`);
        dot.addEventListener('click', () => {
          stopAuto();
          goTo(slideIndex);
          maybeResumeAuto();
        });
        dotsContainer.appendChild(dot);
      });
    }
    if (prev) {
      prev.addEventListener('click', () => {
        if (index > 0) {
          stopAuto();
          goTo(index - 1);
          maybeResumeAuto();
        }
      });
    }
    if (next) {
      next.addEventListener('click', () => {
        if (index < slides.length - 1) {
          stopAuto();
          goTo(index + 1);
          maybeResumeAuto();
        }
      });
    }
    slider.addEventListener('mouseenter', stopAuto);
    slider.addEventListener('mouseleave', maybeResumeAuto);
    slider.addEventListener('focusin', stopAuto);
    slider.addEventListener('focusout', maybeResumeAuto);
    update();
    startAuto();
  });
})();
</script>
</body>
</html>
