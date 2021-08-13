import lax from 'lax.js'

export default function animations() {
  lax.init();

    // Add a driver that we use to control our animations
    lax.addDriver('scrollY', function () {
      return window.scrollY
    });

    // Add animation bindings to elements
    lax.addElements('.parallax-slow', {
      scrollY: {
        translateY: [
          ["elInY", "elCenterY", "elOutY"],
          ['-screenWidth/20', 0, 'screenWidth/20'],
        ]
      }
    });

  lax.addElements('.parallax-fast', {
    scrollY: {
      translateY: [
        ["elInY", "elCenterY", "elOutY"],
        ['screenWidth/50', 0, '-screenWidth/50'],
      ]
    }
  })
}
