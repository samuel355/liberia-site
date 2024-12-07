$(document).ready(function () {
  $("#enquiry-hero-form").submit(function (e) {
    e.preventDefault();

    var fullname = $("#fullname").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var service = $("#service").val();
    var message = $("#message").val();

    if (fullname === "" || fullname === undefined) {
      toastr.error("Enter your full name");
      $(".fullname-error").text("Enter your full name");
      $(".fullname-error").css("color", "red");
      return;
    } else {
      $(".fullname-error").text("");
      $(".fullname-error").css("diplay", "none");
    }

    if (phone === "" || phone === undefined) {
      toastr.error("Enter your phone number");
      $(".phone-error").text("Enter your phone number");
      $(".phone-error").css("color", "red");
      return;
    } else {
      $(".phone-error").text("");
      $(".phone-error").css("diplay", "none");
    }

    if (email === "" || email === undefined) {
      toastr.error("Enter your email");
      $(".email-error").text("Enter your email");
      $(".email-error").css("color", "red");
      return;
    } else {
      $(".email-error").text("");
      $(".email-error").css("diplay", "none");
    }

    if (
      service === "Choose Service" ||
      service === "" ||
      service === undefined
    ) {
      toastr.error("Choose service");
      $(".service-error").text("Choose service");
      $(".service-error").css("color", "red");
      return;
    } else {
      $(".service-error").text("");
      $(".service-error").css("diplay", "none");
    }

    if (message === "" || message === undefined) {
      toastr.error("Enter your message");
      $(".message-error").text("Enter your message");
      $(".message-error").css("color", "red");
      return;
    } else {
      $(".message-error").text("");
      $(".message-error").css("diplay", "none");
    }

    $.ajax({
      data: $("#enquiry-hero-form").serialize(),
      method: "POST",
      url: "../includes/send-message.php",

      success: function (response) {
        if (response === "Success") {
          $("#enquiry-hero-form")[0].reset();
          toastr.success(
            "Thank you for your message " +
              fullname +
              ", Our help desk will get in touch with you shortly."
          );
        } else {
          toastr.error(response);
          //window.location.reload(true);
        }
      },
      error: function (error) {
        if (error) {
          console.log(error);
        }
      },
    });
  });
});
