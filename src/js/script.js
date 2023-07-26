// Bootstrap
import { collapse } from 'bootstrap'

// Glide carousel
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm.js'

new Glide('.glide', {
  type: 'carousel',
  focus: 'center',
  gap: 192,
  breakpoints: {
    1399: {
      gap: 176
    },
    1199: {
      gap: 144
    },
    991: {
      gap: 144
    },
    767: {
      gap: 112
    }
  }
}).mount({ Controls, Breakpoints })
