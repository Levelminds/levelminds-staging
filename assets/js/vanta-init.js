(function () {
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
    points: 12.0,
    maxDistance: 25.0,
    spacing: 16.0,
    showDots: true
  };

  const targets = ['#vanta-bg', '#team-vanta', '#tour-vanta', '#careers-vanta'];

  let instances = [];

  const destroyAll = () => {
    instances.forEach((instance) => {
      if (instance && typeof instance.destroy === 'function') {
        instance.destroy();
      }
    });
    instances = [];
  };

  const init = () => {
    if (!window.VANTA || typeof window.VANTA.NET !== 'function') {
      return;
    }
    if (window.innerWidth <= 768) {
      destroyAll();
      return;
    }
    destroyAll();
    targets.forEach((selector) => {
      const element = document.querySelector(selector);
      if (!element) {
        return;
      }
      instances.push(window.VANTA.NET(Object.assign({}, baseOptions, { el: element })));
    });
  };

  let resizeTimer = null;
  window.addEventListener('load', init);
  window.addEventListener('resize', () => {
    if (resizeTimer) {
      window.clearTimeout(resizeTimer);
    }
    resizeTimer = window.setTimeout(init, 180);
  });
})();
