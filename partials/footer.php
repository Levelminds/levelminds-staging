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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-3gJwYp8F5EYh3YOiP+cbX6V+qsSVqS+8CA0nPddOZ1w=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-ym9G5RWPLXnwF75PwQBGzb62LF8oT+yQUwpsOSJy316KcmBHQYaWV7k/akdUSHhDuH9NJlmKwTCLUBqL6lJ7NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
AOS.init({
  duration: 1000,
  easing: 'ease-in-out',
  once: true
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js" integrity="sha512-2MoeJ0yDUuRKqGZo4PMBVXgS5aXoaZySUdkGFUTkOcJCIZy9FHn5Vf3L7hIwrKyYVJZZzKzbwQ6vurIWwt8GzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script src="assets/js/vanta-init.js"></script>
<script>(function () {
  const header = document.querySelector('[data-header]');
  const navToggle = document.querySelector('[data-nav-toggle]');
  const navMenu = document.querySelector('[data-nav-menu]');
  const navBackdrop = document.querySelector('[data-nav-backdrop]');
  const body = document.body;

  const updateHeaderState = () => {
    if (!header) {
      return;
    }
    const scrolled = window.scrollY > 24 || body.classList.contains('nav-open');
    header.classList.toggle('is-condensed', scrolled);
  };

  const setNavAria = (expanded) => {
    if (navMenu) {
      navMenu.setAttribute('aria-hidden', expanded ? 'false' : 'true');
    }
    if (navToggle) {
      navToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    }
  };

  const closeMenu = () => {
    body.classList.remove('nav-open');
    setNavAria(false);
    updateHeaderState();
  };

  const openMenu = () => {
    body.classList.add('nav-open');
    setNavAria(true);
    updateHeaderState();
  };

  const toggleMenu = () => {
    if (body.classList.contains('nav-open')) {
      closeMenu();
    } else {
      openMenu();
    }
  };

  if (navMenu) {
    const isDesktop = window.innerWidth > 960;
    navMenu.setAttribute('aria-hidden', isDesktop ? 'false' : 'true');
  }
  if (navToggle) {
    navToggle.setAttribute('aria-expanded', 'false');
  }

  window.addEventListener('scroll', updateHeaderState, { passive: true });
  window.addEventListener('load', updateHeaderState);

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', toggleMenu);
    navMenu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
  }

  if (navBackdrop) {
    navBackdrop.addEventListener('click', closeMenu);
  }

  window.addEventListener('resize', () => {
    if (window.innerWidth > 960) {
      body.classList.remove('nav-open');
      setNavAria(false);
      navMenu?.setAttribute('aria-hidden', 'false');
    } else if (!body.classList.contains('nav-open')) {
      navMenu?.setAttribute('aria-hidden', 'true');
    }
    updateHeaderState();
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

      const intervalAttr = heroSlider.getAttribute('data-auto-interval');
      const autoInterval = Math.max(Number(intervalAttr) || 4600, 3200);
      const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
      let autoTimer = null;

      const updateDots = () => {
        dots.forEach((dot, index) => {
          const isActive = index === activeIndex;
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
        if (autoTimer) {
          clearInterval(autoTimer);
          autoTimer = null;
        }
      };

      const activate = (nextIndex, manual = false) => {
        if (nextIndex === activeIndex || nextIndex < 0 || nextIndex >= slides.length) {
          return;
        }
        const currentSlide = slides[activeIndex];
        const nextSlide = slides[nextIndex];
        currentSlide.classList.remove('is-active');
        currentSlide.classList.add('is-exiting');
        window.setTimeout(() => {
          currentSlide.classList.remove('is-exiting');
          currentSlide.setAttribute('hidden', '');
        }, 650);
        nextSlide.removeAttribute('hidden');
        void nextSlide.offsetWidth;
        nextSlide.classList.add('is-active');
        activeIndex = nextIndex;
        updateDots();
        if (manual) {
          startAuto();
        }
      };

      const startAuto = () => {
        if (prefersReducedMotion.matches || slides.length < 2) {
          stopAuto();
          return;
        }
        stopAuto();
        autoTimer = window.setInterval(() => {
          const nextIndex = (activeIndex + 1) % slides.length;
          activate(nextIndex);
        }, autoInterval);
      };

      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => activate(index, true));
        dot.addEventListener('keydown', (event) => {
          if (event.key === 'ArrowRight') {
            event.preventDefault();
            const nextIndex = (index + 1) % slides.length;
            dots[nextIndex]?.focus();
            activate(nextIndex, true);
          }
          if (event.key === 'ArrowLeft') {
            event.preventDefault();
            const prevIndex = (index - 1 + slides.length) % slides.length;
            dots[prevIndex]?.focus();
            activate(prevIndex, true);
          }
        });
      });

      heroSlider.addEventListener('mouseenter', stopAuto);
      heroSlider.addEventListener('mouseleave', startAuto);
      heroSlider.addEventListener('focusin', stopAuto);
      heroSlider.addEventListener('focusout', startAuto);
      prefersReducedMotion.addEventListener('change', startAuto);
      updateDots();
      startAuto();
    }
  }

  updateHeaderState();
})();
</script>
