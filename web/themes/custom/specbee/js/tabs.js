document.addEventListener("DOMContentLoaded", function () {
  function showSlider(index) {
    document.querySelectorAll(".conference-slider").forEach((slider) => {
      slider.classList.remove("active");
    });
    document.querySelectorAll(".tab-button").forEach((button) => {
      button.classList.remove("active");
    });
    document
      .querySelectorAll(".conference-slider")
      [index].classList.add("active");
    document.querySelectorAll(".tab-button")[index].classList.add("active");
  }
  document.querySelectorAll(".tab-button").forEach((button, index) => {
    button.addEventListener("click", () => {
      showSlider(index);
    });
  });
  const activeIndex = Array.from(
    document.querySelectorAll(".tab-button")
  ).findIndex((button) => button.classList.contains("active"));
  showSlider(activeIndex >= 0 ? activeIndex : 0);
});
