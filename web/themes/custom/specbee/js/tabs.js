$(document).ready(function () {
  const $sliders = $(".conference-slider");
  const $buttons = $(".tab-button");

  function showSlider(index) {
    $sliders.removeClass("active").eq(index).addClass("active");
    $buttons.removeClass("active").eq(index).addClass("active");
  }

  $buttons.on("click", function () {
    const index = $buttons.index(this);
    showSlider(index);
  });

  const activeIndex = $buttons.index($buttons.filter(".active"));
  showSlider(activeIndex >= 0 ? activeIndex : 0);
});
