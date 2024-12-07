$(document).ready(function () {
  $("#enquiry-hero-form").submit(function (e) {
    e.preventDefault();

    var fullname = $("#fullname-hr").val();
    var phone = $("#phone-hr").val();
    var email = $("#email-hr").val();
    var service = $("#service-hr").val();
    var message = $("#message-hr").val();

    if (fullname === "" || fullname === undefined) {
      toastr.error("Enter your full name");
      $(".fullname-error-hr").text("Enter your full name");
      $(".fullname-error-hr").css("color", "red");
      return;
    } else {
      $(".fullname-error-hr").text("");
      $(".fullname-error-hr").css("diplay", "none");
    }

    if (phone === "" || phone === undefined) {
      toastr.error("Enter your phone number");
      $(".phone-error-hr").text("Enter your phone number");
      $(".phone-error-hr").css("color", "red");
      return;
    } else {
      $(".phone-error-hr").text("");
      $(".phone-error-hr").css("diplay", "none");
    }

    if (email === "" || email === undefined) {
      toastr.error("Enter your email");
      $(".email-error-hr").text("Enter your email");
      $(".email-error-hr").css("color", "red");
      return;
    } else {
      $(".email-error-hr").text("");
      $(".email-error-hr").css("diplay", "none");
    }

    if (
      service === "Choose Service" ||
      service === "" ||
      service === undefined
    ) {
      toastr.error("Choose service");
      $(".service-error-hr").text("Choose service");
      $(".service-error-hr").css("color", "red");
      return;
    } else {
      $(".service-error-hr").text("");
      $(".service-error-hr").css("diplay", "none");
    }

    if (message === "" || message === undefined) {
      toastr.error("Enter your message");
      $(".message-error-hr").text("Enter your message");
      $(".message-error-hr").css("color", "red");
      return;
    } else {
      $(".message-error-hr").text("");
      $(".message-error-hr").css("diplay", "none");
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

  $("#chat-icon-form").submit(function (e) {
    e.preventDefault();

    var fullname = $("#fullname-ci").val();
    var phone = $("#phone-ci").val();
    var email = $("#email-ci").val();
    var service = $("#service-ci").val();
    var message = $("#message-ci").val();

    if (fullname === "" || fullname === undefined) {
      toastr.error("Enter your full name");
      $(".fullname-error-ci").text("Enter your full name");
      $(".fullname-error-ci").css("color", "red");
      return;
    } else {
      $(".fullname-error-ci").text("");
      $(".fullname-error-ci").css("diplay", "none");
    }

    if (phone === "" || phone === undefined) {
      toastr.error("Enter your phone number");
      $(".phone-error-ci").text("Enter your phone number");
      $(".phone-error-ci").css("color", "red");
      return;
    } else {
      $(".phone-error-ci").text("");
      $(".phone-error-ci").css("diplay", "none");
    }

    if (email === "" || email === undefined) {
      toastr.error("Enter your email");
      $(".email-error-ci").text("Enter your email");
      $(".email-error-ci").css("color", "red");
      return;
    } else {
      $(".email-error-ci").text("");
      $(".email-error-ci").css("diplay", "none");
    }

    if (
      service === "Choose Service" ||
      service === "" ||
      service === undefined
    ) {
      toastr.error("Choose service");
      $(".service-error-ci").text("Choose service");
      $(".service-error-ci").css("color", "red");
      return;
    } else {
      $(".service-error-ci").text("");
      $(".service-error-ci").css("diplay", "none");
    }

    if (message === "" || message === undefined) {
      toastr.error("Enter your message");
      $(".message-error-ci").text("Enter your message");
      $(".message-error-ci").css("color", "red");
      return;
    } else {
      $(".message-error-ci").text("");
      $(".message-error-ci").css("diplay", "none");
    }

    $.ajax({
      data: $("#chat-icon-form").serialize(),
      method: "POST",
      url: "../includes/send-message.php",

      success: function (response) {
        if (response === "Success") {
          $("#chat-icon-form")[0].reset();
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

  $("#contact-page-form").submit(function (e) {
    e.preventDefault();

    var fullname = $("#fullname-cp").val();
    var phone = $("#phone-cp").val();
    var email = $("#email-cp").val();
    var service = $("#service-cp").val();
    var message = $("#message-cp").val();

    if (fullname === "" || fullname === undefined) {
      toastr.error("Enter your full name");
      $(".fullname-error-cp").text("Enter your full name");
      $(".fullname-error-cp").css("color", "red");
      return;
    } else {
      $(".fullname-error-cp").text("");
      $(".fullname-error-cp").css("diplay", "none");
    }

    if (email === "" || email === undefined) {
      toastr.error("Enter your email");
      $(".email-error-cp").text("Enter your email");
      $(".email-error-cp").css("color", "red");
      return;
    } else {
      $(".email-error-cp").text("");
      $(".email-error-cp").css("diplay", "none");
    }

    if (phone === "" || phone === undefined) {
      toastr.error("Enter your phone number");
      $(".phone-error-cp").text("Enter your phone number");
      $(".phone-error-cp").css("color", "red");
      return;
    } else {
      $(".phone-error-cp").text("");
      $(".phone-error-cp").css("diplay", "none");
    }

    if (
      service === "Choose Service" ||
      service === "" ||
      service === undefined
    ) {
      toastr.error("Choose service");
      $(".service-error-cp").text("Choose service");
      $(".service-error-cp").css("color", "red");
      return;
    } else {
      $(".service-error-cp").text("");
      $(".service-error-cp").css("diplay", "none");
    }

    if (message === "" || message === undefined) {
      toastr.error("Enter your message");
      $(".message-error-cp").text("Enter your message");
      $(".message-error-cp").css("color", "red");
      return;
    } else {
      $(".message-error-cp").text("");
      $(".message-error-cp").css("diplay", "none");
    }

    $.ajax({
      data: $("#contact-page-form").serialize(),
      method: "POST",
      url: "../includes/send-message.php",

      success: function (response) {
        if (response === "Success") {
          $("#contact-page-form")[0].reset();
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
