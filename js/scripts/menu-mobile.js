{
  const btnMenuMobile = document.getElementById("js-btn-menu-mobile");
  const overlayMenu = document.getElementById("js-overlay");
  function menuMobile() {
    document.documentElement.classList.toggle("menu-opened");
  }

  if (btnMenuMobile) {
    btnMenuMobile.addEventListener("click", menuMobile);
  }

  if (overlayMenu) {
    overlayMenu.addEventListener("click", menuMobile);
  }
}
