import lax from 'lax.js';

export default function animations() {
  lax.init();
  lax.addDriver('scrollY', () => window.scrollY);
  lax.addElements('.animate-zoom', {
    scrollY: {
      scale: [
        ['elInY', 'elCenterY', 'elOutY'],
        {
          768: [1, 1, 1],
          1920: [1, 1.1, 1.2],
        }
      ],
    },
  });

  lax.addElements('.animate-hero-content', {
    scrollY: {
      translateY: [
        ['elCenterY', 'elOutY'],
        {
          767: [0, 0],
          1920: [0, 'screenHeight/5'],
        },
      ],
      opacity: [
        ['elCenterY', 'elOutY'],
        {
          767: [1, 0.8],
          1920: [1, 0],
        },
      ],
    },
  });

  lax.addElements('.animate-hero-about-content', {
    scrollY: {
      translateY: [
        ['elCenterY - 200', 'elOutY'],
        {
          999: [0, 0],
          1400: [0, 'screenHeight/-10'],
        },
      ],
    },
  });

  lax.addElements('.footer__inner', {
    scrollY: {
      translateY: [
        ['elInY', 'elCenterY-150'],
        ['screenHeight/10', 0],
      ],
    },
  });

  lax.addElements('.parallax-fast', {
    scrollY: {
      translateY: [
        ['elInY', 'elCenterY', 'elOutY'],
        ['screenHeight/10', 0, 'screenHeight/-10'],
      ],
    },
  });

  lax.addElements('.parallax-slow', {
    scrollY: {
      translateY: [
        ['elInY', 'elCenterY', 'elOutY'],
        ['screenHeight/-10', 0, 'screenHeight/10'],
      ],
    },
  });

  lax.addElements('.parallax-x-slow', {
    scrollY: {
      translateY: [
        ['elInY', 'elCenterY', 'elOutY'],
        ['screenHeight/-10', 0, 'screenHeight/10'],
      ],
    },
  });

  lax.addElements('.text-images__img-wrapper--horizontal', {
    scrollY: {
      translateY: [
        ['elInY', 'elOutY'],
        {
          999: [0, 'elCenterY', 0],
          1400: ['screenHeight/-20', 0, 'screenHeight/20'],
        },
      ],
    },
  });

  lax.addElements('.text-images__img-wrapper--vertical', {
    scrollY: {
      translateY: [
        ['elInY', 'elOutY'],
        {
          999: [0, 'elCenterY', 0],
          1400: ['screenHeight/20', 0, 'screenHeight/-20'],
        },
      ],
    },
  });

  lax.addElements('.portfolio__item:nth-child(3n)', {
    scrollY: {
      translateY: [
        ['elInY', 'elCenterY', 'elOutY'],
        {
          999: [0, 0, 0],
          1400: ['screenHeight/-10', 0, 'screenHeight/10'],
        },
      ],
    },
  });

  lax.addElements('.portfolio__item:nth-child(3n+1), .portfolio__item:first-child', {
    scrollY: {
      translateY: [
        ['elInY', 'elCenterY', 'elOutY'],
        {
          999: [0, 0, 0],
          1400: ['screenHeight/10', 0, 'screenHeight/-10'],
        },
      ],
    },
  });
}
