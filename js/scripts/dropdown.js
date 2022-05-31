{
  const btnDropdown = document.querySelector(".js-btn-dropdown");
  const dropdown = document.querySelector("#js-dropdown");
  function openDropdown(event) {
    event.preventDefault();
    dropdown.classList.toggle("active");
  }

  if (btnDropdown) {
    btnDropdown.addEventListener("click", openDropdown);
  }

  if (dropdown) {
    dropdown.addEventListener("mouseleave", openDropdown);
  }
}
