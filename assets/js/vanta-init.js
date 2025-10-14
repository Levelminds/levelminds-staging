(function () {
  const selectors = ['#vanta-bg', '#tour-vanta', '#team-vanta', '#careers-vanta'];
  const baseOptions = {
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 600.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    color: 0x3f97d5,
    backgroundColor: 0x3248ad,
    points: 13.0,
    maxDistance: 25.0,
    spacing: 18.0,
    showDots: true
  };

  const instances = new Map();

  const destroyInstance = (key) => {
    const instance = instances.get(key);
    if (instance && typeof instance.destroy === 'function') {
      instance.destroy();
    }
    instances.delete(key);
  };

  const destroyAll = () => {
    Array.from(instances.keys()).forEach((key) => destroyInstance(key));
  };

  const initialise = () => {
    if (!window.VANTA || typeof window.VANTA.NET !== 'function') {
      return;
    }

    const allowAnimation = window.innerWidth > 768;
    if (!allowAnimation) {
      destroyAll();
      return;
    }

    destroyAll();
    selectors.forEach((selector) => {
      const element = document.querySelector(selector);
      if (!element) {
        return;
      }
      const effect = window.VANTA.NET(Object.assign({ el: element }, baseOptions));
      instances.set(selector, effect);
    });
  };

  let resizeTimer = null;
  window.addEventListener('load', initialise);
  window.addEventListener('resize', () => {
    if (resizeTimer) {
      window.clearTimeout(resizeTimer);
    }
    resizeTimer = window.setTimeout(initialise, 180);
  });
})();
