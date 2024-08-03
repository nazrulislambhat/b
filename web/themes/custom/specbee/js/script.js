(function ($) {
  $(document).ready(function () {
    $(".conferences-card").each(function () {
      var priceField = $(this).find(".views-field-field-price");
      var price = priceField.text().trim();

      if (price === "") {
        priceField.text("FREE");
      } else {
        priceField.text("₹" + price);
      }

      $(this).on("click", function () {
        console.log("You clicked on a conferences card");
      });
    });
  });
})(jQuery);
