(function ($) {
  $(document).ready(function () {
    $(".conferences-card").each(function () {
      var priceField = $(this).find(".views-field-field-price");
      var price = priceField.text().trim();
      // Checking if the card is inside a .past-conferences div
      if ($(this).closest(".past-conferences").length > 0) {
        priceField.hide(); // Hiding the price field if it's in a past-conferences div
      } else {
        if (price === "") {
          priceField.text("FREE"); // Setting the price to FREE if it's empty
        } else {
          priceField.text("₹" + " " + price); // Adding ₹ before the price
        }
      }
    });
  });
})(jQuery);
