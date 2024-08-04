(function ($) {
  $(document).ready(function () {
    // Function to show the slider and activate the corresponding button
    function showSlider(index) {
      $sliders.removeClass("active").eq(index).addClass("active"); // Show the slider based on the index
      $buttons.removeClass("active").eq(index).addClass("active"); // Activate the button based on the index
    }

    // Selecting all sliders and buttons
    const $sliders = $(".conference-slider"); // Select all slider elements
    const $buttons = $(".tab-button"); // Select all tab button elements

    // Set up a click event listener on all button elements stored in the $buttons variable
    $buttons.on("click", function () {
      const index = $buttons.index(this); // Get the index of the clicked button within the $buttons collection
      showSlider(index); // Call the showSlider function with the index to display the corresponding slider content
    });

    // Find the index of the button that has the "active" class
    const activeIndex = $buttons.index($buttons.filter(".active"));
    // If there is an active button, show its corresponding slider; otherwise, show the first slider
    showSlider(activeIndex >= 0 ? activeIndex : 0);

    // Iterate over each conference card
    $(".conferences-card").each(function () {
      let priceField = $(this).find(".views-field-field-price"); // Find the price field within the card
      let price = priceField.text().trim(); // Get the trimmed text content of the price field
      let imageField = $(this).find("views-field-field-card-image"); // Find the image field within the card

      // Check if the card is inside a .past-conferences div
      if ($(this).closest(".past-conferences").length > 0) {
        priceField.hide(); // Hide the price field if it's in a past-conferences div
      } else {
        if (price === "") {
          priceField.text("FREE"); // Set the price to FREE if it's empty
        } else {
          priceField.text("₹" + " " + price); // Add ₹ before the price
        }
      }
    });
  });
})(jQuery);
