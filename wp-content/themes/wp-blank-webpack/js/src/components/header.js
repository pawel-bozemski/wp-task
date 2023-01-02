
export class Header {
  init() {
    const hamburger = document.querySelector('.header__menu__hamburger');
    const mobileMenu = document.querySelector('.header__mobile')
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      mobileMenu.classList.toggle('active');
    })
  }
}
