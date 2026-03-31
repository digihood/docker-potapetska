document.addEventListener('DOMContentLoaded', function() {
  const header = document.querySelector('.site-header');
  const topBar = document.querySelector('.top-bar');

  if (!header) return;

  let lastScrollY = 0;

  function handleScroll() {
    const currentY = window.scrollY;

    if (currentY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    if (topBar) {
      if (currentY > 60) {
        topBar.classList.add('hidden-bar');
      } else {
        topBar.classList.remove('hidden-bar');
      }
    }

    lastScrollY = currentY;
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
});
