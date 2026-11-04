(function () {
  var toggle = document.querySelector(".nav-toggle");
  var links = document.querySelector(".nav-links");
  if (toggle && links) {
    toggle.addEventListener("click", function () {
      var open = links.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
  }

  var features = document.querySelectorAll(".feature");
  if (features.length) {
    if (!("IntersectionObserver" in window)) {
      features.forEach(function (el) {
        el.classList.add("is-in");
      });
    } else {
      var io = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-in");
              io.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.2, rootMargin: "0px 0px -8% 0px" }
      );

      features.forEach(function (el) {
        io.observe(el);
      });
    }
  }

  document.querySelectorAll(".faq-question").forEach(function (button) {
    button.addEventListener("click", function () {
      var item = button.closest(".faq-item");
      var open = item.classList.toggle("is-open");
      button.setAttribute("aria-expanded", open ? "true" : "false");
    });
  });

  var searchInput = document.getElementById("faqSearch");
  var emptyState = document.getElementById("faqEmpty");
  if (searchInput) {
    searchInput.addEventListener("input", function () {
      var query = searchInput.value.trim().toLowerCase();
      var visibleCount = 0;

      document.querySelectorAll(".faq-category").forEach(function (category) {
        var visibleInCategory = 0;
        category.querySelectorAll(".faq-item").forEach(function (item) {
          var text = item.textContent.toLowerCase();
          var show = !query || text.indexOf(query) !== -1;
          item.hidden = !show;
          if (show) {
            visibleInCategory += 1;
            visibleCount += 1;
          }
        });
        category.hidden = visibleInCategory === 0;
      });

      if (emptyState) {
        emptyState.hidden = visibleCount > 0;
      }
    });
  }
})();
