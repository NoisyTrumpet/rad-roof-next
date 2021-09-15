// Tiny Slider
import { tns } from 'tiny-slider/src/tiny-slider';
import 'lightbox2/src/js/lightbox';
import 'bootstrap/js/dist/util';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Photo Sliders
    let sliders = document.querySelectorAll('.slider');
    if ( sliders ) {
      sliders.forEach((item) => {
        tns({
          container: item,
          mouseDrag: true,
          items: 1,
          responsive: {
            700: {
              items: 3,
            },
          },
          slideBy: 'page',
          gutter: 30,
          controlsText: [ '<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>' ],
        });
      });
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
