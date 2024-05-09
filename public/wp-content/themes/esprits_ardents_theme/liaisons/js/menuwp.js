// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Get the hamburger button and the menu
  const hamburgerButton = document.querySelector(
    '[data-collapse-toggle="navbar-sticky"]'
  );
  const menu = document.getElementById("navbar-sticky");

  // Add a click event listener to the hamburger button
  hamburgerButton.addEventListener("click", function () {
    // Toggle the 'hidden' class on the menu
    menu.classList.toggle("hidden");

    // Check if the menu is now visible
    const isVisible = !menu.classList.contains("hidden");

    // Set aria-expanded attribute to reflect the visibility state
    hamburgerButton.setAttribute("aria-expanded", isVisible);
  });
});
