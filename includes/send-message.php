<?php
include_once ("db-connection.php");

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

      // $to = 'info@landandhomesconsult.com';
      // $headers = "MIME-Version: 1.0\r\n";
      // $headers .= "Content-type: text/html; charset=utf-8\r\n";
      // $headers .= "From: Possible client <$email>\r\n";
      // $headers .= "Reply-To: $email\r\n";

      // $subject = "Message from potential client";
      // $messageSend = "
      //     <html>
      //         <body>
      //             <h4>Message from a potential client</h4>
      //             <p><strong>Full Name:</strong> $fullname</p>
      //             <p><strong>Email:</strong> $email</p>
      //             <p><strong>Phone:</strong> $phone</p>
      //             <h4>Message</h4>
      //             <p>$message</p>
      //         </body>
      //     </html>
      // ";

      // mail($to, $subject, $messageSend, $headers);
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
