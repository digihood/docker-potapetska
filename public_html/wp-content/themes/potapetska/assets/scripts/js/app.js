import '../../styles/fonts.css';
import '../../styles/style.css';
import './header-sticky.js';
import './mobile-menu.js';

// Smooth scroll for anchor links
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var targetId = this.getAttribute('href');
      if (targetId === '#' || targetId.length <= 1) return;
      var target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // Gallery thumbnail click handler
  document.querySelectorAll('.gallery-thumb').forEach(function(thumb) {
    thumb.addEventListener('click', function() {
      var mainImage = document.querySelector('.gallery-main-image');
      if (mainImage) {
        mainImage.src = this.querySelector('img') ? this.querySelector('img').src : this.src;
        document.querySelectorAll('.gallery-thumb').forEach(function(t) { t.classList.remove('active'); });
        this.classList.add('active');
      }
    });
  });
});
