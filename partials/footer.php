<footer class="site-footer">
  <div class="footer__backdrop" aria-hidden="true">
    <span class="footer__glow footer__glow--left"></span>
    <span class="footer__glow footer__glow--right"></span>
  </div>
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
        <li class="footer-links__item">
          <svg class="icon icon--pin" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M12 2.75a7.25 7.25 0 0 0-7.25 7.25c0 2.83 1.63 5.53 4.09 8.37a40.35 40.35 0 0 0 2.63 2.75.75.75 0 0 0 1.06 0 40.35 40.35 0 0 0 2.63-2.75c2.46-2.84 4.09-5.54 4.09-8.37A7.25 7.25 0 0 0 12 2.75Zm0 10.25a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" fill="currentColor" />
          </svg>
          <span>Delhi, India</span>
        </li>
        <li class="footer-links__item">
          <svg class="icon icon--mail" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M4.25 5.5h15.5A1.25 1.25 0 0 1 21 6.75v10.5A1.75 1.75 0 0 1 19.25 19H4.75A1.75 1.75 0 0 1 3 17.25V6.75A1.25 1.25 0 0 1 4.25 5.5Zm.25 2v9.75c0 .14.11.25.25.25h14.5a.25.25 0 0 0 .25-.25V7.5l-7.2 4.5a.75.75 0 0 1-.8 0L4.5 7.5Zm14.27-1.5H5.48l6.04 3.78L18.77 6Z" fill="currentColor" />
          </svg>
          <a href="mailto:support@levelminds.in">support@levelminds.in</a>
        </li>
        <li class="footer-links__item">
          <svg class="icon icon--phone" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M8.72 3.32 6.9 5.69a2 2 0 0 0-.2 2.15l.7 1.39a2 2 0 0 1-.22 2.1l-.7.93a1.5 1.5 0 0 0 0 1.82 14.6 14.6 0 0 0 5.63 5.63 1.5 1.5 0 0 0 1.82 0l.93-.7a2 2 0 0 1 2.1-.22l1.39.7a2 2 0 0 0 2.15-.2l2.37-1.82a1 1 0 0 0 .12-1.47l-3.4-3.4a1 1 0 0 0-1.18-.18l-2.16 1.08a2 2 0 0 1-2.16-.27l-3.26-3.26a2 2 0 0 1-.27-2.16l1.08-2.16a1 1 0 0 0-.18-1.18l-3.4-3.4a1 1 0 0 0-1.47.12Z" fill="currentColor" />
          </svg>
          <a href="tel:+917303835892">+91 73038 35892</a>
        </li>
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
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
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

  const animatedElements = Array.from(document.querySelectorAll('[data-animate]'));
  if (animatedElements.length) {
    if (prefersReducedMotion) {
      animatedElements.forEach((el) => {
        el.classList.add('is-visible');
        el.style.removeProperty('transition-delay');
      });
    } else {
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.28, rootMargin: '0px 0px -12%' }
      );
      animatedElements.forEach((el, index) => {
        const delayAttr = el.getAttribute('data-animate-delay');
        const delay = delayAttr !== null ? Number(delayAttr) : Math.min(index * 70, 420);
        if (!Number.isNaN(delay)) {
          el.style.transitionDelay = `${delay}ms`;
        }
        observer.observe(el);
      });
    }
  }

  const tiltElements = Array.from(document.querySelectorAll('[data-tilt]'));
  if (tiltElements.length) {
    const resetTilt = (el) => {
      el.style.setProperty('--tilt-x', '0deg');
      el.style.setProperty('--tilt-y', '0deg');
      el.style.setProperty('--tilt-translate', '0px');
      el.style.setProperty('--tilt-scale', '1');
      el.classList.remove('is-hovered');
    };
    if (prefersReducedMotion) {
      tiltElements.forEach((el) => resetTilt(el));
    } else {
      tiltElements.forEach((el) => {
        const maxTilt = Number(el.getAttribute('data-tilt-max') || '10');
        const handlePointerMove = (event) => {
          if (typeof event.isPrimary === 'boolean' && !event.isPrimary) {
            return;
          }
          const rect = el.getBoundingClientRect();
          if (!rect.width || !rect.height) {
            return;
          }
          const x = (event.clientX - rect.left) / rect.width;
          const y = (event.clientY - rect.top) / rect.height;
          const tiltX = ((x - 0.5) * maxTilt * 2).toFixed(2);
          const tiltY = ((0.5 - y) * maxTilt * 2).toFixed(2);
          el.style.setProperty('--tilt-x', `${tiltX}deg`);
          el.style.setProperty('--tilt-y', `${tiltY}deg`);
        };
        const handlePointerLeave = () => {
          resetTilt(el);
          el.removeEventListener('pointermove', handlePointerMove);
        };
        el.addEventListener('pointerenter', (event) => {
          if (typeof event.isPrimary === 'boolean' && !event.isPrimary) {
            return;
          }
          el.classList.add('is-hovered');
          handlePointerMove(event);
          el.addEventListener('pointermove', handlePointerMove);
        });
        el.addEventListener('pointerleave', handlePointerLeave);
        el.addEventListener('pointercancel', handlePointerLeave);
        el.addEventListener('blur', () => resetTilt(el));
      });
    }
  }

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
    motionAwareControllers.push({
      sync: () => {
        if (prefersReducedMotion) {
          stopAuto();
        } else {
          maybeResumeAuto();
        }
      }
    });
    update();
    startAuto();
  });
})();
</script>
</body>
</html>
