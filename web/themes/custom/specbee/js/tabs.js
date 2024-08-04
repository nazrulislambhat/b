$(document).ready(function () {
  const $sliders = $(".conference-slider"); // Selecting all the sliders
  const $buttons = $(".tab-button"); // Selecting all the buttons

  function showSlider(index) {
    $sliders.removeClass("active").eq(index).addClass("active"); // Showing the slider based on the index
    $buttons.removeClass("active").eq(index).addClass("active"); // Adding active class to the button based on the index
  }
  // Set up a click event listener on all button elements stored in the $buttons variable
  $buttons.on("click", function () {
    const index = $buttons.index(this); // Get the index of the clicked button within the $buttons collection
    showSlider(index); // Call the showSlider function with the index to display the corresponding slider content
  });

  // Find the index of the button that has the "active" class
  const activeIndex = $buttons.index($buttons.filter(".active"));
  showSlider(activeIndex >= 0 ? activeIndex : 0); // If there is an active button, show its corresponding slider; otherwise, show the first slider
});
