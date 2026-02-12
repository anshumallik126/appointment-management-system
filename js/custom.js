$(window).on("load", function () {
  $(".header").show();
  $("#main-wrapper").show();
  $(".footer").show();
});
function changed(event) {
  new WOW().init();
}

new WOW().init();

$("#menu-bar").click(function () {
  $(".nav-wrapper").addClass("toggle");
  $("body").addClass("modal-open");
});

$("#close").click(function () {
  $(".nav-wrapper").removeClass("toggle");
  $("body").removeClass("modal-open");
});

$("#drop-icon").click(function () {
  $(".has-sub-menu .sub-menu").slideToggle();
});

//Date Picker
$(function () {
  var date = new Date();

  $(".date").datepicker({
    startDate: date,
    todayHighlight: true,
    toggleActive: true,
    autoclose: true,
  });
});

$(document).ready(function () {
  $(".select").niceSelect();

  $(".select").on("change", function () {
    $(this).siblings(".nice-select").find(".current").css({
      color: "black",
      opacity: "1",
    });
  });

  $("#timepicker").mdtimepicker({
    theme: "red",
  });

  if (Modernizr.touch) {
    // disable keyboard for mobile devices
    // $('[data-disable-touch-keyboard]').attr('readonly', 'readonly');
    let today = new Date().toISOString().substr(0, 10);
    $(".date-picker").attr("type", "date");
    $(".date-picker").val = today;
    $(".clock-picker").attr("type", "time");
    $(".clockpicker").val = "12:00";
  } else {
    $(".date-picker").attr("type", "text");
    $(".clock-picker").attr("type", "text");
    let date = new Date();
    endDate = new Date();
    endDate.setDate(date.getDate() + 10);

    $(".date-picker").datepicker({
      startDate: date,
      endDate: endDate,
      todayHighlight: true,
      toggleActive: true,
      autoclose: true,
      format: "mm/dd/yyyy",
    });
    $(".date-picker").on("click", function () {
      $(this).attr("disabled", "disabled");
    });

    $(".date-picker").on("blur", function () {
      $(this).removeAttr("disabled");
    });
    $(".clock-picker").mdtimepicker({
      theme: "red",
    });

    // $('.select').niceSelect();
  }

  $(".clockpicker").removeAttr("readonly");

  $(".date input").on("click", function () {
    $(this).attr("disabled", "disabled");
  });

  $(".date input").on("blur", function () {
    $(this).removeAttr("disabled");
  });
});

$(".psw-show-btn").on("click", function () {
  if ($(this).hasClass("hide-psw")) {
    $(this).addClass("show-psw").removeClass("hide-psw");
    $(this).prev("input").attr("type", "text");
    $(this).find("i").removeClass("fa-eye-slash").addClass("fa-eye");
  } else if ($(this).hasClass("show-psw")) {
    $(this).prev("input").attr("type", "password");
    $(this).find("i").addClass("fa-eye-slash");
    $(this).removeClass("show-psw").addClass("hide-psw");
  }
});

$(".nav-tabs .nav-link").on("click", function () {
  $(".cs-validation").find(".field").removeClass("error");
  $(".cs-validation").find(".ui.prompt.label").remove();
});

$("#popup_Modal").modal("show");

$(".ui.dropdown").dropdown();

$(".ui.form").form({
  inline: true,
  fields: {
    full_name: {
      identifier: "full_name",
      rules: [
        {
          type: "empty",
          prompt: "Please enter your name",
        },
      ],
    },
    name: {
      identifier: "name",
      rules: [
        {
          type: "empty",
          prompt: "Please enter your name",
        },
      ],
    },

    email: {
      identifier: "email",
      rules: [
        {
          type: "empty",
          prompt: "Please enter your email",
        },
      ],
    },

    password: {
      identifier: "password",
      rules: [
        {
          type: "empty",
          prompt: "Please enter your password",
        },
      ],
    },

    phone: {
      identifier: "phone",
      rules: [
        {
          type: "minLength[10]",
          prompt: "Please enter 10 digits.",
        },
      ],
    },

    date: {
      identifier: "date",
      rules: [
        {
          type: "empty",
          prompt: "Please enter date.",
        },
      ],
    },

    time: {
      identifier: "time",
      rules: [
        {
          type: "empty",
          prompt: "Please enter time.",
        },
      ],
    },

    state: {
      identifier: "state",
      rules: [
        {
          type: "empty",
          prompt: "Please choose one option.",
        },
      ],
    },

    address: {
      identifier: "address",
      rules: [
        {
          type: "empty",
          prompt: "Please Enter Address.",
        },
      ],
    },
  },
});

