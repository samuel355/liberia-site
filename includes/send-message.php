<?php
include_once("db-connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_POST['email']) || !filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit;
  }

  // Sanitize
  $fullname = mysqli_real_escape_string($con, trim($_POST['fullname'] ?? ''));
  $phone = mysqli_real_escape_string($con, trim($_POST['phone'] ?? ''));
  $email = mysqli_real_escape_string($con, trim($_POST['email'] ?? ''));
  $service = mysqli_real_escape_string($con, trim($_POST['service'] ?? ''));
  $message = mysqli_real_escape_string($con, trim($_POST['message'] ?? ''));
  $msg_date = date('Y-m-d') . ' at ' . date('H:i:s');

  // Ensure required fields are not empty
  if (empty($fullname) || empty($phone) || empty($service) || empty($message)) {
    echo "Please fill in all the required fields.";
    exit;
  }

  try {
    // Use prepared statements to insert data
    $query = "INSERT INTO messages (fullname, email, phone, service, message, date) 
                  VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssss", $fullname, $email, $phone, $service, $message, $msg_date);

    if ($stmt->execute()) {
      echo 'Success';

      $to = 'enquiries@contourslimited.com, contoursltd@gmail.com';
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      $headers .= "From: Possible client <$email>\r\n";
      $headers .= "Reply-To: $email\r\n";

      $subject = "Message from potential client";

      $messageSend = "
        <!DOCTYPE html>
          <html lang='en'>
          <head>
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <style>
                  body {
                      font-family: Arial, sans-serif;
                      background-color: #f9f9f9;
                      margin: 0;
                      padding: 0;
                  }
                  .email-container {
                      max-width: 600px;
                      margin: 20px auto;
                      background-color: #ffffff;
                      border: 1px solid #e0e0e0;
                      border-radius: 8px;
                      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                  }
                  .header {
                      background-color: #4CAF50;
                      color: #ffffff;
                      text-align: center;
                      padding: 20px;
                      border-radius: 8px 8px 0 0;
                  }
                  .content {
                      padding: 20px;
                      color: #333333;
                  }
                  .content p {
                      margin: 10px 0;
                      font-size: 16px;
                  }
                  .content .label {
                      font-weight: bold;
                      color: #4CAF50;
                  }
                  .footer {
                      text-align: center;
                      background-color: #f1f1f1;
                      padding: 15px;
                      border-radius: 0 0 8px 8px;
                      font-size: 14px;
                      color: #555555;
                  }
              </style>
          </head>
          <body>
              <div class='email-container'>
                  <div class='header'>
                      <h1>New Enquiries Form Submission</h1>
                  </div>
                  <div class='content'>
                      <p><span class='label'>Full Name:</span> $fullname</p>
                      <p><span class='label'>Email:</span> $email</p>
                      <p><span class='label'>Phone:</span> $phone</p>
                      <p><span class='label'>Service:</span> $service</p>
                      <p><span class='label'>Message:</span></p>
                      <p>$message</p>
                  </div>
                  <div class='footer'>
                      <p>&copy; Contours Ltd. All rights reserved.</p>
                  </div>
              </div>
          </body>
          </html>

      ";

      mail($to, $subject, $messageSend, $headers);
    } else {
      echo 'Failed to send the message. Please try again.';
    }
    $stmt->close();
  } catch (Exception $e) {
    // Log the error and show a generic message to the user
    error_log($e->getMessage());
    echo "An error occurred. Please try again later.";
  }
} else {
  echo "Invalid request method.";
}
