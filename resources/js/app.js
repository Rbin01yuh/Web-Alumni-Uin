import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Reveal-on-scroll (IntersectionObserver) + prefers-reduced-motion support
document.addEventListener('DOMContentLoaded', () => {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const elements = document.querySelectorAll('.reveal');
  if (reduceMotion) {
    elements.forEach((el) => {
      el.classList.remove('opacity-0', 'translate-y-4');
      el.classList.add('opacity-100', 'translate-y-0');
    });
    return;
  }

  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const delay = el.getAttribute('data-io-delay') || '0ms';
        el.style.transitionDelay = delay;
        el.classList.add('opacity-100', 'translate-y-0');
        io.unobserve(el);
      }
    });
  }, { threshold: 0.2 });

  elements.forEach((el) => {
    el.classList.add('opacity-0', 'translate-y-4', 'transition', 'duration-700');
    io.observe(el);
  });
});

// Alpine init
document.addEventListener('alpine:init', () => {
  Alpine.store('ui', {
    openDemo() { window.dispatchEvent(new CustomEvent('open-modal', { detail: 'demoModal' })); },
    closeDemo() { window.dispatchEvent(new CustomEvent('close-modal', { detail: 'demoModal' })); },
  });
});

Alpine.start();
