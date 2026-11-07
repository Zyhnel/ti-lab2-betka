const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('#site-navigation');

if (menuToggle && menu) {
  const setExpanded = (expanded) => {
    menuToggle.setAttribute('aria-expanded', String(expanded));
    menuToggle.setAttribute(
      'aria-label',
      expanded ? 'Zamknij menu nawigacji' : 'Otwórz menu nawigacji',
    );
  };

  const closeMenu = () => {
    menu.classList.remove('menu--open');
    setExpanded(false);
  };

  menuToggle.addEventListener('click', () => {
    const isOpen = menu.classList.toggle('menu--open');
    setExpanded(isOpen);
  });

  menu.addEventListener('click', (event) => {
    if (event.target instanceof Element && event.target.closest('a')) {
      closeMenu();
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && menu.classList.contains('menu--open')) {
      closeMenu();
      menuToggle.focus();
    }
  });
}
