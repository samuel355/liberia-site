$(document).ready(function () {
  $("#contact-form").submit(function (e) {
    e.preventDefault();
    toastr.error("about to submit a form");
    toastr.success("about to submit a form");
  });
});
