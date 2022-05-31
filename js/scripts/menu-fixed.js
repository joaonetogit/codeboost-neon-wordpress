{
  const header = document.getElementById("js-header");
  function fixedMenu() {
    if (window.pageYOffset > 80) {
      header.classList.add("fixed-menu");
    } else {
      header.classList.remove("fixed-menu");
    }
  }

  if (document) {
    document.addEventListener("scroll", fixedMenu);
  }
}
