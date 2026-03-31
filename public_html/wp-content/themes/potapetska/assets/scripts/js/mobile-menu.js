document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.querySelector('.js-mobile-toggle');
  const menu = document.querySelector('.mobile-menu');
  const openIcon = document.querySelector('.hamburger-open');
  const closeIcon = document.querySelector('.hamburger-close');

  if (!toggle || !menu) return;

  function toggleMenu() {
    const isOpen = menu.classList.toggle('open');
    if (openIcon && closeIcon) {
      openIcon.style.display = isOpen ? 'none' : 'block';
      closeIcon.style.display = isOpen ? 'block' : 'none';
    }
  }

  toggle.addEventListener('click', toggleMenu);

  // Close on link click
  menu.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      menu.classList.remove('open');
      if (openIcon && closeIcon) {
        openIcon.style.display = 'block';
        closeIcon.style.display = 'none';
      }
    });
  });

  // Close on ESC
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && menu.classList.contains('open')) {
      toggleMenu();
    }
  });
});
