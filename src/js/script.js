// Bootstrap
// Navbar
import Collapse from 'bootstrap/js/dist/collapse.js'
import Dropdowns from 'bootstrap/js/dist/dropdown.js'
import * as Popper from "@popperjs/core";

// Glide carousel
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm.js'

const sliders = document.querySelectorAll('.glide');

sliders.forEach((slider) => {
  new Glide(slider, {
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
});

// Booking modal
import Modal from 'bootstrap/js/dist/modal.js'

const bookingModal = document.getElementById('bookingModal')
bookingModal.addEventListener('shown.bs.modal', event => {
  let modalIframe = bookingModal.querySelector('iframe');
  let modalIframeDataSrc = modalIframe.getAttribute('data-src');

  if (modalIframeDataSrc) {
    modalIframe.src = modalIframeDataSrc;
    modalIframe.removeAttribute('data-src');
  }
})
