document.addEventListener("DOMContentLoaded", () => {
  const sliders = document.querySelectorAll(".conference-slider");
  const buttons = document.querySelectorAll(".tab-button");

  function showSlider(index) {
    sliders.forEach((slider, i) => {
      slider.classList.toggle("active", i === index);
    });
    buttons.forEach((button, i) => {
      button.classList.toggle("active", i === index);
    });
  }

  buttons.forEach((button, index) => {
    button.addEventListener("click", () => showSlider(index));
  });

  const activeIndex = Array.from(buttons).findIndex((button) =>
    button.classList.contains("active")
  );
  showSlider(activeIndex >= 0 ? activeIndex : 0);
});
