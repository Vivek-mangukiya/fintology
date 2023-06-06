// header js start
$(window).scroll(function () {
  if ($(this).scrollTop() > 0) {
    $("header").addClass("fixed");
  } else {
    $("header").removeClass("fixed");
  }
});
// header js end
// mobile menu js start
$(document).ready(function () {
  $(".mobile-menu-ico").click(function () {
    $(".mobile-menu-wrap").addClass("mobile-menu-wrap-show");
  });

  $(".close-ico").click(function () {
    $(".mobile-menu-wrap").removeClass("mobile-menu-wrap-show");
  });
});

$(document).mouseup(function (e) {
  var popup = $(".mobile-menu-wrap");
  if (
    !$(".mobile-menu-ico").is(e.target) &&
    !popup.is(e.target) &&
    popup.has(e.target).length == 0
  ) {
    popup.removeClass("mobile-menu-wrap-show");
  }
});
$(document).ready(function () {
  $(".list-menu .link").click(function () {
    $(".mobile-menu-wrap").removeClass("mobile-menu-wrap-show");
  });
});
// mobile menu js end
// Counting number js start
$(".count-number").each(function () {
  $(this)
    .prop("Counter", 0)
    .animate(
      {
        Counter: $(this).text(),
      },
      {
        duration: 4000,
        easing: "swing",
        step: function (now) {
          $(this).text(Math.ceil(now));
        },
      }
    );
});
// Counting number js end

// AOS start
AOS.init();
// AOS end

$(document).ready(function () {
  $("#view-more1").click(function () {
    var elem = $("#view-more1").text();
    if (elem == "View More") {
      $("#view-more1").text("View Less");
      $("#tax-view-short").addClass("d-none");
      $("#tax-view-all").removeClass("d-none");
    } else {
      $("#view-more1").text("View More");
      $("#tax-view-all").addClass("d-none");
      $("#tax-view-short").removeClass("d-none");
    }
  });

  $("#view-more2").click(function () {
    var elem = $("#view-more2").text();
    if (elem == "View More") {
      $("#view-more2").text("View Less");
      $("#insurance-view-short").addClass("d-none");
      $("#insurance-view-all").removeClass("d-none");
    } else {
      $("#view-more2").text("View More");
      $("#insurance-view-all").addClass("d-none");
      $("#insurance-view-short").removeClass("d-none");
    }
  });
});
// loader js start
var myVar;

function myLoader() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
// loader js end
