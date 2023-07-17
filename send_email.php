<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Fetch form data
  $name = $_POST['name'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $option1 = isset($_POST['option1']) ? 'Yes' : 'No';
  $option2 = isset($_POST['option2']) ? 'Yes' : 'No';

  // Compose email content
  $to = 'saimabbas220022@gmail.com'; // Change this to the desired recipient email address
  $subject = 'New Contact Form Submission';
  $emailContent = "Name: $name\n"
                . "Company: $company\n"
                . "Email: $email\n"
                . "Phone: $phone\n"
                . "Message: $message\n"
                . "Option 1: $option1\n"
                . "Option 2: $option2\n";

  // Send the email
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $emailContent, $headers)) {
    echo 'success';
  } else {
    echo 'error';
  }
}
?>
