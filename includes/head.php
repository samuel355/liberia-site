<?php
$pageFile = basename($_SERVER['PHP_SELF']);
$pageTitle = "Contours Ltd";

switch ($pageFile) {
  case 'index.php':
    $pageTitle = "Contours Ltd";
    break;
  case 'contact.php':
    $pageTitle = "Contact Us - Contours Ltd";
    break;
  case 'about-us.php':
    $pageTitle = "About Us - Contours Ltd";
    break;
  case 'services.php':
    $pageTitle = "Our Services - Contours Ltd";
    break;
    case 'error-page.php':
      $pageTitle = "Error Page - Contours Ltd";
      break;
  default:
    $pageTitle = "Contours Ltd";
    break;
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description"
    content="Welcome to ..., your one-stop solution for real estate services. Whether you’re buying, selling, renting, or investing, our agency is committed to meeting your needs with excellence. ">
  <meta name="developer" content="Samuel Osei Adu - addsam.dev@outlook.com">
  <title> <?php echo htmlspecialchars($pageTitle) ?> </title>
  <link type="text/css" rel="stylesheet" href="css/plugins.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>