$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 300) {
      $(".scroll-to-top").addClass("top-arrow");
      $(".sticky-cart-icon").fadeIn();
      $(".nav-section").addClass("onscroll");

      if (window.matchMedia("(max-width: 575px)").matches) {
        $(".leftSidebar .theiaStickySidebar").addClass("onscroll");
      }
    } else {
      $(".scroll-to-top").removeClass("top-arrow");
      $(".sticky-cart-icon").fadeOut();
      $(".nav-section").removeClass("onscroll");
      if (window.matchMedia("(max-width: 575px)").matches) {
        $(".leftSidebar .theiaStickySidebar").removeClass("onscroll");
      }
    }
  });

  $(".scroll-to-top").on("click", function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      2000,
      "easeInOutQuint",
    );
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
});

var $container = $(".filterdiv");
$container.isotope({
  filter: "*",
  layoutMode: "masonry",
  animationOptions: {
    duration: 750,
    easing: "linear",
    queue: true,
    layoutMode: "fitRows",
  },
});

function openNav() {
  $("#mySidenav").css("width", "250px");
}

function closeNav() {
  $("#mySidenav").css("width", "0");
}

$(".menu-icon-bar").click(function () {
  openNav();
});

$(".has-sub-menu").click(function () {
  $(this).children(".sub-menu-class").slideToggle();
  $(this).find("#drop-icon").toggleClass("rotate");
});

$(document).ready(function () {
  var hash = window.location.hash;
  if (hash && $(hash).length) {
    $(".nav-link").removeClass("active");
    $(".tab-pane").removeClass("show active");
    $('a[href="' + hash + '"]').addClass("active");
    $(hash).addClass("show active");
  }
});

$(document).ready(function () {
  $("#sign-up-btn").click(function () {
    $(".container").addClass("sign-up-mode");
  });
  $("#sign-in-btn").click(function () {
    $(".container").removeClass("sign-up-mode");
  });
});

$(".user-dashboard .nav-link").click(function () {
  console.log($(this).attr("id"));
});

const appointmentCtx = document
  .getElementById("appointmentChart")
  .getContext("2d");
new Chart(appointmentCtx, {
  type: "line",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    datasets: [
      {
        label: "Appointments",
        data: [45, 60, 75, 90, 80, 100],
        borderColor: "#2E7D32",
        backgroundColor: "rgba(76,175,80,0.2)",
        fill: true,
        tension: 0.4,
      },
    ],
  },
  options: {
    responsive: true,
  },
});

const statusCtx = document.getElementById("statusChart").getContext("2d");
new Chart(statusCtx, {
  type: "doughnut",
  data: {
    labels: ["Completed", "Pending", "Cancelled"],
    datasets: [
      {
        data: [856, 120, 40],
        backgroundColor: ["#4CAF50", "#FFC107", "#F44336"],
      },
    ],
  },
  options: {
    cutout: "70%",
    responsive: true,
    maintainAspectRatio: false,
  },
});
$("#editProfileBtn").click(function () {
  $(".profile-form-wrapper").slideToggle(400);

  if ($(this).text().trim() === "Edit Profile") {
    $(this).html('<i class="fa fa-times mr-2"></i> Cancel');
  } else {
    $(this).html('<i class="fa fa-edit mr-2"></i> Edit Profile');
  }
});
