import Swiper from "swiper/bundle";
import sharer from "sharer.js";

jQuery(function ($) {
  // Burger Menu
  $(".ya-header__burger").on("click", function () {
    $("body").toggleClass("show-burger");
    $(".ya-header__burger-menu").fadeToggle();
  });

  $(".ya-header__burger-menu a").on("click", function () {
    $("body").removeClass("show-burger");
    $(".ya-header__burger-menu").fadeToggle();
  });

  // Sticky Bar
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 250) {
      $("body").addClass("sticky");
    } else if ($(window).scrollTop() < 250) {
      $("body").removeClass("sticky");
    }
  });

  // Cart
  $(".ya-header__cart-open").on("click", function () {
    $(".ya-side-cart").addClass("open-cart");
  });

  $(".ya-side-cart__close").on("click", function () {
    $(".ya-side-cart").removeClass("open-cart");
  });

  // Search modal
  $(".ya-header__search, .search-modal__close").on("click", function () {
    $(".search-modal").fadeToggle();
  });

  // Escape
  document.onkeydown = function (evt) {
    var isEscape = false;
    if ("key" in evt) {
      isEscape = evt.key === "Escape" || evt.key === "Esc";
    } else {
      isEscape = evt.keyCode === 27;
    }
    if (isEscape) {
      $(".search-modal").fadeOut();
      $(".ya-side-cart").removeClass("open-cart");
    }
  };

  // Click outside search
  $(".search-modal, .search-modal__container").on("click", function (e) {
    if (e.target !== this) return;
    $(".search-modal").fadeOut();
  });

  let swiperOptions = {};
  if ($(".hero-home__slider .swiper-wrapper .swiper-slide").length == 1) {
    swiperOptions = {
      slidesPerView: 1,
      loop: false,
      autoplay: false,
    };
  } else {
    swiperOptions = {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 4000,
      },
    };
  }

  const heroSlider = new Swiper(".hero-home__slider", swiperOptions);

  // Change Qty
  $(document).on("click", ".plus", function (e) {
    e.preventDefault();
    var val = $(this).parents(".quantity").find("input.qty").val();
    if (val) {
      if (parseFloat(val) >= 1) {
        var newVal = parseFloat(val) + 1;
        $(this)
          .parents(".quantity")
          .find("input.qty")
          .val(newVal)
          .trigger("change");
      }
    } else {
      var oldVal = 0;
      if (parseFloat(oldVal) >= 0) {
        var newVal = parseFloat(oldVal) + 1;
        $(this)
          .parents(".quantity")
          .find("input.qty")
          .val(newVal)
          .trigger("change");
      }
    }
  });

  $(document).on("click", ".minus", function (e) {
    e.preventDefault();
    var val = $(this).parents(".quantity").find("input.qty").val();
    if (val) {
      if (parseFloat(val) > 1) {
        var newVal = parseFloat(val) - 1;
        $(this)
          .parents(".quantity")
          .find("input.qty")
          .val(newVal)
          .trigger("change");
      }
    }
  });
});
