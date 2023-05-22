const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting && !entry.target.classList.contains("show")) {
            entry.target.classList.add("show");
        }
    });
});

const hiddenElementsLeft = document.querySelectorAll(".caspart-left");
hiddenElementsLeft.forEach((element) => {
    observer.observe(element);
});

const hiddenElementsRight = document.querySelectorAll(".caspart-right");
hiddenElementsRight.forEach((element) => {
    observer.observe(element);
});

const hiddenElementsTop = document.querySelectorAll(".caspart-top");
hiddenElementsTop.forEach((element) => {
    observer.observe(element);
});

const hiddenElementsBottom = document.querySelectorAll(".caspart-bottom");
hiddenElementsBottom.forEach((element) => {
    observer.observe(element);
});

// OFF TOPIC
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

$(document).ready(function () {
    $("#contact-form").submit(function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Perform form validation
        var isValid = true;
        $("#contact-form input").each(function () {
            if ($(this).val() === "") {
                isValid = false;
                return false; // Exit the loop if any required field is empty
            }
        });

        if (!isValid) {
            // Handle the case when required fields are empty
            document.getElementById("theError").style.display = "block";
            return; // Stop further execution
        }

        // Proceed with form submission
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function (response) {
                // If the form submission is successful, you can perform any actions you want here
                document.getElementById("contact-form").style.display = "none";
                document.getElementById("succesfully").style.display = "block";

                // You can display a success message or redirect the user to another page
                // For example: $('#succesfully').show();
            },
            error: function (xhr, status, error) {
                // If there are errors during the submission, you can handle error messages here
                console.error("Error submitting the form");
            },
        });
    });
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > $("#despre-noi").offset().top - 470) {
            $("#scrollToTop").fadeIn();
        } else {
            $("#scrollToTop").fadeOut();
        }
    });

    $("#scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 0);
        return false;
    });
});

$("#open-main-menu").click(function() {
    $("#mobile-menu").removeClass("hidden").addClass("open");
  });
  
  $("#close-main-menu").click(function() {
    $("#mobile-menu").removeClass("open").addClass("hidden");
  });

  $("#mobile-btn").click(function() {
    $("#mobile-menu").removeClass("open").addClass("hidden");
  });
  
  $("#mobile-btn1").click(function() {
    $("#mobile-menu").removeClass("open").addClass("hidden");
  });
  
  $("#mobile-btn2").click(function() {
    $("#mobile-menu").removeClass("open").addClass("hidden");
  });
  
  $("#mobile-btn3").click(function() {
    $("#mobile-menu").removeClass("open").addClass("hidden");
  });
  
  $("#mobile-btn4").click(function() {
    $("#mobile-menu").removeClass("open").addClass("hidden");
  });
  