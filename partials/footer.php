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
  const motionAwareControllers = [];
  const reducedMotionMedia = window.matchMedia('(prefers-reduced-motion: reduce)');
  let prefersReducedMotion = reducedMotionMedia.matches;
  let motionObserver = null;
  const motionElements = Array.from(document.querySelectorAll('[data-motion]'));
  const initMotionObserver = () => {
    if (!motionElements.length) {
      document.body.classList.remove('motion-ready');
      return;
    }
    if (motionObserver) {
      motionObserver.disconnect();
      motionObserver = null;
    }
    if (prefersReducedMotion) {
      document.body.classList.remove('motion-ready');
      motionElements.forEach((el) => {
        el.classList.add('is-visible');
        el.style.removeProperty('--motion-delay');
      });
      return;
    }
    document.body.classList.add('motion-ready');
    motionElements.forEach((el) => {
      const delay = el.getAttribute('data-motion-delay');
      if (delay) {
        el.style.setProperty('--motion-delay', delay);
      } else {
        el.style.removeProperty('--motion-delay');
      }
      if (!el.hasAttribute('data-motion-once')) {
        el.classList.remove('is-visible');
      }
    });
    motionObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          if (motionObserver) {
            motionObserver.unobserve(entry.target);
          }
        }
      });
    }, { threshold: 0.2, rootMargin: '0px 0px -10%' });
    motionElements.forEach((el) => {
      if (!el.classList.contains('is-visible')) {
        motionObserver.observe(el);
      }
    });
  };

  if (motionElements.length) {
    initMotionObserver();
    motionAwareControllers.push({
      sync: () => initMotionObserver()
    });
  }

  const parallaxSections = Array.from(document.querySelectorAll('.surface-parallax'));
  if (parallaxSections.length) {
    let ticking = false;
    const applyParallax = () => {
      ticking = false;
      if (prefersReducedMotion) {
        parallaxSections.forEach((section) => {
          section.style.removeProperty('--parallax-shift-y');
        });
        return;
      }
      const viewportHeight = window.innerHeight || document.documentElement.clientHeight || 1;
      parallaxSections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        const centerOffset = rect.top + rect.height / 2 - viewportHeight / 2;
        const progress = Math.max(Math.min(centerOffset / viewportHeight, 1), -1);
        section.style.setProperty('--parallax-shift-y', (-progress * 12).toFixed(2));
      });
    };
    const requestParallaxFrame = () => {
      if (!ticking) {
        ticking = true;
        window.requestAnimationFrame(applyParallax);
      }
    };
    requestParallaxFrame();
    window.addEventListener('scroll', requestParallaxFrame, { passive: true });
    window.addEventListener('resize', requestParallaxFrame);
    motionAwareControllers.push({
      sync: () => requestParallaxFrame()
    });
  }

  const syncMotionControllers = () => {
    motionAwareControllers.forEach((controller) => {
      if (typeof controller?.sync === 'function') {
        controller.sync();
      }
    });
  };
  reducedMotionMedia.addEventListener('change', (event) => {
    prefersReducedMotion = event.matches;
    syncMotionControllers();
  });
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

  const heroSlider = document.querySelector('[data-hero-slider]');
  if (heroSlider) {
    const slides = Array.from(heroSlider.querySelectorAll('[data-hero-slide]'));
    const dots = Array.from(heroSlider.querySelectorAll('[data-hero-dot]'));
    if (slides.length) {
      let activeIndex = slides.findIndex((slide) => slide.classList.contains('is-active'));
      if (activeIndex < 0) {
        activeIndex = 0;
        slides[0].classList.add('is-active');
      }
      slides.forEach((slide, index) => {
        if (index !== activeIndex) {
          slide.classList.remove('is-active', 'is-exiting');
          slide.setAttribute('hidden', '');
        } else {
          slide.removeAttribute('hidden');
        }
      });

      const autoAttr = heroSlider.getAttribute('data-auto-interval');
      const autoInterval = Math.max(Number(autoAttr) || 4600, 3200);
      let autoTimer = null;
      const slideTransition = 780;

      const updateDots = (nextIndex) => {
        dots.forEach((dot, idx) => {
          const isActive = idx === nextIndex;
          dot.classList.toggle('is-active', isActive);
          dot.setAttribute('aria-selected', String(isActive));
          if (isActive) {
            dot.setAttribute('aria-current', 'true');
          } else {
            dot.removeAttribute('aria-current');
          }
        });
      };

      const stopAuto = () => {
        if (autoTimer !== null) {
          clearInterval(autoTimer);
          autoTimer = null;
        }
      };

      const startAuto = () => {
        if (prefersReducedMotion || slides.length < 2) {
          return;
        }
        stopAuto();
        autoTimer = window.setInterval(() => {
          const nextIndex = (activeIndex + 1) % slides.length;
          activate(nextIndex);
        }, autoInterval);
      };

      const scheduleHide = (slide) => {
        window.setTimeout(() => {
          slide.classList.remove('is-exiting');
          slide.setAttribute('hidden', '');
        }, slideTransition);
      };

      const activate = (nextIndex, { manual = false } = {}) => {
        if (nextIndex === activeIndex || nextIndex < 0 || nextIndex >= slides.length) {
          return;
        }
        const currentSlide = slides[activeIndex];
        const nextSlide = slides[nextIndex];
        currentSlide.classList.remove('is-active');
        currentSlide.classList.add('is-exiting');
        scheduleHide(currentSlide);
        nextSlide.classList.remove('is-exiting');
        nextSlide.removeAttribute('hidden');
        // Force reflow for smooth transition when slide was hidden
        void nextSlide.offsetWidth;
        nextSlide.classList.add('is-active');
        activeIndex = nextIndex;
        updateDots(activeIndex);
        if (manual) {
          startAuto();
        }
      };

      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
          activate(index, { manual: true });
        });
        dot.addEventListener('keydown', (event) => {
          if (event.key === 'ArrowRight' || event.key === 'Right') {
            event.preventDefault();
            const nextIndex = (index + 1) % slides.length;
            dots[nextIndex]?.focus();
            activate(nextIndex, { manual: true });
          }
          if (event.key === 'ArrowLeft' || event.key === 'Left') {
            event.preventDefault();
            const prevIndex = (index - 1 + slides.length) % slides.length;
            dots[prevIndex]?.focus();
            activate(prevIndex, { manual: true });
          }
        });
      });

      heroSlider.addEventListener('mouseenter', stopAuto);
      heroSlider.addEventListener('mouseleave', startAuto);
      heroSlider.addEventListener('focusin', stopAuto);
      heroSlider.addEventListener('focusout', startAuto);

      updateDots(activeIndex);
      startAuto();
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
