(function () {
  const baseOptions = {
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    color: 0x3f97d5,
    backgroundColor: 0x3248ad,
    points: 15.0,
    maxDistance: 25.0,
    spacing: 18.0,
    showDots: true
  };

  const targets = [
    { selector: '#vanta-bg' },
    {
      selector: '#team-vanta',
      options: {
        backgroundColor: 0x1e2f6f,
        color: 0x4fa6e2,
        points: 13.0,
        spacing: 20.0
      }
    },
    {
      selector: '#tour-vanta',
      options: {
        backgroundColor: 0xf1f5ff,
        color: 0x3c7dd1,
        points: 11.0,
        spacing: 22.0,
        showDots: false
      }
    },
    {
      selector: '#careers-vanta',
      options: {
        backgroundColor: 0x273a82,
        color: 0x5ab3f0,
        points: 14.0,
        spacing: 19.0
      }
    }
  ];

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
    targets.forEach(({ selector, options }) => {
      const element = document.querySelector(selector);
      if (!element) {
        return;
      }
      instances.push(window.VANTA.NET(Object.assign({}, baseOptions, options || {}, { el: element })));
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
